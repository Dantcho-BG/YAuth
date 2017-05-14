<?php

  class dangerExeption extends Exeption {

    public function errorMessage() {
      $errorMsg = $this->getMessage();
      return $errorMsg;
    }

  }
