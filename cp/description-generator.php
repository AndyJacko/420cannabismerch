<?php require_once('scripts/functions/authnlogout.php'); ?>
<?php
if (isset($_POST["ItemName"]) && $_POST["ItemName"] != "") {
  $description = ""; 
  $intro = array("Novelty", "Comedy", "Joke", "Amusing", "Witty", "Fun", "Souvenir", "New", "Original", "Brand New", "Latest", "Unique", "Funny");  
  shuffle($intro);
  $cannaweedmarijuana = array("Cannabis", "Weed", "Marijuana");  
  $stonerpotheadtoker = array("Stoners", "Pot Heads", "Tokers", "Blazers", "Medical Marijuana users", "Dabbers");  
  shuffle($stonerpotheadtoker);
  $keywords = array("Cannabis", "Weed", "Marijuana", "FourTwenty", "4Twenty", "420", "Pot", "Dope", "Hash", "Mary Jane", "Ganja", "Herb", "Reefer", "Skunk", "Chronic", "Bud", "Cheeba", "Dank", "THC", "BHO", "Dabs", "Dab", "Dabbing", "Shatter", "Wax", "Concentrates", "Rosin Tech", "Hash Oil", "Four20");  
  shuffle($keywords);
  $random_stonerpotheadtoker=array_rand($stonerpotheadtoker,3);
  $random_keywords=array_rand($keywords,20);
  $iteminfo = $intro[array_rand($intro,1)]." ".$cannaweedmarijuana[array_rand($cannaweedmarijuana,1)]." ".$_POST["ItemName"]." ".$_POST["ItemType"];
  
  if ($_POST["ItemBranding"] == "Yes") {
    $description .= "<strong>Title:</strong><br><br>".$iteminfo." with brand logo on the back.<br><br>"; 
    $description .= "<strong>Description:</strong><br><br>".$iteminfo." with brand logo on the back.<br><br>"; 
  } else {
    $description .= "<strong>Title:</strong><br><br>".$iteminfo."<br><br>"; 
    $description .= "<strong>Description:</strong><br><br>".$iteminfo."<br><br>"; 
  }
  $description .= "This ".$_POST["ItemType"]." is popular with ".$stonerpotheadtoker[$random_stonerpotheadtoker[0]].", ".$stonerpotheadtoker[$random_stonerpotheadtoker[1]]." and ".$stonerpotheadtoker[$random_stonerpotheadtoker[2]]; 
  $description .= " who are interested in 420 Cannabis Merch, ";
  for ($i=0; $i<=18; $i++) {
    $description .= $keywords[$random_keywords[$i]].", ";   
  }
  $description .= "and ".$keywords[$random_keywords[19]].".<br><br>";
  $description .= "Thanks For looking at this ".$_POST["ItemType"].", don't forget to check out our other ".$_POST["ItemType"]."s by going to our main store page.<br><br>"; 
  shuffle($keywords);
  $random_keywords=array_rand($keywords,9);
  $description .= "<strong>Tags:</strong><br><br>420CannabisMerch, ";
  for ($i=0; $i<=7; $i++) {
    $description .= $keywords[$random_keywords[$i]].", ";   
  }
  $description .= " ".$keywords[$random_keywords[8]].".<br><br>";
}
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
    <title>420 Cannabis Merchandise</title>
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
          <h1>Product/Design Description Generator</h1>
          <form id="form" name="form" method="post">
            <div class="form-group">
              <label for="ItemName">Name</label>
              <input type="text" name="ItemName" id="ItemName" class="form-control" value="<?php echo $_POST["ItemName"]; ?>">
            </div>
            <div class="form-group">
              <label for="ItemType">Type</label>
              <select name="ItemType" id="ItemType" class="form-control">
                <option value="Design" <?php if ($_POST["ItemType"] == "Design") echo 'selected'; ?>>Design</option>
                <option value="Collection" <?php if ($_POST["ItemType"] == "Collection") echo 'selected'; ?>>Collection</option>
                <option>-------------------</option>
                <option value="Men's T-Shirt" <?php if ($_POST["ItemType"] == "Men's T-Shirt") echo 'selected'; ?>>Men's T-Shirt</option>
                <option value="Women's T-Shirt" <?php if ($_POST["ItemType"] == "Women's T-Shirt") echo 'selected'; ?>>Women's T-Shirt</option>
                <option value="Men's Hoodie" <?php if ($_POST["ItemType"] == "Men's Hoodie") echo 'selected'; ?>>Men's Hoodie</option>
                <option value="Women's Hoodie" <?php if ($_POST["ItemType"] == "Women's Hoodie") echo 'selected'; ?>>Women's Hoodie</option>
                <option value="Coffee Mug" <?php if ($_POST["ItemType"] == "Coffee Mug") echo 'selected'; ?>>Coffee Mug</option>
                <option value="Cap" <?php if ($_POST["ItemType"] == "Cap") echo 'selected'; ?>>Cap</option>
                <option value="Bluetooth Speaker" <?php if ($_POST["ItemType"] == "Bluetooth Speaker") echo 'selected'; ?>>Bluetooth Speaker</option>
                <option value="Sticker" <?php if ($_POST["ItemType"] == "Sticker") echo 'selected'; ?>>Sticker</option>
                <option value="Postcard" <?php if ($_POST["ItemType"] == "Postcard") echo 'selected'; ?>>Postcard</option>
              </select>
            </div>
            <div class="form-group">
              <label for="ItemBranding">Branding</label>
              <select name="ItemBranding" id="ItemBranding" class="form-control">
                <option value="Yes" <?php if ($_POST["ItemBranding"] == "Yes") echo 'selected'; ?>>Yes</option>
                <option value="No" <?php if ($_POST["ItemBranding"] == "No") echo 'selected'; ?>>No</option>
              </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
          <p>&nbsp;</p>
          <?php if ($description != "") { echo $description; } ?>
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