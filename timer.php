<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?>"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?>"/>

    <title>
      <?php echo $META['shortName'];?>
    </title>
    <style>
      body {
        background-color: white;
      }
      #headerImage {
        background-image:
        url("images/banners/edinburgh-skyline.png");
        background-position: center top;
        background-size: cover;
        height: 30vh;
        color: #102A83;
      }
      #headerGradient {
        background: linear-gradient(rgba(204, 132, 30, 0.6), rgba(254, 253, 251, 0.9));
        height: 100%;
        width: 100%;
      }
      #clockdiv {
        font-size: 2rem;
      }
      h4 {
        color: #102A83;
      }
      footer {
        display: none;
      }
    </style>
  </head>
  <body class="home">
    <audio id="ringtone" src="timer/melody.mp3" preload="auto"></audio>

    <header id="headerImage">
      <div id="headerGradient" class="d-flex justify-content-between">
        <h1 class="mt-4 ml-5">
          PKC 2020
        </h1>
        <div id="clockdiv" class="d-flex w-50 mt-4 justify-content-center">
          <h3 class="pt-2 mr-4">Time until session starts:</h3>
          <div class="px-1 w-25">
            <span class="minutes"></span>:<span class="seconds"></span>
          </div>
        </div>
      </div>
    </header>
    <main class="container-fluid p-4">
      <h2 class="indPageTitle text-center">
        Many thanks to our sponsors
      </h2>

      <div id="sponsorslideshow" class="mt-4 w-75 mx-auto">
        <section class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/sponsors/pkc2020/sicsa-logo.jpg" class="d-block w-50 mx-auto" alt="The Scottish Informatics and Computer Science Alliance (SICSA)">
              <h4 class="text-center mt-3">
                Local Sponsor
              </h4>
            </div>
            <div class="carousel-item">
              <img src="images/sponsors/pkc2020/nexus-logo.jpg" class="d-block w-50 mx-auto" alt="Cybersecurity Nexus">
              <h4 class="text-center mt-3">
                Local Sponsor
              </h4>
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/pkc2020/iohk.svg" class="d-block w-50 mx-auto" alt="IOHK">
              <h4 class="text-center mt-3">
                Gold Sponsor
              </h4>
            </div>

            <div class="carousel-item">
              <img src="images/sponsors/pkc2020/dfinity.png" class="d-block w-50 mx-auto" alt="Dfinity">
              <h4 class="text-center mt-3">
                Silver Sponsor
              </h4>
            </div>
          </div>
        </section>
      </div>
    </main>

    <!-- NOTE: you need this, even though you don't display it, as it includes jQuery -->
    <?php include "includes/footer.php"; ?>
<script>
 function getTimeRemaining(endtime) {
   var t = Date.parse(endtime) - Date.parse(new Date());
   var seconds = Math.floor((t / 1000) % 60);
   var minutes = Math.floor((t / 1000 / 60) % 60);
   var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   return {
     'total': t,
     'days': days,
     'hours': hours,
     'minutes': minutes,
     'seconds': seconds
   };
 }

 function initializeClock(id, endtime) {
   var clock = document.getElementById(id);
   var daysSpan = clock.querySelector('.days');
   var hoursSpan = clock.querySelector('.hours');
   var minutesSpan = clock.querySelector('.minutes');
   var secondsSpan = clock.querySelector('.seconds');

   function updateClock() {
     var t = getTimeRemaining(endtime);

     minutesSpan.innerText = ('0' + t.minutes).slice(-2);
     secondsSpan.innerText = ('0' + t.seconds).slice(-2);

     if (t.total <= 0) {
       clearInterval(timeinterval);
       document.getElementById('ringtone').play();
     }
   }

   updateClock();
   var timeinterval = setInterval(updateClock, 1000);
 }

</script>

<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Set Timer</h3>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label id="inputLabel" for="minutes-input">Enter the number of minutes</label>
          <input type="number" class="form-control" id="minutes-input" name="minutes">
        </div>
        <button class="btn btn-primary" role="button" onClick="setMinutes()">Start timer</button>
      </div>
    </div>
  </div>
</div>


<script>
 function setMinutes() {
   let input = document.getElementById('minutes-input');
   if (input.value > 0) {
     let now = Date.now();
     now += input.value * 60000;
     let deadline = new Date(now);
     initializeClock('clockdiv', deadline);
     $('#inputModal').modal('hide');
   }
 }
 $(document).ready(function() {
   $('#inputModal').modal('show');
 });
</script>
</body>
</html>
