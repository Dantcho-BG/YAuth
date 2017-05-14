<?php

  class validator
  {

    public validateFirstName (firstName) {

      if (strlen(firstName) > 30) {
        throw new firstNameException("First Name Too Long", 1);
      }

      if (strlen(firstName) < 30) {
        throw new fisrtNameException("First Name Too Short", 2);
      }

    }

    public validateMiddleName (middleName) {

      if (strlen(middleName) > 30) {
        throw new middleNameException("Middle Name Too Long", 3);
      }

      if (strlen(middleName) < 30) {
        throw new middleNameException("Middle Name Too Short", 4);
      }

    }

    public validateLastName () {

    }

    public validateUsername () {

    }

    public validateEmail () {

    }

    public validatePassword () {

    }

  }
