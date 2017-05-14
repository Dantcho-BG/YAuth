<?php

  class validator {

    public function validateFirstName ($firstName) {

      if (empty($firstName)) {
        throw new Exception("First name is required", 1);
      }
      else {

        if (strlen($firstName) > 30) {
          throw new Exception("First name is too long", 2);
        }

        if (strlen($firstName) < 2) {
          throw new Exception("First name is too short. The minimum amount of letters should be 2 or more", 3);
        }

        if (!ctype_alnum($firstName)) {
          throw new Exception("First name contains unallowed symbols", 4);
        }

      }

    }

    public function validateMiddleName ($middleName) {

      if (empty($middleName)) {
        throw new Exception("Middle name is required", 1);
      }
      else {

        if (strlen($middleName) > 30) {
          throw new Exception("Middle name is too long", 2);
        }

        if (strlen($middleName) < 2) {
          throw new Exception("Middle name is too short. The minimum amount of letters should be 2 or more", 3);
        }

        if (!ctype_alnum($middleName)) {
          throw new Exception("Middle name contains unallowed symbols", 4);
        }

      }

    }

    public function validateLastName ($lastName) {

      if (empty($lastName)) {
        throw new Exception("Last name is required", 1);
      }
      else {

        if (strlen($lastName) > 30) {
          throw new Exception("Last name is too long", 2);
        }

        if (strlen($lastName) < 2) {
          throw new Exception("Last name is too short. The minimum amount of letters should be 2 or more", 3);
        }

        if (!ctype_alnum($lastName)) {
          throw new Exception("Last name contains unallowed symbols", 4);
        }

      }

    }

    public function validateUsername ($username) {

      if (empty($username)) {
        throw new Exception("Username is required", 1);
      }
      else {

        if (strlen($username) > 15) {
          throw new Exception("Username Too Long", 5);
        }

        if (strlen($username) < 2) {
          throw new Exception("Username Too Short", 6);
        }

        if (!ctype_alnum($username)) {
          throw new Exception("Username contains unallowed symbols", 4);
        }

      }

    }

    public function validateEmail ($email) {

      if (empty($email)) {
        throw new Exception("Email is required", 1);
      }
      else {

        if (strlen($email) > 155) {
          throw new Exception("Email too long", 1);
        }

        if (strlen($email) < 7) {
          throw new Exception("Email too short", 1);
        }

        if (!preg_match('/^([^\.]|([^\.])\.[^\.])*$/', $email)) {
          throw new Exception("Email contains unallowed symbols", 1);
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          throw new Exception("Email is invalid", 1);
        }

      }

    }

    public function validatePassword ($password) {

      if (empty($password)) {
        throw new Exception("Password is required. OMG", 1);
      }
      else {

        if (strlen($password) > 35) {
          throw new Exception("Password too long", 1);
        }

        if (strlen($password) < 8) {
          throw new Exception("Password too short", 1);
        }

        if (!preg_match("#[0-9]+#",$password)) {
          throw new Exception("Please use at least one number in you password", 1);
        }

        if (!preg_match("#[A-Z]+#",$password)) {
          throw new Exception("Please use at least one capital letter in your password ", 1);
        }

        if (!preg_match("#[a-z]+#",$password)) {
          throw new Exception("Please user at least on lower case letter in your password", 1);
        }

        if (!preg_match('/^[a-zA-Z][0-9a-zA-Z_!$@#^&]/', $password)) {
          throw new Exception("The password contains unallowed symbols", 1);
        }

      }

    }

    public function confirmPassword ($password, $confirmPassword) {

      if (empty($confirmPassword)) {
        throw new Exception("Please type the password again. Confirm it!", 1);
      }

      else {

        if ($password != $confirmPassword) {
          throw new Exception("Password doesn't match", 1);
        }

      }

    }

  }
