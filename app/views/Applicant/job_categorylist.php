<?php include 'inc/header.php'?>

    <?php include 'inc/navbar.php'?>

    <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" style="width: 100%; height: 30%;" src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/applicant/img/carousel-11.jpg'); ?>" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Job Listing</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <span><?php
if (isset($category)) {
    echo '<h1 class="text-center mb-5 wow fadeInUp">' . htmlspecialchars($category) . '</h1>';
}
?></span>
<hr>
               

                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                   
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                        <?php foreach ($list as $lf): ?>
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/applicant/img/com-logo-1.jpg'); ?>" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3"><?=$lf['occupation_title'];?></h5>
                                            <span class="text-truncate me-3"><i class="fa fa-user-alt text-blue me-2"></i><?=$lf['company_name'];?></span>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-blue me-2"></i><?=$lf['location'];?></span> <br>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-blue me-2"></i><?=$lf['job_type'];?></span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-blue me-2"></i><?=$lf['salary'];?> per <?=$lf['per'];?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-blue"></i></a>
                                            <a class="btn btn-blue" href="">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-blue me-2"></i>Date Line: <?=$lf['dateposted'];?></small>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; ?>

                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Jobs End -->

        <?php include 'inc/footer.php'?>