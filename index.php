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

  </head>
  <body class="home">
    <?php require "includes/nav.php"; ?>

  <main class="container p-4">

    <!-- NOTE: below is placeholder content. please replace contents with your own content when ready. this content
    serves to give you an idea of what the structure of this page has looked like in the past -->
    <p class="alert alert-info">
      <b>
        PKC 2020 goes online with new dates: June 1-4 2020. Please stay tuned for more information.
      </b>
    </p>

    <div class="row mb-2">
      <article class="col-12">
        <p>
          The IACR International Conference on Practice and Theory of Public-Key Cryptography (PKC) is the main annual conference focusing on all aspects of public-key cryptography, attracting cutting-edge results from world-renowned researchers in the area.
        </p>
        <p>
          <span class="long_conf"><?php echo $META['shortName'];?></span> is sponsored by <a href="http://iacr.org/">the International Association for Cryptologic Research</a> (IACR).
        </p>
        <!-- TODO: place countdown timer to next session here perhaps? -->
      </article>
    </div>

    <div class="row mt-4">
      <div class="col-lg-6">
        <?php require "includes/important_dates.php";?>
      </div>

      <!-- NOTE: Update this to add a row at the top as you add features to the site. -->
      <div class="col-lg-6 mt-4 mt-lg-0">
        <article class="customCard">
          <h4 class="customCardHeader">
            Website Updates
          </h4>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 16 2020
            </h6>
            <p class="col-7 col-md-8">
              New dates for online conference
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              March 12 2020
            </h6>
            <p class="col-7 col-md-8">
              Conference postponed due to the COVID-19 crisis
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              March 1 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="program.php">Program</a> online
            </p>
          </div>
         <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 19 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="registration.php">Registration</a> activated
            </p>
          </div>
          <!-- TODO: add this page! -->
          <!-- <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 18 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="adl.php">Advances in Distributed Ledgers workshop</a> online
            </p>
          </div> -->
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              February 15 2020
            </h6>
            <p class="col-7 col-md-8">
              <a href="accepted.php">Accepted papers</a> online
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              October 9 2019
            </h6>
            <p class="col-7 col-md-8">
              <a href="papersubmission.php">Submission server</a> online
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 12 2019
            </h6>
            <p class="col-7 col-md-8">
              <a href="callforpapers.php">Call for papers</a> page online
            </p>
          </div>
          <div class="customCardRow row">
            <h6 class="dateTitle col-5 col-md-4">
              April 12 2019
            </h6>
            <p class="col-7 col-md-8">
              Website launched
            </p>
          </div>
        </article>
      </div>
    </div>

  </main>

  <?php include "includes/footer.php";?>
</body>
</html>
