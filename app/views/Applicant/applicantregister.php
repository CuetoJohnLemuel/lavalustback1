<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PesoLink - Employer Registration</title>

    <!-- Font Icon -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/applicant/lib/animate/animate.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/registerapp/fonts/material-icon/css/material-design-iconic-font.min.css'); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/registerapp/css/style.css'); ?>">
</head>
<body class="img js-fullheight" style="background-image: url(assets/loginadem/images/bg.jpg);">

    <div class="main">

        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
               
                    <h2>Employer Registration</h2>
           
        
                    <form action="<?= site_url('/registerapplicant') ?>" method="post">

                    <div class="form-textbox">
                        <input type="text" name="applicant_id" placeholder="Applicant ID"/>
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="full_name" placeholder="Full Name"/>
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="address" placeholder="Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="category" placeholder="Category" />
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="status" placeholder="Status" />
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="sex" placeholder="Sex" />
                    </div>

                    <div class="form-textbox">
                        <input type="text" name="contactnum" placeholder="Contact Number" />
                    </div>
                    <div class="form-textbox">
                        <input type="text" name="email" placeholder="Email Address" />
                    </div>
                    <div class="form-textbox">
                        <input type="password" name="password" placeholder="Password" />
                    </div>

                   <br>

                    <div class="form-textbox text-center">
                        <button type="submit" class="submit" id="submit">Register Account</button>
                    </div>
                </form>
                <br>

                <p class="loginhere">
                    Already have an account ?<a href="<?= site_url('applicantlogin') ?>" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/registerapp/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . ('/assets/registerapp/js/main.js'); ?>"></script>


<form action="loginemployer.php" method="post" id="employerForm2" style="display: none;">
            <!-- Employer Form -->
            <h2>Employer Login</h2>
            <!-- Add your form fields and input elements here for the employer -->
            <div class="cfield">
                <input type="text" placeholder="Full Name" name="full_name" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="Password" name="password" />
                <i class="la la-key"></i>
            </div>
            <a href="#" title="">Forgot Password?</a>
            <button type="submit">Login</button>
        </form>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>