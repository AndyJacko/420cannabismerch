
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="btn btn-default navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-arrow-circle-down"></i> Menu</button>
          </button>
          <a class="navbar-brand" href="http://420cannabismerch.com">420 Cannabis Merch</a>
        </div>
        <div id="navbar" class="collapse navbar-right navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($_SERVER['PHP_SELF'] == "/index.php") echo 'class="active"'; ?>><a href="http://420cannabismerch.com">Home</a></li>
            <li <?php if ($_SERVER['PHP_SELF'] == "/about.php") echo 'class="active"'; ?>><a href="about.php">About</a></li>
            <li <?php if ($_SERVER['PHP_SELF'] == "/submit.php") echo 'class="active"'; ?>><a href="submit.php">Submit</a></li>
            <li <?php if ($_SERVER['PHP_SELF'] == "/subscribe.php") echo 'class="active"'; ?>><a href="subscribe.php">Subscribe</a></li>
            <li <?php if ($_SERVER['PHP_SELF'] == "/contact.php") echo 'class="active"'; ?>><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
