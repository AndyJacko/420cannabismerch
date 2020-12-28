$aff = "";
$cnt = 1;
$cats = mysqli_connect($servername, $username, $password, $dbname);
$catsql = "SELECT * FROM tbl_cat";
$catrs = mysqli_query($cats, $catsql);

while($row = mysqli_fetch_assoc($catrs)) {
  $aff .= "## ".$row['cat_name']." ##".PHP_EOL;
  $newsql = "SELECT * FROM tbl_products WHERE prod_cat=".$cnt;
  $newrs = mysqli_query($cats, $newsql);
  while($newrow = mysqli_fetch_assoc($newrs)) {
    $aff .= "Redirect 302 /products/".$newrow['prod_url']." ".$newrow['prod_aff'].PHP_EOL;
  } 
  $aff .= "".PHP_EOL;
  $cnt++;   
}

$fp = fopen('../.htaccess','w');
if($fp) {
  fwrite($fp,'
AddType x-mapp-php6 .php 
ErrorDocument 404 /404.php
Options +FollowSymLinks

RewriteEngine on

RewriteCond %{HTTP_HOST} .
RewriteCond %{HTTP_HOST} !^420cannabismerch\.com
RewriteRule (.*) http://420cannabismerch.com/$1 [R=301,L]


## AFFILIATE LINKS ##

'. $aff .'
  ');
  fclose($fp);
}

mysqli_close($cats);