<?php ob_start();
try {
  require_once('includes/title.inc.php');
  require_once('includes/header.inc.php');
?>

<!--
  * File: index.php
  * Author: Jason McCoy
  * Description: home page for Tumor Bank of WNC, Inc.
-->
<div class="row hide-for-medium-down" id="blockquote">
  <div class="large-12">
    <div class="mb-wrap mb-style-1">
    <div class="mb-thumb"></div>
    <blockquote>
      <p><i class="icon-quote-left"></i> Helping you or your loved one place your tumor tissue<br> in a safe and reliable laboratory for future study. <i class="icon-quote-right"></i></p>
    </blockquote>
    <div class="mb-attribution">
      <p class="mb-author">Thomas D. Roberts, Chairman of the Board</p>
    </div>
    </div>
</div>
</div>
<ul id="gallery" data-orbit data-orbit data-options="bullets:false;slide_number:false;">
  <li data-orbit-slide="headline-1" id="aboutUsSlide">
    <h2>About Us</h2>
      <p><img class="radius" src="images/about_us.png" alt=""></p>
<div class="slidePara" id="aboutUsPara">
    <p>The Tumor Bank of WNC, Inc. is a private non-profit organization founded in early 2012.
    The Tumor Bank of WNC offers qualified patients financial assistance in order to obtain opportunities in preserving and/or freezing their tumor cells/tissue for the furthering of medical science/research.
    It may also enable some cancer patients the ability to use their own tumor cells in vaccine trials or approved strategies.
    It may allow for further studies of the patient's gene markers which could help his/her doctor select the best treatment option for that patient.
    The Tumor Bank of WNC does not provide any of these services but helps financially strained patients acquire such services from various laboratories.</p>
</div>
  </li>
  <li data-orbit-slide="headline-2" id="ServicesSlide">
    <h2>Services Provided</h2>
    <p><img class="radius" src="images/services.png"></p>
<div class="slidePara" id="servicesPara">
        <p>The Tumor Bank of WNC Inc. merely allows patients the opportunity to access services that begin in the operating room 
          when you go to surgery to remove your tumor or other tissue.  Your surgeon(s) and pathologist(s) will decide how much of your 
          tumor, if any, can be spared without limiting their ability to make a definitive diagnosis of your tumor type, along with the special stains, 
          genetic markers if appropriate and specific indicators of prognosis.  We will help you or your loved one identify and engage a tumor cell repository/laboratory that best suits your needs.</p>
</div>
  </li>
  <li data-orbit-slide="headline-3" id="CostSlide">
    <h2>How Much Does It Cost?</h2>
    <p><img class="radius" src="images/cannot_afford.png"></p>
<div class="slidePara" id="howMuchPara">
        <p>There is no charge for our services, but the average cost for storing and growing some of your tissue or tumor 
          cells is between $400 and $900 down and 30 to 50 dollars per month. This cost will vary by institution, and we recommend using Wake Forest University's Comprehensive Cancer Center in Winston-Salem, Winship Cancer Institute of Emory University, Duke University's Cancer Center and the University of North Carolina-Chapel Hill's Lineberger Comprehensive Cancer Center.  Also, more local, is a biotech company called Immunogenix Research and there may be others opening up in the Asheville area over time.</p>
</div>
  </li>
  <li data-orbit-slide="headline-4" id="AffordSlide">
    <h2>What If I Can't Afford Such Services?</h2>
    <p><img class="radius" src="images/how_much.png"></p>
<div class="slidePara" id="affordPara">
        <p>Up front fees for our services are about 400-900 dollars. In addition to these up front fees, it costs about $30 to $50 per month 
          to store a patient's tumor tissue in a tumor tissue repository (freezer/incubator).  If you cannot afford this service, or can only pay for 
          part of the cost, our foundation, the Tumor Bank of WNC, will try to help you with part or all of the cost of processing, preserving and 
          growing your cells in culture.</p>
</div>
  </li>
  <li data-orbit-slide="headline-5" id="NextSlide">
    <h2>What Do I Do Next?</h2>
    <p><img class="radius" src="images/what_next.png"></p>
<div class="slidePara" id="nextPara">
        <p>You can call your doctor, or if time permits, discuss this option with him or her at your next appointment.  
          He/she should have the appropriate consent form for you to review. You can then discuss your options with your doctor, or if he 
          or she prefers, you may speak with one of our Tumor Bank staff members who will be glad to help you choose a specimen storage program that best suits your needs.</p>
</div>
  </li>
  <li data-orbit-slide="headline-6" id="DonateSlide">
    <h2>How Can I Make a Donation?</h2>
    <p><img class="radius" src="images/how_donate.png"></p>
<div class="slidePara" id="donatePara">
        <p>We are a 501(c)(3) organization and all donations made to the Tumor Bank of WNC, Inc. are tax-deductible. To make a donation, use the Donate link at the top of the page.  We desperately need your help to continue this project.  It is only through the kindness of individuals like you that we can make tissue and cancer cell storage a reality for patients in financial hardship in Western North Carolina and surrounding areas.</p>
</div>
  </li>
</ul>
</div>
</div>

<!-- FOOTER -->
  <div class="row">
    <div class="large-12">
        <div id="footer">
  <?php 
      require_once('./includes/footer.inc.php'); 
  ?>  
  </div>
    </div>
  </div>
</div>

<?php } catch (Exception $e) {
  ob_end_clean();
  header('Location: error.php');
}
ob_end_flush();
?>