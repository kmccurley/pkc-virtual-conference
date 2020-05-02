<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> sponsors"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> sponsors"/>

    <title>
      Sponsors for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Sponsors
      </h2>

      <div class="row">
        <section class="col-12">
          <p>
            <span class="conf_name"><?php echo $META['shortName'];?></span> relies on sponsors to help ensure student participation. Please contact the <a href="contact.php">General Chairs</a> if your company is interested in sponsoring this conference.
          </p>
        </section>
      </div>

      <!-- NOTE: below is placeholder content. please uncomment and replace with your own content when ready. make sure to verify that all included sponsors are current, with appropriate links. -->
      <h3 class="pageSubtitle mt-4">
        Local Sponsors
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.sicsa.ac.uk/">
            <img src="./images/sponsors/pkc2020/sicsa-logo.jpg" alt="The Scottish Informatics and Computer Science Alliance (SICSA)" title="The Scottish Informatics and Computer Science Alliance (SICSA)" class="sponsorPageLogo">
          </a>
        </div>
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://www.sicsa.ac.uk/research/sicsa-cyber-nexus/">
            <img src="./images/sponsors/pkc2020/nexus-logo.jpg" alt="Cybersecurity Nexus" title="Cybersecurity Nexus" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Gold Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://iohk.io/">
            <img src="./images/sponsors/pkc2020/iohk.svg" alt="IOHK" title="IOHK" class="sponsorPageLogo">
          </a>
        </div>
      </div>

      <hr />
      <h3 class="pageSubtitle mt-4">
        Silver Level
      </h3>

      <div class="d-flex flex-wrap align-items-center sponsorRows">
        <div class="sponsorLogoBox justify-content-between">
          <a href="https://dfinity.org/">
            <img src="./images/sponsors/pkc2020/dfinity.png" alt="Dfinity" title="Dfinity" class="sponsorPageLogo">
          </a>
        </div>
      </div>

    </main>
    <?php include "includes/footer.php"; ?>
  </body>
</html>
