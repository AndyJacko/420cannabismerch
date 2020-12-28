<?php require_once('scripts/db/dbConnection.php'); ?>
<?php session_start(); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Username'])) {
  $loginUsername=$_POST['Username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "/cp/cp-main.php";
  $MM_redirectLoginFailed = "/cp/index.php?s=1";
  $MM_redirecttoReferrer = false;

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $loginSQL = "SELECT name_admin, password_admin FROM tbl_admin WHERE name_admin='".$loginUsername."' AND password_admin='".$password."'";
  $LoginRS = mysqli_query($conn, $loginSQL);
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <link rel="author" href="../humans.txt">
    <link rel="icon" href="../favicon.png">
    <title>Move along people, nothing to see here.</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../scripts/css/style.css" rel="stylesheet" type="text/css">
    <script src="../scripts/js/prefixfree.min.js"></script>
  </head>

  <body>
    <div class="text-center">
      <h1>420 Cannabis Merch</h1><br><br><h2>Login To Controlpanel</h2><br><br>
      <?php
      if (isset($_GET['s'])){
        $popo = $_GET['s'];
        if ($popo == 1){
          echo "<p>Sorry, the details you entered were incorrect.</p><br><br>";
        }else{
          echo"";
        }
        if ($popo == 2){
          echo "<p>To log back in, please re-enter your details.</p><br><br>";
        }else{
          echo"";
        }
        if ($popo == 3){
          echo "<p>Sorry, you are not authorised to view that page unless you login first.</p><br><br>";
        }else{
          echo"";
        }
      }
      ?>      
      <form name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
      <input name="Username" type="text" id="Username" placeholder="Enter Username"><br><br>
      <input name="Password" type="password" id="Password" placeholder="Enter Password"><br><br>
      <?php if ($_GET['s'] != "1"){ ?>
        <input type="submit" name="Submit" id="Submit" value="Login">
      <?php }else{ ?>
        <input type="submit" name="Submit" id="Submit" value="Retry">
      <?php } ?>
      </form>
      <br><br><br><br><p>--- Unauthorised Access Is Not Permitted ---</p>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <script src="../scripts/js/custom.js"></script>
  </body>
</html>