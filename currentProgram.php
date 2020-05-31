<?php
// This implements an ajax call to get the current program.
// We need this because it needs to add the current URLs for
// session. We do this by fetching the basic program.json
// created in the program editor, fetch the current URLs of
// the sessions, and populate the URLs in the program. The
// schema is modified by adding a youtubeUrl, zoomUrl, and
// chatUrl into each session.

/**
 * Given a URL, return a URL-encoded array with iv, auth, dest parameters.
 */
require('/var/www/data/lib.php');
require_once('creds.php');
function proxyUrl($tablename, $url) {
  global $encrypt_key;
  $key = $encrypt_key;
  $cipher = 'AES-256-CBC';
  $ivlen = openssl_cipher_iv_length($cipher);
  $iv = openssl_random_pseudo_bytes($ivlen);
  $dest = openssl_encrypt($url, $cipher, $key, 0, $iv);
  $auth = get_hmac($tablename . $url);
  $args = http_build_query(array('dest' => base64_encode($dest),
                                 'iv' => base64_encode($iv),
                                 'ivlen' => $ivlen,
                                 'conf' => $tablename,
                                 'auth' => $auth));
  return 'https://iacr.org/virtualconferences/?' . $args;
}

$confname = 'pkc2020';

$editorData = json_decode(file_get_contents('json/pkc_program.json'), TRUE);
//$editorData = json_decode(file_get_contents('https://iacr.org/tools/program/ajax.php?id=313&iacrref=foo'), TRUE);
$extraLinks = json_decode(file_get_contents('json/extraLinks.json'), TRUE);
$youtube = $extraLinks['youtube'];
$slides = $extraLinks['slides'];
$zoom = $extraLinks['zoom'];
// These are a hack for PKC.
$misc = $extraLinks['misc'];
$eprint = $extraLinks['eprint'];
header('Content-Type: application/json');
foreach($editorData['days'] as $dayindex => &$day) {
  foreach ($day['timeslots'] as $timeslotindex => &$timeslot) {
    foreach($timeslot['sessions'] as $sessionindex => &$session) {
      if (isset($misc[$session['id']])) {
        $obj = $misc[$session['id']];
        $session['miscUrl'] = array('url' => proxyUrl($confname, $obj['url']),
                                    'title' => $obj['title']);
      }
      if (isset($zoom[$session['id']])) {
        $session['zoomUrl'] = proxyUrl($confname, $zoom[$session['id']]);
      }
      // These are for past recordings.
      if (isset($extraLinks['youtube'][$session['id']])) {
//        $session['youtubeUrl'] = proxyUrl($confname, $extraLinks['youtube'][$session['id']]);
        $session['youtubeUrl'] = $extraLinks['youtube'][$session['id']];
      }
      if (isset($extraLinks['chat'][$session['id']])) {
        $session['chatUrl'] = proxyUrl($confname, $extraLinks['chat'][$session['id']]);
      } else {
        // for testing
        // $session['chatUrl'] = proxyUrl($confname, 'https://chat.iacr.org/');
      }
      foreach($session['talks'] as $talkindex => &$talk) {
          //      $talk['slidesUrl'] = proxyUrl($confname, 'https://iacr.org/submit/files/slides/2020/eurocrypt/kdev/2/slides.pdf');
        $talkid = $talk['id'];
        if (isset($youtube[$talkid])) {
            $talk['videoUrl'] = $youtube[$talkid];
        }
        if (isset($slides[$talkid])) {
          $talk['slidesUrl'] = $slides[$talkid];
        }
        if (isset($eprint[$talkid])) {
          $talk['eprint'] = $eprint[$talkid];
        }
      }
      if ($session['talks']) {
        $session['session_url'] = 'participation.php#attendWebinar';
      }
    }
  }
}
echo json_encode($editorData);
?>
