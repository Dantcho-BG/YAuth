<?php

  class Database {

    private $link;
    private $host, $username, $password, $database;

    public funtion __construct ($host, $username, $password, $database) {
      $this -> host = $host;
      $this -> username = $username;
      $this -> password = $password;
      $this -> database = $database;

      $this->link = mysql_connect($this->host, $this->username, $this->password)
          OR die("There was a problem connecting to the database.");

      mysql_select_db($this->database, $this->link)
          OR die("There was a problem selecting the database.");

      return true;
    }

    public function query($query) {
        $result = mysql_query($query);
        if (!$result) die('Invalid query: ' . mysql_error());
        return $result;
    }

    public function __destruct() {
        mysql_close($this->link)
            OR die("There was a problem disconnecting from the database.");
    }

  }
