<?php
  class PagesController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      require_once('views/login.php');
    }

    public function error() {
      require_once('view/error.php');
    }
  }
?>