<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
    require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> "/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> "/>

    <title>
      <?php echo $META['shortName'];?>
    </title>
    <style>
      .tt-text {
/*      font-family: monospace;*/
      }
    </style>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">

      <h2 class="indPageTitle">
        Participation Guidelines
      </h2>
      <div class="row">
        <div class="col-md-6">
          <p>
            There are many ways you can participate in an IACR virtual
            conference. Your participation is valuable and we
            encourage you to add to the discussion. Like a
            face-to-face conference, virtual conferences are only as
            good as the interactions that occur there.
          </p>
          <p>
            We recognize that a virtual conference is not a 1:1
            substitute for a physical conference. However, we believe
            there are distinct advantages to having a virtual
            conference. These include a lack of space constraints,
            travel is not required, and the ability to attend all
            talks since they are recorded.
          </p>
        </div>

        <div class="col-md-6 mt-md-4">
          <p class="alert alert-warning">
            <img src="images/icons/exclamation.svg" class="icon">
            All conference attendees must be IACR members. When you
            participate in Q&amp;A, chat, etc, you must do so in such
            a way that you are readily identifiable (i.e. by using the
            name you are known by in your professional
            work). The <a href="conduct.php">code of conduct</a> still
            applies in a virtual setting.
          </p>
        </div>
      </div>


      <h3 class="pageSubtitle mt-4">
        Schedule Structure
      </h3>
      <p>
        The conference is organized over 4 days, with approximately 4
        hours per day. Sessions consist of live 5 minute presentations
        of the papers, which are grouped by topic, followed by a Q&amp;A
        panel discussion with the speakers and session moderators. The
        conference will also feature an invited talk by Yuval Ishai. We recommend
        monitoring <a href="program.php">the conference program</a> to
        see which sessions are upcoming.
      </p>

      <h3 class="pageSubtitle mt-4">
        Ways to Participate
      </h3>
      <div class="row">
        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Live Sessions
          </h4>
          <p>
            We will be holding live Q&amp;A panels over Zoom with authors
            multiple times daily. At these panels, attendees will be
            able to ask questions of authors about their work, or to
            encourage interesting conversation amongst authors. These
            Q&amp;As will also be livestreamed on our <a href="https://www.youtube.com/user/TheIACR">YouTube channel</a> and
            are available for later viewing.
          </p>
        </div>
        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            YouTube
          </h4>
          <p>
            If you cannot participate live, you will still have access
            to all talks on our <a href="https://www.youtube.com/user/TheIACR">YouTube channel</a>. The authors have
            pre-recorded their talks and you can view them at any
            time. Additionally, there will be copies of the live
            sessions available to watch.
          </p>
          <!--          <div class="d-md-flex justify-content-around">
               <a href="#" class="btn btn-warning">Talks Playlist</a>
               <a href="#" class="btn btn-warning">Q&amp;A Playlist</a>
               </div>-->
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Text and Video Chat
          </h4>
          <p>
            Much like at a face-to-face conference, we know that the
            best conversations can happen in the hallways or at coffee
            breaks. We encourage you to make use of the Zulip instance
            we have set up on <span class="tt-text">chat.iacr.org</span>
            to connect with other conference attendees. There are a
            variety of channels, organized by
            topic.  You can also start small video chat rooms from
            Zulip.
          </p>
          <p class="alert alert-info">
            NOTE: email/password from Eurocrypt 2020 has
            been retained, and <span class="tt-text">chat.iacr.org</span>
            may be accessed from the browser, but also via
            <a href="https://zulipchat.com/apps/">desktop and mobile apps</a>.
          </p>
          <div class="d-md-flex justify-content-center text-center">
          </div>
          <div class="my-2 text-center">
            <a href="https://chat.iacr.org/#narrow/stream/32-PKC2020-general" class="btn btn-warning">Join the chat</a>
          </div>
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Watch Parties
          </h4>
          <p>
            Jitsi (hosted on non-IACR servers) allows you to host
            watch parties, whereby you and others watch a talk or
            Q&amp;A session together. Like chat, watch parties
            encourage discussion and interaction amongst attendees.
            We recommend starting these from Zulip on <span class="tt-text">chat.iacr.org</span>.
          </p>
          <h6 class="text-center font-weight-bold">How to start a videoconference or watch party in chat.iacr.org (Zulip)</h6>
          <img src="images/jitsi.png" class="img-fluid ml-3 border shadow">

          <!--          <div class="d-md-flex justify-content-center">
               <a href="https://meet.jit.si/" class="btn btn-warning">Host or attend a watch party</a>
               </div>-->
        </div>

        <div class="col-md-6 mx-lg-auto col-lg-5 col-xl-4 mb-md-4">
          <h4 class="subSubtitle text-md-center">
            Social Events
          </h4>
          <p>
            We have set up a variety of social events for each day at the conference, and have listed them in the program. On Tuesday, we have the more experimental social events. Otherwise we'll be using breakout rooms on Zoom following the last session of each day.
          </p>
          <p>
            If you'd like to start your own social events, and want to allow other attendees to join, post a link on Zulip at <span class="tt-text">chat.iacr.org</span>.
          </p>
        </div>

      </div>

      <h3 id="attendWebinar" class="pageSubtitle mt-4">
        Attending a Session
      </h3>
      <div class="row">
        <div class="col-sm-7">
          <!-- TODO: add after first sentence below (Learn more about the IACR's statement on Zoom <a href="#">here</a>.) -->
          <p>
            We are using Zoom for our live Q&amp;A sessions. <strong>You
            do not have to install Zoom software to attend!</strong> If you plan to attend a session
            using your browser, it needs to be one of the following:
          </p>
          <ul>
            <li>
              Internet Explorer<sup>*</sup> 10 or higher
            </li>
            <li>
              Chromium-based Microsoft Edge 80 or higher
            </li>
            <li>
              Google Chrome 53.0.2785 or higher
            </li>
            <li>
              Safari<sup>*</sup> 10.0.602.1.50 or higher
            </li>
            <li>
              Firefox 76 or higher
            </li>
            <li>
              Chromium (not officially supported by Zoom, but the IACR has tested it and it appears to work similarly to Chrome)
            </li>
          </ul>
          <p>
            <small><sup>*</sup>
              Please note that Zoom officially recommends Chrome, Edge, or Firefox for full functionality.</small>
          </p>
          <p>
            If you wish to use the desktop client, there are options
            available for all operating systems. However, there are
            serious security vulnerabilities for each. The IACR does
            not recommend the installation of Zoom desktop clients at
            this time (15 April 2020).
          </p>
        </div>
        <div class="col-sm-5">
          <p class="text-center">How to enter a Zoom meeting with the <a href="https://support.zoom.us/hc/en-us/articles/214629443-Zoom-web-client">web client</a>.</p>
          <img src="images/zoom/annoying_zoom_windows.png" class="img-fluid border shadow mb-4">
        </div>
      </div>
      <h4 class="subSubtitle">
        Do I need a Zoom account?
      </h4>
      <p>
        We offer entrance to our sessions for both attendees with Zoom
        accounts and those without. When you log in via the browser
        client, Zoom will ask for an email. This does not have to be a
        legitimate email address. However, if you plan to use the
        desktop client, you will need a Zoom account.
      </p>

      <h3 class="pageSubtitle mt-4">
        Frequently Asked Questions
      </h3>
      <h4 class="subSubtitle">
        How do I ask a question during the live Q&amp;A sessions?
      </h4>
      <p>
        We strongly encourage you to use the corresponding Zulip stream on <span class="tt-text">chat.iacr.org</span> or to ask it verbally during the session (when called on by moderators). Note that Zulip allows for other attendees to see your question and upvote it by reacting with emojis. Authors may answer verbally during the session or have a longer discussion on Zulip.
      </p>

      <h4 class="subSubtitle">
        The session times are not convenient for me. What can I do?
      </h4>
      <p>
        Unfortunately, due to the wide variety of time zones IACR
        members live in, we cannot accommodate everyone. We strongly
        encourage those who cannot attend live events to still
        participate in the conference asynchronously.
      </p>
      <p>
        Live Q&amp;A sessions and invited talks are streamed to
        YouTube and available for viewing after the fact. You can also
        watch any of the pre-recorded talks on YouTube, or participate
        in chat via Zulip. If you don't want to watch the talks alone,
        we suggest you to host a watch party for others in your time zone. Post watch party links on Zulip if you'd like to encourage others to join.
      </p>

      <h4 class="subSubtitle">
        Zoom and YouTube have security and privacy issues. Does this
        mean the IACR endorses these technologies?
      </h4>
      <p>
        No. There was no perfect solution available, and we had a very
        quick turnaround time, so we opted for commercial options that
        had a high degree of reliability while offering the best user
        experience. The IACR acknowledges the security and privacy
        problems of each of these technologies, and our use of them is
        not to be considered an endorsement.
      </p>
      <p>
        For future IACR virtual events, we hope to be able to host more services on our own servers.
      </p>

    </main>

    <?php include "includes/footer.php"; ?>
  </body>
</html>
