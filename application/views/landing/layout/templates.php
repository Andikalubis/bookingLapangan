<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('landing/layout/head'); ?>

<body class="index-page">
    
    <?php $this->load->view('landing/layout/header'); ?>


    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section accent-background">

        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-5 justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2><span>Welcome to </span><span class="accent">HLB SPORTS</span></h2>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                <div class="d-flex">
                    <a href="#booking" class="btn-get-started">Get Started</a>
                </div>
            </div>
            </div>
        </div>

        <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-easel"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-gem"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Sed ut perspiciatis</a></h4>
                </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-geo-alt"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                </div>
                </div><!--End Icon Box -->

                <div class="col-xl-3 col-md-6">
                <div class="icon-box">
                    <div class="icon"><i class="bi bi-command"></i></div>
                    <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
                </div>
                </div><!--End Icon Box -->

            </div>
            </div>
        </div>

        </section><!-- /Hero Section -->

        <?php $this->load->view('landing/pages/booking'); ?>

    </main>

    <?php $this->load->view('landing/layout/footer'); ?>

</body>

</html>