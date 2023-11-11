<?php
$pathToApp = realpath(__DIR__ . '/../../config/app.php');
// Incluez le fichier en utilisant le chemin absolu
//../../www/plugins/fontawesome-free/css/all.min.css
//../../www/dist/css/adminlte.min.css
include $pathToApp;
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=APP_NAME?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=$pathAllmin?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=$pathAdminlte?>">
</head>
<body class="hold-transition layout-top-nav">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container" >

    <div >
      <a href="/" class="navbar-brand">
        <img src="./img/logo-sayna.png" alt="Sayna StellarTech" class="brand-image img-circle elevation-3" style="opacity: .8">
      </a>
      <a href="/StellarTech/www/">Accueil</a>
      <a href="/StellarTech/app/views/missionView.php">Mission</a>
    </div>  
    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        

      </div>

      
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-10" >
            <h1 class="m-0"><?=APP_NAME?>:<small>a project consist for exploring the space.</small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">