<?php require_once('scripts/functions/authnlogout.php'); ?>
<?php 
include ("scripts/db/dbConnection.php");
$cnt = 1;
$cats = mysqli_connect($servername, $username, $password, $dbname);
$catsql = "SELECT * FROM tbl_cat";
$catrs = mysqli_query($cats, $catsql);
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/backend.dwt.php" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <link rel="author" href="../humans.txt">
    <link rel="icon" href="../favicon.png">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>View Products</title>
    <!-- InstanceEndEditable -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../scripts/css/style.css" rel="stylesheet" type="text/css">
    <script src="../scripts/js/prefixfree.min.js"></script>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
  </head>

  <body>
    <?php include ("../scripts/template/analytics.php");?>
    <?php include ("../scripts/template/cp-nav.php");?>
    
    <div class="container-fluid">
      <div class="row">
        <?php include ("../scripts/template/cp-categories.php");?>
        
        <section id="content" class="col-sm-8 col-md-9 col-lg-10">
          <!-- InstanceBeginEditable name="page-content" -->
          <h1>View Products</h1>
          <?php
          while($row = mysqli_fetch_assoc($catrs)) {
            echo "<div class='clearfix'></div><div><h2>".$row['cat_name']."</h2></div>";
            $newsql = "SELECT * FROM tbl_products WHERE prod_cat=".$cnt." ORDER BY tbl_id DESC";
            $newrs = mysqli_query($cats, $newsql);
            while($newrow = mysqli_fetch_assoc($newrs)) {
          ?>
          <div class="product col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 col-md-3 text-center">
            <img src="/images/products/thumb/<?php echo $newrow['prod_img']; ?>.jpg" class="img-responsive img-thumbnail">
            <p><strong></strong><?php echo $newrow['prod_name']; ?></p>
          </div>
                  
          <?php  
            } 
            $cnt++;   
          }
          ?>
          <!-- InstanceEndEditable -->
        </section>
      </div>
    </div>

    <?php include ("../scripts/template/footer.php");?>

    <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <script src="../scripts/js/custom.js"></script>
    
    <!-- InstanceBeginEditable name="footer-scripts" -->
    <!-- InstanceEndEditable -->
  </body>
<!-- InstanceEnd --></html>
<?php
mysqli_close($cats);
?>