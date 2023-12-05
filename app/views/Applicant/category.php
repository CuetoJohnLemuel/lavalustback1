<?php include 'inc/header.php'?>

<?php include 'inc/navbar.php'?>

<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" style="width: 100%; height: 30%;"
                src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/applicant/img/carousel-11.jpg'); ?>" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(43, 57, 64, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-3 text-white animated slideInDown mb-4">Job Category</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at
                                sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Category Start -->
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>

        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="/peso/listmarketing">
                    <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                    <h6 class="mb-3">Marketing</h6>
                    <p class="mb-0" style="color: red;"> <?php foreach($countmar as $mar): ?>
                        <?php echo $mar; ?>
                        <?php endforeach; ?><span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="/peso/listcustomerservice">
                    <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                    <h6 class="mb-3">Customer Service</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($countcust as $cust): ?>
                        <?php echo $cust; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="/peso/listhumanresource">
                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                    <h6 class="mb-3">Human Resource</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($counthum as $hum): ?>
                        <?php echo $hum; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="/peso/listprojectmanagement">
                    <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                    <h6 class="mb-3">Project Management</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($countpro as $pro): ?>
                        <?php echo $pro; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item rounded p-4" href="/peso/businessdevelopment">
                    <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                    <h6 class="mb-3">Business Development</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($countbus as $bus): ?>
                        <?php echo $bus; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="cat-item rounded p-4" href="/peso/listsalescommunication">
                    <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                    <h6 class="mb-3">Sales & Communication</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($countsal as $sal): ?>
                        <?php echo $sal; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="cat-item rounded p-4" href="/peso/listteachingeducation">
                    <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                    <h6 class="mb-3">Teaching & Education</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($counttec as $tec): ?>
                        <?php echo $tec; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <a class="cat-item rounded p-4" href="/peso/listdesigncreative">
                    <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                    <h6 class="mb-3">Design & Creative</h6>
                    <p class="mb-0" style="color: red;"><?php foreach($countdes as $des): ?>
                        <?php echo $des; ?>
                        <?php endforeach; ?> <span style="color: black;"> Vacancy</span></p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Category End -->
<?php include 'inc/footer.php'?>