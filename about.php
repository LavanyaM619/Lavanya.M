<?php
// connect page top part (heder,top nav)
include "includes/top.php";
// if(!isset($_SESSION['user_id']))
// {
//  header("location:login.php");
// }

?>

<style>
:root {
    --primary: #06BBCC;
    --light: #F0FBFC;
    --dark: #181d38;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
    width: 100%;
    padding-right: var(--bs-gutter-x, .75rem);
    padding-left: var(--bs-gutter-x, .75rem);
    margin-right: auto;
    margin-left: auto;
}


.row>* {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) / 2);
    padding-left: calc(var(--bs-gutter-x) / 2);
    margin-top: var(--bs-gutter-y);
}

@media (min-width: 992px) {
    .col-lg-3 {
        flex: 0 0 auto;
        width: 25%;
    }
    .col-6{
        width: 50%;
    }
}

@media (min-width: 576px) {
    .col-sm-6 {
        flex: 0 0 auto;
        width: 50%;
    }
    .col-6{
        width: 100%;
    }
}

.g-4,
.gy-4 {
    --bs-gutter-y: 1.5rem;
}

.g-4,
.gx-4 {
    --bs-gutter-x: 1.5rem;
}

.row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(var(--bs-gutter-y) * -1);
    margin-right: calc(var(--bs-gutter-x) / -2);
    margin-left: calc(var(--bs-gutter-x) / -2);
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

.fadeInUp {
    animation-name: fadeInUp;
}

/*** Service ***/
.service-item {
    background: var(--light);
    transition: .5s;
}

.service-item:hover {
    margin-top: -10px;
    background: var(--primary);
}

.service-item * {
    transition: .5s;
}

.service-item:hover * {
    color: var(--light) !important;
}

.text-center {
    text-align: center !important;
}

.pt-3 {
    padding-top: 1rem !important;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

.h-100 {
    height: 100% !important;
}

.position-relative {
    position: relative !important;
}
.footer{
        position:absolute;
        bottom:0;
    }
</style>

<!-- Service End -->
<div class="container">
    <div class="row">   
        <center >    
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h2 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome to NEW GURU</h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit.</p>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                    </div>
                </div>
               
            </div>
            <img src="Images\Online-Learning.jpg"  width="30%" hight="10%">
        </center>
        </div>
    </div>




<?php 
//connect  page footer
include 'includes/footer.php';
?>