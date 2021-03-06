<?php include ("cp/scripts/db/dbConnection.php");?>
<?php 
$cats = mysqli_connect($servername, $username, $password, $dbname);
$catsql = "SELECT * FROM tbl_cat";
$catrs = mysqli_query($cats, $catsql);

$prods = mysqli_connect($servername, $username, $password, $dbname);
$prodsql = "SELECT * FROM tbl_products WHERE prod_cat = 2 ORDER BY tbl_id DESC";
$prodrs = mysqli_query($prods, $prodsql);
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
    <meta property="og:title" content="Women's Cannabis T-Shirts | Women's Cannabis TShirts | Women's Cannabis Tees">
    <title>Women's Cannabis T-Shirts | Women's Cannabis TShirts | Women's Cannabis Tees</title>
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
          
          <h1>Womens <br class="visible-xs">Cannabis T-Shirts</h1>
          <div class="text-center">
            <?php include ("scripts/template/disclosure.php");?>
            <?php
              $galSize = 24;
              $galImgs = mysqli_num_rows($prodrs);
              $galPages = ceil($galImgs/$galSize);
              
              echo '<ul class="nav nav-tabs">';
              for ($c=1; $c<=$galPages; $c++) {
                if ($c==1) {
                  echo '<li class="active"><a data-toggle="tab" href="#page'.$c.'">Page '.$c.'</a></li>';
                } else {
                  echo '<li ><a data-toggle="tab" href="#page'.$c.'">Page '.$c.'</a></li>';
                }
              }
              echo '</ul>';
              echo '<div class="tab-content">';
              
              for ($c=1; $c<=$galPages; $c++) {
                if ($c==1) {
                  echo '<div id="page'.$c.'" class="tab-pane fade in active">';
                } else {
                  echo '<div id="page'.$c.'" class="tab-pane fade">';
                }
                
                for ($i=1; $i<=$galSize; $i++) {
                  if($galCount < $galImgs) { 
                    $row_prods = mysqli_fetch_assoc($prodrs);
                  ?>
                  <div class="product col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3 text-center">
                    <img src="/images/products/thumb/<?php echo $row_prods['prod_img']; ?>.jpg" class="img-responsive img-thumbnail">
                    <p><strong></strong><?php echo $row_prods['prod_name']; ?></p>
                    <a href="/products/<?php echo $row_prods['prod_url']; ?>" rel="nofollow" class="btn btn-success" target="_blank">More Info</a>
                  </div>
                  
                  <?php
                    $galCount++;
                  }
                }
                
                echo '</div>';
              }
              echo '</div>';
            ?>
          </div>
          <div class="clearfix"></div>
          <p>&nbsp;</p>
          <p>Womens cannabis t-shirts, marijuana t-shirts.</p>
          
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
mysqli_close($prods);
mysqli_close($cats);
?>