<!DOCTYPE html>
<html lang="en">
  <head>
    <?php // The header includes the head tag and start of body
      require "includes/head.php";
    ?>
    <meta property="og:title" content="<?php echo $META['shortName'];?> call for papers"/>
    <meta name="twitter:title" content="<?php echo $META['shortName'];?> call for papers"/>

    <title>
      <?php echo $META['shortName'];?> Call for Papers
    </title>
  </head>
  <body>
    <?php require "includes/nav.php"; ?>

    <main class="container p-4">
      <h2 class="indPageTitle">
        Call for Papers
      </h2>

      <h3 class="pageSubtitle">General Information</h3>
      <p>
        The International Conference on Practice and Theory in Public-Key Cryptography (<span class="conf_name"><?php echo $META['shortName'];?></span>) is organized annually by the <a href="https://www.iacr.org">International Association for Cryptologic Research</a> (IACR). It is the main annual conference with an explicit focus on public-key cryptography sponsored by IACR. Original research papers on all aspects of public-key cryptography, covering theory, implementations and applications, are solicited for submission to PKC 2020. Accepted papers will be published by Springer in their Lecture Notes in Computer Science series.
      </p>
      <p>
        The call for papers is also available in <a href="files/PKC2020-cfp.pdf">PDF</a>.
      </p>

      <div class="row mt-4">
        <section class="col-lg-6">
          <h3 class="pageSubtitle">
            Instructions for Authors
          </h3>
          <p>
            Submissions should be prepared using LaTeX and must be in the standard <a href='http://www.springer.com/computer/lncs'>Springer LNCS format</a>, with the (only) modification that page numbers must be displayed&mdash; this can be done by putting <code>\pagestyle{plain}</code> into the preamble. Submissions should begin with a title and a short abstract, followed by an introduction that summarizes the contribution of the paper so that it is understandable to a non-expert in the field. Submissions must be anonymous, with no author names, affiliations, or obvious references.
          </p>
          <p>
            Submissions must be at most 30 pages, including title page, references, and figures. The final published version of an accepted paper is expected to closely match these submitted pages. If necessary, clearly marked supplementary material (of unbounded size) may be appended to the actual submission. However, submissions are expected to be intelligible and verifiable without the supplementary material; reviewers are not required to read it. In particular, it is discouraged to move crucial proofs into the supplementary material, and in cases where this is unavoidable it is expected that a short but convincing proof sketch is provided in the main body.
          </p>
          <p>
            Submissions must not substantially duplicate published work or work that has been submitted in parallel to any other journal or conference/workshop with proceedings. All submissions to PKC 2020 are viewed as active submissions throughout the entire review period; they cannot be submitted to any other journal or conference/workshop with proceedings before the notification date. Accepted submissions cannot appear in any other conference or workshop that has proceedings. IACR reserves the right to share information about submissions with other program committees. The IACR Policy on Irregular Submissions and Guidelines for Authors, as well as other resources, are all available via <a href="http://www.iacr.org/docs">http://www.iacr.org/docs</a>.
          </p>
        </section>
        <div class="col-lg-6 mt-3 mt-lg-0">
        <?php require "includes/important_dates.php";?>
        </div>
      </div>


      <!-- <div class="row mt-lg-4">
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Awards
          </h3>
          <p>
            The Program Committee may choose a paper to receive an
            overall best paper award. In a continuing effort to
            promote independent work by researchers at an early stage
            in their career, the Program Committee may also award a
            prize for the best paper authored exclusively by
            early-career researchers. To be eligible, all co-authors
            must be studying full/part-time or have received their
            degree in 2018 or later. As usual, awards will only be
            given if deserving papers are identified.
          </p>
        </section>
        <section class="col-md-6">
          <h3 class="pageSubtitle">
            Stipends
          </h3>
          <p>
            Students whose papers have been accepted and who present their talks at the conference will have their registration waived. A limited number of stipends are available to those unable to obtain funding to attend the conference. Students, whose papers are accepted and who will present the paper themselves, are encouraged to apply if such assistance is needed. Requests for stipends should be sent to the general chair.
          </p>
        </section>
      </div> -->

      <h3 class="pageSubtitle">Paper submissions</h3>
      <p>
        Papers must be submitted electronically; a detailed description of the electronic submission procedure will be available at <a href="papersubmission.php">the paper submission page</a>.
      </p>
      <p class="alert alert-danger">
        Submissions not meeting any of the guidelines above risk rejection without consideration of their merits. All accepted papers must conform to Springer publishing requirements and authors will be required to sign the IACR Copyright and Consent Form when submitting the proceedings version of their papers. Authors must guarantee that their paper, if accepted, will be presented at the conference by one of the authors.
      </p>

      <h3 class="pageSubtitle mt-4">
        Program Committee
      </h3>

      <div id="errorBox"></div>
      <div id="committee" class="row">
        <!-- Handlebars import of PC members -->
        <script id="committee-member" type="text/x-handlebars-template">
          {{#each committee}}
            <article class="col-12 col-sm-6 col-md-4 col-xl-3 my-2">
              <h4 class="subSubtitle">
                {{name}}
              </h4>
              <p class="text-left">
                {{affiliation}}
              </p>
            </article>
          {{/each}}
        </script>
      </div>

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
        Program Committee Chair
      </h3>

      <div class="row mt-3 mt-md-4">
        <aside class="col-12 col-md-6 text-center mb-2 mx-md-auto">
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
        <div class="col-12 text-center">
          <a href="mailto:pkc2020programchair@iacr.org">
            <img src="images/icons/email.svg" class="icon" />&nbsp;<img src="images/contacts/pkcpc2020.jpg" />
          </a>
        </div>
      </div>

    </main>

  <?php include "includes/footer.php"; ?>

    <!-- Handlebars -->
    <script src="https://iacr.org/libs/js/handlebars/handlebars-v4.1.0.js" type="text/javascript"></script>
    <!-- Personal scripts -->
    <script src="./js/committee.js"></script>

  </body>
</html>
