<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>iSchool</title>
</head>
<body>
<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top ">
    <a class="navbar-brand" href="index.php">tSchool</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#navbarNavAltMarkup" 
    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <ul class="navbar-nav custom-nav pl-5">
            <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Trang chủ</a></
            li>
            <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Khóa học</a></
            li>
            <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Tình trạng thanh toán</a></
            li>
            <?php 
              session_start();
              if(isset($_SESSION['is_login'])){
                echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">Thông tin của tôi</a></
                li>
                <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Đăng xuất</a></
                li>';
              }else{
                echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Đăng nhập</a></
                li>
                <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Đăng ký</a></
                li>';
              }
            ?>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Phản hồi</a></
            li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Liên hệ</a></
            li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- End Navigation -->