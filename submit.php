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
    <meta property="og:title" content="Submit Your Photos">
    <title>Submit Your Photos</title>
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
          
          <h1>Submit <br class="visible-xs">Your Cannabis Photos</h1>
          <p>You may have noticed that we post a lot of cannabis photos on our social media profiles. We love cannabis and so do our fans. If you want to have your photos featured on our social media profiles, all you need to do is send them to:</p>
          <h3>photos@420cannabismerch.com</h3>
          <div class="spacer"></div>
          <P>You can post your cannabis photos to our Facebook page wall too, or you can tag any of your photos on Facebook, Twitter or Instagram with the hashtag <strong>#420cannabismerchsubmit</strong> and we will find them that way.</P>
          
          <p>Don't worry, all posts will remain annonymous unless you tell us otherwise. <i class="fa fa-smile-o"></i></p>
          
          <div class="spacer40"></div>
          <p class="small">By submitting or hashtagging any photos you agree for <strong>420 Cannabis Merch</strong> to use the photos without restriction on our website, products or social media profiles.</p>

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