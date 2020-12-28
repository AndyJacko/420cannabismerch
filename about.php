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
    <meta property="og:title" content="About 420 Cannabis Merch">
    <title>About 420 Cannabis Merch</title>
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
          
          <h1>About <br class="visible-xs">420 Cannabis Merch</h1>
          <p><strong>420 Cannabis Merch</strong> is a new online design company based in Manchester, UK. Our mission is to provide the highest quality cannabis related merchandise to our fans, using the power of the internet.</p>
          <p>To help keep costs to a minimum, we promote our dsigns through several well established online services like Zazzle, Cafe Press and Red Bubble. These companies handle all the manufacturing of the products and then ship them directly to you, wherever you live in the world.</p>
          <p>Another benefit to this kind of setup is that we can put our designs on multiple product types such as Clothing, Phone Cases, Postcards, Bags and Jewellery much easier. Because we don't deal with the manufacture and delivery processes it gives us more time to come up with awesome new designs. This gives you more options to choose from.</p>
          <h3>Affiliate Disclosure</h3>
          <p>As well as our own designs, some of the products you will find listed on this website belong to other popular 3<sup>rd</sup> party companies, such as Everyone Does It, Dank Stop, Zazzle, Cafe Press and Red Bubble. <strong>420 Cannabis Merch</strong> has partnered with these companies to give you the best selection of products as possible.</p>
          <p>We also want to let you know of any special offers and discounts that these companies are running, to help save you some money.</p>
          <p>When you click to view an affiliate product, you are taken directly to the product on the company's own website. If you then decide to purchase the product from their website, <strong>420 Cannabis Merch</strong> will receive a small commission of around 3%-15% of the product's cost. This commission allows us to pay for running and maintaining this website, and also for the time that we spend keeping you updated on our social media profiles.</p>
          
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