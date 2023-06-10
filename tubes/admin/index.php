<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

require '../functions.php';
?>
   <?php require "partials/header.php" ?>
   <?php require "partials/nav.php" ?>
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
            <div class="card-header">Header</div>
              <div class="card-body"><h5 class="card-title">Primary Card</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
    </div>
    <?php require "partials/footer.php" ?>