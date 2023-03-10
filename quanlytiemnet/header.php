<?php
if (!isset($_SESSION['taikhoan']) || $_SESSION['taikhoan'] == "")
  header("Location: ./dang-nhap.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <link href="assets/img/sp.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styleDatatable.css">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- select2 -->
  
  

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.php">15 NET</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul id="menuHeader">
              <li><a href="./index.php" data="index">Trang ch???</a></li>
              <li><a href="./ql-khach-hang.php" data="ql-khach-hang">QL kh??ch h??ng</a></li>
              <li><a href="./ql-may-tinh.php" data="ql-may-tinh">QL m??y t??nh</a></li>
              <li><a href="./ql-gia-tien.php" data="ql-gia-tien">QL gi?? ti???n</a></li>
              <li><a href="./ql-tai-khoan.php" data="ql-tai-khoan">QL t??i kho???n</a></li>
            </ul>
          </nav><!-- .nav-menu -->
          <a href="dang-xuat.php" class="get-started-btn scrollto">????ng xu???t</a>
        </div>
      </div>

    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        

      </div>
    </section>
    <!-- End Breadcrumbs -->
    <section class="inner-page">
      <div class="container">