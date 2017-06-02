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
              <form name="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal">
                <div class="box-body">
                  <div id="divInputFirstName" class="form-group">
                    <label for="inputFirstName" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="firstName" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["firstName"]; }?>" class="form-control" id="inputFirstName" placeholder="Type your first name here">
                    </div>
                  </div>
                  <div id="divInputLastName" class="form-group">
                    <label for="inputLastName" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="lastName" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["lastName"]; } ?>" class="form-control" id="inputLastName" placeholder="Type your last name here">
                    </div>
                  </div>
                  <div id="divInputUsername" class="form-group">
                    <label for="inputUsername" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["username"]; } ?>" class="form-control" id="inputUsername" placeholder="Type a username here">
                    </div>
                  </div>
                  <div id="divInputEmail" class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" value="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST["email"]; } ?>" class="form-control" id="inputEmail" placeholder="Type your email here">
                    </div>
                  </div>
                  <div id="divInputPassword" class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Type the password you want to login with here">
                    </div>
                  </div>
                  <div id="divInputPasswordConfirm" class="form-group">
                    <label for="inputPasswordConfirm" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="confirmPassword" class="form-control" id="inputPasswordConfirm" placeholder="Type the password again here">
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="login.html" class="btn btn-default">Login</a>
                  <button type="submit" class="btn btn-info pull-right">Sign up</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Login Form</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Text</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                    <label>Text Disabled</label>
                    <input type="text" class="form-control" placeholder="Enter ..." disabled>
                  </div>

                  <!-- textarea -->
                  <div class="form-group">
                    <label>Textarea</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label>Textarea Disabled</label>
                    <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                  </div>

                  <!-- input states -->
                  <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                    <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                    <span class="help-block">Help block with success</span>
                  </div>
                  <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                      warning</label>
                    <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                    <span class="help-block">Help block with warning</span>
                  </div>
                  <div class="form-group has-error">
                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                      error</label>
                    <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                    <span class="help-block">Help block with error</span>
                  </div>

                  <!-- checkbox -->
                  <div class="form-group">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Checkbox 1
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox">
                        Checkbox 2
                      </label>
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" disabled>
                        Checkbox disabled
                      </label>
                    </div>
                  </div>

                  <!-- radio -->
                  <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Option one is this and that&mdash;be sure to include why it's great
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Option two can be something else and selecting it will deselect option one
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                        Option three is disabled
                      </label>
                    </div>
                  </div>

                  <!-- select -->
                  <div class="form-group">
                    <label>Select</label>
                    <select class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Disabled</label>
                    <select class="form-control" disabled>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                  <!-- Select multiple-->
                  <div class="form-group">
                    <label>Select Multiple</label>
                    <select multiple class="form-control">
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Multiple Disabled</label>
                    <select multiple class="form-control" disabled>
                      <option>option 1</option>
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
                  </div>

                </form>
              </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-wrapper -->
