<?php
  class Rate {
      protected $pdo;
      public function __construct($configs) {
          $options = [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8, time_zone = '+04:00'"
          ];
          try {
              $this->pdo = new PDO(
                  "mysql:host=" . $configs['DB_HOST'] . ";dbname=" . $configs['DB_NAME'],
                  $configs['DB_USER'],
                  $configs['DB_PASSWORD'],
                  $options
              );
          } catch(PDOException $error) {
              echo "Connection failed! " . $error->getMessage();
          }
      }
      function getRate($name) {
          $sql = "SELECT * FROM `rates` WHERE `name` = ?";
          $query = $this->pdo->prepare($sql);
          $query->execute([$name]);
          return json_encode(['rate'=> $query->fetchAll()]);
      }
      function updateRate($rate) {
          $sql = "UPDATE `rates` SET `rate` = ? WHERE `id` = 1";
          $query = $this->pdo->prepare($sql);
          $query->execute([$rate]);
          return true;
      }
  }