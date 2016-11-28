<?php
  class PagesController {
    public function home() {
      require_once('views/login.php');
    }

    public function error() {
      require_once('view/error.php');
    }
  }
?>