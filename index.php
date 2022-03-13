<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final_Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header>
        <div class="container header_cont">
            <div class="row">
                <div class="col-lg-6">
                    <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
                </div>
                <div class="col-lg-6 text-end header_right">
                    <p>৬ ফাল্গুন, ১৪২৮</p>
                    <a href="#">English</a>
                </div>
            </div>
        </div>
    </header>

    <!-- header part end -->
    <!-- logo part start -->
    <section>
        <div class="container logo_part">
            <div class="row">
                <div class="col-lg-5">
                    <?php the_custom_logo();?>
                    <!-- <img src="<?php echo get_template_directory_uri()?>/assets/images/Header/logo_bn.png" alt=""> -->
                </div>
                <div class="col-lg-5 logo_input">
                    <form action="">
                        <input type="text" placeholder="খুঁজুন">
                         <button>অনুসন্ধান</button>
                    </form>
                </div>
                <div class="col-lg-2">
                    <div class="right_logo d-flex justify-content-end">
                       <div class="logo1">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Header/a2i-logo-footer.png" alt="">
                       </div>
                       <div class="logo2">
                           <p>সাথে থাকুন:</p>
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Header/facebook-icon.png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Header/twitter-blue-icon.png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Header/youtube-icon.png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Header/gplus-icon.png" alt="">
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- navbar part start -->
    <div class="container navbar_part">
        <div class="row">
            <!-- navbar part -->
            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'        => 'navber_nav',
				)
			);
			?>
            <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                      <a class="nav-link" href="#">Features</a>
                      <a class="nav-link" href="#">Pricing</a>
                      <a class="nav-link disabled">Disabled</a>
                    </div>
                  </div>
                </div>
              </nav> -->
        </div>
    </div>
    <!-- navbar part end -->
    <!-- main part start -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner">
                    <?php dynamic_sidebar( 'banner-1' ); ?>
                        <!-- <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/National-Portal-Card-PM.jpg" alt=""></a> -->
                    </div>
                    <div class="mark">
                        <marquee behavior="" direction="">
                        <?php dynamic_sidebar( 'marquee-1' ); ?>
                            <!-- নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন  -->
                        </marquee>
                        <marquee behavior="" direction="">
                        <?php dynamic_sidebar( 'marquee-2' ); ?>
                        	<!-- শুরু হয়েছে সুবর্ণজয়ন্তী অনলাইন কুইজ প্রতিযোগিতা। কুইজে অংশ নিয়ে জিতে নিন উন্নতমানের ল্যাপটপসহ ১৫০টি আকর্ষণীয় পুরস্কার। অংশ নিতে ভিজিট করুন:  -->
                         </marquee>
                    </div>
                    <div class="slider">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php 
                                $a=0;
                                while(have_posts()){the_post();
                                $a++;
                                ?>
                              <div class="carousel-item <?php echo ($a==1)? 'active': ''?>">
                                  <?php echo the_post_thumbnail();?>                      
                              </div>
                              <?php }?>
                              
                            </div>
                          </div>
                    </div>
                    <div class="nav&tabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                    <div class="col-2">
                                        <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/agriculture.png" alt=""></a>
                                        <p>মৎস্য ও প্রাণী</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                               <div class="row">
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                                <div class="col-2">
                                    <a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/icon-admission (1).png" alt=""></a>
                                    <p>ভর্তির আবেদন</p>
                                </div>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                    <div class="col-2">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/training_1.png.png" alt="">
                                        <p> প্রশিক্ষণ</p>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="others"></div>
                </div>
                <!-- col-lg-8 part end -->
                <div class="col-lg-4">
                    <div class="sidebar_img">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                         <!-- <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a> 
                         <a href="#"><img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/sidebar/eksheba (1).jpg" alt=""></a>  -->
                    </div>
                    <h5>সকল বাতায়ন</h5>
                    <form action="">
                        <select class="sidebar_input">
                            <option selected>ওয়েবসাইট বাছাই করুন</option>
                            <option value="1">অধিদপ্তর</option>
                            <option value="2">ঢাকা বিভাগ</option>
                            <option value="3">চট্টগ্রাম বিভাগ</option>
                            <option value="3">চট্টগ্রাম বিভাগ</option>
                            <option value="3">চট্টগ্রাম বিভাগ</option>
                            <option value="3">চট্টগ্রাম বিভাগ</option>
                          </select>
                          <button>চলুন</button>
                    </form>
                    <div class="sidebar_vedio">
                       <div class="row">
                        <p">সুবর্ণজয়ন্তী কুইজ প্রতিযোগিতা-২০২২</p>
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/others/download.png" alt="">
                       </div>
                       <div class="vedio">
                        <p>মুজিব১০০ আ্যাপ</p>
                        <iframe width="315" height="200" src="<?php echo get_template_directory_uri()?>/https://www.youtube.com/embed/4Om3kZJL-qU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p>মাস্ক পরুন সেবা নিন</p>
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/assets/images/mask-bd-portal (1).jpg" alt="">
                        <iframe width="315" height="220" src="<?php echo get_template_directory_uri()?>/https://www.youtube.com/embed/B0FgrYBE4uY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       </div>
                       <div class="end_slider">
                       <?php dynamic_sidebar( 'picture-1' ); ?>
                        <!-- <img src="<?php echo get_template_directory_uri()?>/assets/images/Navbar/budget_bn_new.png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Navbar/currency_bangla (1).png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Navbar/stock_bangla.png" alt="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Navbar/weather_bn.png" alt=""> -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main part end -->
    <!-- footer part start -->
    <footer>
        <div class="container">
            <div class="row">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/footer/footer_top_bg.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <!-- footer navbar part -->
                    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
					'menu_class'        => 'navber_nav',
				)
			);
			?>
                    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Navbar</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                              <a class="nav-link active" aria-current="page" href="#">Home</a>
                              <a class="nav-link" href="#">Features</a>
                              <a class="nav-link" href="#">Pricing</a>
                              <a class="nav-link disabled">Disabled</a>
                            </div>
                          </div>
                        </div>
                      </nav> -->
                </div>
                <div class="col-lg-6"></div>
            </div>
            <div class="row"></div>
        </div>
    </footer>
    <!-- footer part end -->
    <?php wp_footer();?>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>