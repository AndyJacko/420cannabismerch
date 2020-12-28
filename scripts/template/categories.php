        <nav class="col-lg-2">
          <div class="panel panel-default text-center">
            <div class="panel-heading"> 
              <h1><strong>Categories</strong></h1>
            </div>
            <ul class="list-group visible-lg">
              <?php
              while($row_cats = mysqli_fetch_assoc($catrs)) {
              ?>
              <li class="list-group-item"><a href="/<?php echo $row_cats["cat_url"]; ?>"><?php echo $row_cats["cat_name"]; ?></a></li>
              <?php
              }
              ?>  
            </ul>
            
            <ul class="list-group list-inline hidden-lg">
              <?php
              mysqli_data_seek($catrs,0);
              while($row_cats = mysqli_fetch_assoc($catrs)) {
              ?>
              <li class="list-group-item"><a href="/<?php echo $row_cats["cat_url"]; ?>"><?php echo $row_cats["cat_name"]; ?></a></li>
              <?php
              }
              ?>  
            </ul>
          </div>
        </nav>
