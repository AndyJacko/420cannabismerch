<?php require_once('scripts/functions/authnlogout.php'); ?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/backend.dwt.php" codeOutsideHTMLIsLocked="false" -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <link rel="author" href="../humans.txt">
    <link rel="icon" href="../favicon.png">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>View Watermarked Images</title>
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
          <?php
            $directory = "../images/gallery/";
            $scanned_directory = array_diff(scandir($directory), array('..', '.'));
            $scanned_directory = array_reverse($scanned_directory,false);
            $galImgs = count($scanned_directory);
            $galSize = 30;
            $galCount = 0;
            $galPages = ceil(count($scanned_directory)/$galSize);
            
            //echo 'total img = '.$galImgs.' / pages = '. $galPages.'<br>';
            
            echo '<ul class="nav nav-tabs">'.PHP_EOL;
            for ($c=1; $c<=$galPages; $c++) {
                if ($c==1) {
                  echo '<li class="active"><a data-toggle="tab" href="#page'.$c.'">Page '.$c.'</a></li>'.PHP_EOL;
                } else {
                  echo '<li ><a data-toggle="tab" href="#page'.$c.'">Page '.$c.'</a></li>'.PHP_EOL;
                }
            }
            echo '</ul>'.PHP_EOL;
            echo '<div class="tab-content">'.PHP_EOL;
            for ($c=1; $c<=$galPages; $c++) {
                if ($c==1) {
                  echo '<div id="page'.$c.'" class="tab-pane fade in active">'.PHP_EOL;
                } else {
                  echo '<div id="page'.$c.'" class="tab-pane fade">'.PHP_EOL;
                }
                
                for ($i=1; $i<=$galSize; $i++) {
                  if($galCount <= $galImgs-1) {
                    echo '<div class="watermarked text-center"><img class="img-thumbnail img-responsive" src="../images/gallery/'.$scanned_directory[$galCount].'"></div>'.PHP_EOL;
                    $galCount++;
                  }
                }
                
                echo '</div>'.PHP_EOL;
            }
            echo '</div>'.PHP_EOL;
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