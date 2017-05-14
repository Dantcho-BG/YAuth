            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <?php

                if ($pageMetaData["navBarActiveItem"] == "home") {
                  echo '<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>';
                }
                else {
                  echo '<li><a href="index.php">Home</a></li>';
                }

                if ($pageMetaData["navBarActiveItem"] == "features") {
                  echo '<li class="active"><a href="features.php">Features <span class="sr-only">(current)</span></a></li>';
                }
                else {
                  echo '<li><a href="features.php">Features</a></li>';
                }

                if ($pageMetaData["navBarActiveItem"] == "requirements" ||
                $pageMetaData["navBarActiveItem"] == "intructions" ||
                $pageMetaData["navBarActiveItem"] == "contact-me" ||
                $pageMetaData["navBarActiveItem"] == "download") {
                  echo '<li class="active dropdown">';
                }
                else {
                  echo '<li class="dropdown">';
                }

                ?>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Requirements</a></li>
                    <li><a href="#">Intructions</a></li>
                    <li><a href="#">Download</a></li>
                    <li class="divider"></li>
                    <li><a href="#">GitHub</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Contact Me</a></li>
                  </ul>
                </li>
              </ul>
              <!-- Search Bar
              <form class="navbar-form navbar-left" role="search" method="POST">
                <div class="form-group">
                  <input type="text" class="col-sm-8 form-control" name="search" id="navbar-search-input" placeholder="Search">
                  <button class="col-sm-4 form-control"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
              </form>-->
            </div>
            <!-- /.navbar-collapse -->
