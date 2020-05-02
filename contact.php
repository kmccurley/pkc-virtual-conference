<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> contact information"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> contact information"/>

    <title>
      Contact for <?php echo $META['shortName'];?>
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Contact
      </h2>

      <!-- NOTE: below is standard placeholder text for when the page is under construction. please delete this entire <div class="row"> and all elements contained within it when ready to add other content -->
      <!-- <div class="row">
        <div class="col-12">
          <p>
            This information is not yet available. Thank you for your patience.
          </p>
        </div>
      </div> -->

      <h3 class="pageSubtitle text-center mt-4">
        General Chairs
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Markulf Kohlweiss
          </h4>
          <p class="text-center">
            University of Edinburgh<br>
            Scotland
          </p>
        </aside>
        <aside class="col-12 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Petros Wallden
          </h4>
          <p class="text-center">
            University of Edinburgh<br>
            Scotland
          </p>
        </aside>
        <aside class="col-12 col-md-4 text-center mb-2">
          <h4 class="subSubtitle">
            Vassilis Zikas
          </h4>
          <p class="text-center">
            University of Edinburgh<br>
            Scotland
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:pkc2020@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/pkc2020.jpg" />
          </a>
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Program Chair
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 mx-md-auto text-center mb-2">
          <h4 class="subSubtitle">
            Aggelos Kiayias
          </h4>
          <p class="text-center">
            University of Edinburgh<br>
            Scotland
          </p>
        </aside>
      </div>

      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:pkc2020programchair@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/pkcpc2020.jpg" />
          </a>
        </div>
      </div>

      <h3 class="pageSubtitle text-center mt-4">
        Virtual Conference Administrators
      </h3>
      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Kevin McCurley
          </h4>
        </aside>
        <aside class="col-12 col-md-6 text-center mb-2">
          <h4 class="subSubtitle">
            Kay McKelly
          </h4>
          <p class="text-center">
            IACR
          </p>
        </aside>
      </div>
      <div class="row">
        <div class="col-12 text-center mb-5">
          <a href="mailto:virtual-conferences@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/vc.jpg" />
          </a>
        </div>
      </div>
    </main>

  <?php include "includes/footer.php"; ?>
  </body>
</html>
