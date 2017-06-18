          <!-- Main content -->
          <section class="content">
            <?php
            //Check if the page has forms. If yes it includes form checker.
            if (!empty($pageMetaData["formCheck"])) {
              include "functions".DIRECTORY_SEPARATOR.$pageMetaData["formCheck"];
            }
            ?>
            <!-- Login Form Starts Here -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Register Form</h3>
              </div>
              <form name="registerForm" id="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <div id="divInputFirstName" class="form-group">
                    <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" onChange="validateFirstName('inputFirstName', 'submitButton')" name="firstName" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["firstName"]; }?>" class="form-control" id="inputFirstName" placeholder="Type your first name here">
                    </div>
                  </div>
                  <div id="divInputLastName" class="form-group">
                    <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" onChange="validateLastName('inputLastName', 'submitButton')" name="lastName" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["lastName"]; } ?>" class="form-control" id="inputLastName" placeholder="Type your last name here">
                    </div>
                  </div>
                  <div id="divInputUsername" class="form-group">
                    <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" onChange="validateUsername('inputUsername', 'submitButton')" name="username" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["username"]; } ?>" class="form-control" id="inputUsername" placeholder="Type a username here">
                    </div>
                  </div>
                  <div id="divInputEmail" class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" onChange="validateEmail('inputEmail', 'submitButton')" name="email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["email"]; } ?>" class="form-control" id="inputEmail" placeholder="Type your email here">
                    </div>
                  </div>
                  <div id="divInputPassword" class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" onChange="validatePassword('inputPassword', 'submitButton')" name="password" class="form-control" id="inputPassword" placeholder="Type the password you want to login with here">
                    </div>
                  </div>
                  <div id="divInputPasswordConfirm" class="form-group">
                    <label for="inputPasswordConfirm" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" onChange="validatePasswordConfirm('inputPassword', 'inputPasswordConfirm')" name="confirmPassword" class="form-control" id="inputPasswordConfirm" placeholder="Type the password again here">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="login.php" class="btn btn-default">Login</a>
                  <a onClick="checkInputValidation(6, 'registerForm')" class="btn btn-info pull-right">Sign up</a>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-wrapper -->
