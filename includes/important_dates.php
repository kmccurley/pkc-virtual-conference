<?php
/* This is included on several pages to have a single place
   where dates are recorded. The dates should be consistent
   with what is in json/metadata.json, which is why we use
   $META['submitdate'] and $META['dates'].
*/
?>
<article class="customCard">
  <h4 class="customCardHeader">
    Important Dates
  </h4>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4 past">
      November 2 2019
    </h6>
    <p class="col-7 col-md-8">
      Submission deadline at 21:59:59 UTC
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4 past">
      December 9 2019
    </h6>
    <p class="col-7 col-md-8">
      Rebuttal
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4 past">
      January 18 2020
    </h6>
    <p class="col-7 col-md-8">
      Author notification
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4 past">
      February 2 2020
    </h6>
    <p class="col-7 col-md-8">
      Camera-ready version
    </p>
  </div>
  <div class="customCardRow row">
    <h6 class="dateTitle col-5 col-md-4">
      <?php echo $META['dates'];?>
    </h6>
    <p class="col-7 col-md-8">
      Online conference
    </p>
  </div>
  <div class="customCardFooter">
    <img src="images/icons/exclamation.svg" class="icon" />&nbsp;&nbsp;For further details, consult the <a href="papersubmission.php">paper submission page</a>.
  </div>
</article>
