<?php
session_start();

if(!isset($_SESSION['success'])){
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Surveys</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->
    <!-- core:css -->
    <link rel="stylesheet" href="css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="css/core.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/flagicon.css">
    <!-- endinject -->
    <!-- Layout styles -->  
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
  </head>
  <body class="sidebar-dark">
    <div class="main-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar">
        <div class="sidebar-header">
          <a href="#" class="sidebar-brand">
          Survey<span>Dash</span>
          </a>
          <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="sidebar-body">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
              <a href="index.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">Surveys</li>
            <li class="nav-item">
              <a href="all-surveys.php" class="nav-link">
              <i class="link-icon" data-feather="activity"></i>
              <span class="link-title">All Surveys</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="add-survey.php" class="nav-link">
              <i class="link-icon" data-feather="plus"></i>
              <span class="link-title">Add New</span>
              </a>
            </li>
            
            <li class="nav-item nav-category">Other</li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
              <i class="link-icon" data-feather="log-out"></i>
              <span class="link-title">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar">
          <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
          </a>
        </nav>
        <!-- partial -->
        <div class="page-content">

         