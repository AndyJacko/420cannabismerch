<?php include ("cp/scripts/db/dbConnection.php");?>
<?php 
$cats = mysqli_connect($servername, $username, $password, $dbname);
$catsql = "SELECT * FROM tbl_cat";
$catrs = mysqli_query($cats, $catsql);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/frontend.dwt.php" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://420cannabismerch.com/<?php echo basename($_SERVER['PHP_SELF']); ?>">
    <meta property="og:image" content="http://420cannabismerch.com/images/FBImage.jpg">
    <meta property="og:site_name" content="420 Cannabis Merch">
    <meta property="fb:app_id" content="">
    <meta property="fb:admins" content="">
    <!-- InstanceBeginEditable name="description" -->
    <meta property="og:description" content="">
    <meta name="description" content="">
    <!-- InstanceEndEditable -->
    <link rel="author" href="humans.txt">
    <link rel="icon" href="favicon.png">
    <!-- InstanceBeginEditable name="doctitle" -->
    <meta property="og:title" content="Subscribe To Our Mailing List">
    <title>Subscribe To Our Mailing List</title>
    <!-- InstanceEndEditable -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/scripts/css/style.css" rel="stylesheet" type="text/css">
    <script src="/scripts/js/prefixfree.min.js"></script>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
  </head>

  <body>
    <?php include ("scripts/template/analytics.php");?>
    <?php include ("scripts/template/nav.php");?>
    
    <div class="container-fluid">
      <div class="row">
        <?php include ("scripts/template/categories.php");?>
        
        <section id="content" class="col-lg-10">
          <?php include ("scripts/template/social.php");?>
          <!-- InstanceBeginEditable name="page-content" -->
          <h1>Subscribe <br class="visible-xs">To Our Mailing List</h1>
          <p>From time to time our partners will have a sitewide sale, certin products on special offfer or will provide us with discount coupon codes specially for our fans.</p>          
          <p>We also periodically send our subscribers articles about what is happening in the cannabis world. These could be articles about legalizing cannabis or other cannabis related issues that appear in the news or online.</p>
          <p>If you would like to keep updated on the latest news, offfers and discounts be sure to sign up for our mailing list:</p>
          <p class="small"><em><strong>Note: We hate spam, your details will never be sold or shared.</strong></em></p>
          <!-- Begin MailChimp Signup Form -->
          <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
          <div id="mc_embed_signup">
            <form action="//420cannabismerch.us7.list-manage.com/subscribe/post?u=731fd45c41df466054e7a6086&amp;id=4787c4340c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                <div class="mc-field-group">
                  <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                  <label for="mce-FNAME">First Name  <span class="asterisk">*</span></label>
                  <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_731fd45c41df466054e7a6086_4787c4340c" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
            </form>
          </div>
          <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
          <!--End mc_embed_signup-->
                 
          <!-- InstanceEndEditable -->
        </section>
      </div>
    </div>
    <?php include ("scripts/template/footer.php");?>
    <a href="#top" id="toTop"><span class="fa fa-arrow-circle-up"></span></a>
    
    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <!-- InstanceBeginEditable name="footer-scripts" -->
    <!-- InstanceEndEditable -->
    
    <script src="/scripts/js/jquery.scrollToTop.min.js"></script>
    <script src="/scripts/js/custom.js"></script>
  </body>
<!-- InstanceEnd --></html>
<?php
mysqli_close($cats);
?>