<?php

  require "functions".DIRECTORY_SEPARATOR."formInputValidator.php";
  $validator = new validator;
  $error = false;

  $firstName = $middleName = $lastName = $username = $email = $password = $confirmPassword = "";

  function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = validateInput($_POST["firstName"]);
    $firstName = preg_replace('/[0-9]+/', '', $firstName);
    $lastName = validateInput($_POST["lastName"]);
    $lastName = preg_replace('/[0-9]+/', '', $lastName);
    $username = validateInput($_POST["username"]);
    $email = validateInput($_POST["email"]);
    $password = validateInput($_POST["password"]);
    $confirmPassword = validateInput($_POST["confirmPassword"]);

    try {
      $validator -> validateFirstName($firstName);
      $validator -> validateLastName($lastName);
      $validator -> validateUsername($username);
      $validator -> validateEmail($email);
      $validator -> validatePassword($password);
      $validator -> confirmPassword($password, $confirmPassword);
    }

    catch (Exception $e) {
      ?>
      <div class="callout callout-danger">
        <h4>Something went wrong</h4>
        <p>
      <?php
      echo $e->getMessage()."<br>";
      ?>
        </P>
      </div>
      <?php
      $error = true;
    }

    if ($error == false) {
      ?>
      <div class="callout callout-success">
        <h4>Yaay :)</h4>
        <p>Successful Registration</p>
      </div>
      <?php
    }

  }

?>
