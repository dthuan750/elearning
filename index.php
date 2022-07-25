<!-- Start Incluing Header  -->
<?php 
include('./dbConnection.php'); 
include('./mainINclude/header.php');
?>
<!-- End Incluing Header -->

<!-- Start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/elearning.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to tSchool</h1>
        <small class="my-content">Learn and Implement</small> <br />

        <?php 
            if(!isset($_SESSION['is_login'])){
                echo '<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
            }else{
                echo '<a href="student/studentProfile.php" class="btn btn-primary mt-3">Thông tin của tôi</a>';
            }
        ?>

    </div>
</div>

<!-- End Video Background -->

<!-- Start Text Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Khóa học</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Giảng viên chuyên nghiệp</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Truy cập trọn đời</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Đảm bảo hoàn tiền*</h5>
        </div>
    </div>
</div>

<!-- End Text Banner -->

<!-- Start Most Popular Course -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <!-- Start Most Popular Course 1st Card Deck -->
    <div class="card-deck mt-4">
    <?php 
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '<a href="#" class="btn" style="text-align: left;
                    padding:0px; margin:0px;">
                    <div class="card">
                        <img src="' . str_replace('..', '.', $row['course_img']). '" class="card-img-top" alt="Guitar" />
                        <div class="card-body">
                            <h5 class="card-title">' .$row['course_name']. '</h5>
                            <p class="card-text">' .$row['course_desc']. '</p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text d-inline">Price: <small><del>&
                            #8377 ' .$row['course_original_price']. '</del></small><span
                            class="font-weight-bolder">&#8377 ' .$row['course_price']. '</span></p> <a 
                            class="btn btn-primary text-white font-weight-bolder
                            float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                        </div>
                    </div>
                </a>';
            }
        }
    ?>

</div>
<!-- End Most Popular Course 1st Card Deck -->
<!-- Start Most Popular Course 2nd Card Deck -->
<div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left;
    padding: 0px;">
    <div class="card">
        <img src="Image/Pic/Python.jpg" class="card-img-top" alt="Python" />
        <div class="card-body">
            <h5 class="card-title">Learn Python</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet
            consectetur adipising elit. Fugiat, error</p>
        </div>
            <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&
                    #8377 3000</del></small><span
                    class="font-weight-bolder">&#8377 300</span></p> <a 
                    class="btn btn-primary text-white font-weight-bolder
                    float-right" href="#">Enroll</a>
            </div>
        </div>
        </a>
        <a href="#" class="btn" style="text-align: left;
    padding: 0px;">
    <div class="card">
        <img src="Image/Pic/Python.jpg" class="card-img-top" alt="Python" />
        <div class="card-body">
            <h5 class="card-title">Learn Python</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet
            consectetur adipising elit. Fugiat, error</p>
        </div>
            <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&
                    #8377 3000</del></small><span
                    class="font-weight-bolder">&#8377 300</span></p> <a 
                    class="btn btn-primary text-white font-weight-bolder
                    float-right" href="#">Enroll</a>
            </div>
        </div>
        </a>
        <a href="#" class="btn" style="text-align: left;
    padding: 0px;">
    <div class="card">
        <img src="Image/Pic/Python.jpg" class="card-img-top" alt="Python" />
        <div class="card-body">
            <h5 class="card-title">Learn Python</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet
            consectetur adipising elit. Fugiat, error</p>
        </div>
            <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&
                    #8377 3000</del></small><span
                    class="font-weight-bolder">&#8377 300</span></p> <a 
                    class="btn btn-primary text-white font-weight-bolder
                    float-right" href="#">Enroll</a>
            </div>
        </div>
        </a>    
    </div>
    <!-- End Most Popular Course 2nd Card Deck -->
    <div>
        <a class="btn btn-danger btn-sm" href="#">View All Course</a>
    </div>
</div>
<!-- End Most Popular Course -->

<!-- Start Contact Us -->
<?php
include('contact.php');
?>
<!-- End Contact Us -->

<!-- Start Social Follow -->
<div class="contaier-fluid bg-danger">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab
            fa-facebook-f"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab
            fa-twitter"></i>Twitter</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab
            fa-whatsapp"></i>WhatsApp</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab
            fa-instagram"></i>Instagram</a>
        </div>
    </div>
</div>
<!-- End Social Follow -->

<!-- Start About Section -->
<div class="container-fluid p-4" style="background-color: #E9ECEF">
<div class="container" style="background-color: #E9ECEF">
    <div class="row text-center">
        <div class="col-sm">
            <h5>About Us</h5>
            <p>iSchool provides universal access to the world's best
            education, partnering with top universities and
            organizations to offer courses online.</p>
        </div>
        <div class="col-sm">
            <h5>Category</h5>
            <a class="text-dark" href="#">Web Development</a><br />
            <a class="text-dark" href="#">Web Designing</a><br />
            <a class="text-dark" href="#">Android App Dev</a><br />
            <a class="text-dark" href="#">iOS Development</a><br />
            <a class="text-dark" href="#">Data Analysis</a><br />
        </div>
        <div class="col-sm">
            <h5>Contact Us</h5>
            <p>iSchool Pvt Ltd <br> Near Police Camp II <br> Bokaro,
            Jharkhand <br> Ph. 0961597511</p>
        </div>
    </div>
</div>
</div>
<!-- End About Section -->

<!-- Start Incluing Footer  -->
<?php 
include('./mainINclude/footer.php');
?>
<!-- End Incluing Footer -->