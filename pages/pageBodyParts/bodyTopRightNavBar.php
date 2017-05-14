            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <?php

                  if ($pageMetaData["navBarActiveItem"] == "login") {
                    echo '<li class="active user user-menu">';
                  }
                  else {
                    echo '<li class="user user-menu">';
                  }

                ?>
                  <!-- Menu Toggle Button -->
                  <a href="login.php">
                    <!-- The user image in the navbar-->
                    <i class="fa fa-sign-in"></i>
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Login</span>
                  </a>
                </li>
                <?php

                  if ($pageMetaData["navBarActiveItem"] == "register") {
                    echo '<li class="active user user-menu">';
                  }
                  else {
                    echo '<li class="user user-menu">';
                  }

                ?>
                  <!-- Menu Toggle Button -->
                  <a href="register.php">
                    <!-- The user image in the navbar-->
                    <i class="fa fa-user-plus"></i>
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Sign Up</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-custom-menu -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </header>
