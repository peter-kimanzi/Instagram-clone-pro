<?php

  class N{

    public static $e;
    public static $database;
    public static $DIR = "/Instagram-clone";
    public static $GMAIL = "resa.workout@gmail.com";
    public static $GMAIL_PASSWORD = "workout2018";

    public static function _DB(){
      try {
        self::$database = new PDO('mysql:host=127.0.0.1;dbname=kimanzi;charset=utf8mb4', 'kimanzi', 'kimjayden');
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
