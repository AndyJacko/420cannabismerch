<?php include ("cp/scripts/db/dbConnection.php");?>
<?php include ("cp/scripts/functions/emailfunctions.php"); ?>
<?php 
$cats = mysqli_connect($servername, $username, $password, $dbname);
$catsql = "SELECT * FROM tbl_cat";
$catrs = mysqli_query($cats, $catsql);
?>
<?php 
if (isset($_POST["YourName"])){
  if ($_POST["g-recaptcha-response"] != ""){
	$YourName = $_POST["YourName"];
	$YourEmail = $_POST["YourEmail"];
	$YourSubject = $_POST["ContactSubject"];
	$YourComment = $_POST["YourComment"];
	
	$to = "andy@420cannabismerch.com";
	$subject = $YourSubject;
	
	$mailbody = getEmailTemplate($YourSubject, $YourName, $YourEmail, $YourComment);	

	$headers = 'From: contactform@420cannabismerch.com' . "\r\n" .
	'Reply-To: contactform@420cannabismerch.com' . "\r\n" .
	'MIME-Version: 1.0' . "\r\n" .
	'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	mail($to,$subject,$mailbody,$headers);
	
	header("Location: /contact.php?s=1"); 
  }
}
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
    <meta property="og:title" content="Contact 420 Cannabis Merch">
    <title>Contact 420 Cannabis Merch</title>
    <!-- InstanceEndEditable -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/scripts/css/style.css" rel="stylesheet" type="text/css">
    <script src="/scripts/js/prefixfree.min.js"></script>
    <!-- InstanceBeginEditable name="head" -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
          
          <h1>Contacting <br class="visible-xs">420 Cannabis Merch</h1>
          <?php if ($_GET["s"] == "1") { echo "<h3 class='text-danger'>Your Email Has Been Sent</h3>"; } ?>
          
          <p>Because we are primarily an online design company and the products we have on this website are shipped directly from our partners, we do not have a physical bricks-and-mortar contact address.</p>
          <p>If you need to speak about a product or an order you have made, we suggest contacting the company you made the order with in the first instance.</p>
          <p>We can still be contacted by sending an email to <strong>contact@420cannabismerch.com</strong>, or by completing the form below. We are here to help in any way we can, and we aim to answer all legitimate emails within 24 hours.</p>
          <form id="form" name="form" method="post" action="contact.php" novalidate>
            <div class="form-group">
              <label for="YourName">Your Name</label>
              <input type="text" name="YourName" id="YourName" class="form-control" value="<?php echo $_POST["YourName"]; ?>">
            </div>
            <div class="form-group">
              <label for="YourEmail">Email Address</label>
              <input type="email" name="YourEmail" id="YourEmail" class="form-control" value="<?php echo $_POST["YourEmail"]; ?>">
            </div>
            <div class="form-group">
              <label for="ContactSubject">Subject</label>
              <input type="text" name="ContactSubject" id="ContactSubject" class="form-control" value="<?php echo $_POST["ContactSubject"]; ?>">
            </div>
            <div class="form-group">
              <label for="YourComment">Message</label>
              <textarea name="YourComment" id="YourComment" class="form-control"  rows="3"><?php echo $_POST["YourComment"]; ?></textarea>
            </div>
            <div class="form-group">
              <div class="g-recaptcha" id="Recaptcha" data-sitekey="6LekjhsTAAAAAByJrti9Wox6-TRDy7Bs_o4oLYlQ"></div>
              <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
          <p>&nbsp;</p>
          
          <!-- InstanceEndEditable -->
        </section>
      </div>
    </div>
    <?php include ("scripts/template/footer.php");?>
    <a href="#top" id="toTop"><span class="fa fa-arrow-circle-up"></span></a>
    
    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <!-- InstanceBeginEditable name="footer-scripts" -->
    <script src="scripts/js/jquery.validate.js"></script>
    <!-- InstanceEndEditable -->
    
    <script src="/scripts/js/jquery.scrollToTop.min.js"></script>
    <script src="/scripts/js/custom.js"></script>
  </body>
<!-- InstanceEnd --></html>
<?php
mysqli_close($cats);
?>