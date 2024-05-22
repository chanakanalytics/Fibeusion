<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e5c874c64c.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="fibusion/wp-content/themes/fibeusion/assets/css/style.css" /> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" / >  
     <!-- <link rel="stylesheet" href="fibusion/wp-content/themes/fibeusion/assets/css/menu.css" /> -->

     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/menu.css" / >  
     <!-- <link rel="stylesheet" href="fibusion/wp-content/themes/fibeusion/assets/css/animate.css" /> -->
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css" / >  
    <!-- <link rel="stylesheet" href="fibusion/wp-content/themes/fibeusion/assets/css/responsive.css" />  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" / >  
   
   
    <title>Fibeusion <?php echo isset($args['title']) ? $args['title']: ''; ?></title>
</head>

<body>

    <section class="top_nav_bar p-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="top_address">
                        <p>Price is in US dollars and excludes tax and handling fees</p>


                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top_social">
                        <ul class="d-flex align-items-center justify-content-end justify-content-end">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- header start -->
    <header class="header">
        <!-- menu start here -->
        <div class="header-item item-center">
            <div class="menu-overlay"></div>
            <nav class="menu">
                <div class="mobile-menu-head">
                    <div class="go-back"><i class="fa fa-angle-left"></i></div>
                    <div class="current-menu-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />
                    </div>
                    <div class="mobile-menu-close">&times;</div>
                </div>
                <ul class="menu-main">
                    <li>
                        <a href="<?php echo get_site_url();?>">Home</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">All Category <i class="fa fa-angle-down"></i></a>
                        <div class="sub-menu mega-menu mega-menu-column-4">
                            <div class="list-item">
                                <h4 class="title">Category 1</h4>
                                <ul>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                    <li><a href="#">Tie and Dye</a></li>
                                    <li><a href="#">Garden Pot</a></li>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                </ul>
                                <h4 class="title">Category 2</h4>
                                <ul>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                    <li><a href="#">Tie and Dye</a></li>
                                    <li><a href="#">Garden Pot</a></li>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                </ul>
                            </div>
                            <div class="list-item">
                                <h4 class="title">Category 3</h4>
                                <ul>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                    <li><a href="#">Tie and Dye</a></li>
                                    <li><a href="#">Garden Pot</a></li>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                </ul>
                                <h4 class="title">Category 4</h4>
                                <ul>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                    <li><a href="#">Tie and Dye</a></li>
                                    <li><a href="#">Garden Pot</a></li>
                                    <li><a href="#">Promotional Bags</a></li>
                                    <li><a href="#">Bottle Bag</a></li>
                                    <li><a href="#">Tote Bag</a></li>
                                </ul>
                            </div>
                            <div class="list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/use_case2.jpg" alt="Chair" />
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url();?>/shop/">Shop</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url();?>/blog/">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header end -->


    <section class="main_nav_section">
        <nav class="navbar navbar-expand-lg px-0">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" />
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo $args['page'] == 'home' ? 'active' : ''; ?>" aria-current="page" href="<?php echo get_site_url();?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega position-static">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside"> All Category</a>
                            <div class="dropdown-menu shadow">
                                <div class="mega-content px-4">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-3 py-4">
                                                <div class="nav megamenu_category_list flex-column nav-pills me-3"
                                                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-category1-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-category1"
                                                        type="button" role="tab" aria-controls="v-pills-category1"
                                                        aria-selected="true">category1</button>
                                                    <button class="nav-link" id="v-pills-category2-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-category2"
                                                        type="button" role="tab" aria-controls="v-pills-category2"
                                                        aria-selected="false">category2</button>
                                                    <button class="nav-link" id="v-pills-category3-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-category3"
                                                        type="button" role="tab" aria-controls="v-pills-category3"
                                                        aria-selected="false">category3</button>
                                                    <button class="nav-link" id="v-pills-category4-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-category4"
                                                        type="button" role="tab" aria-controls="v-pills-category4"
                                                        aria-selected="false">category4</button>
                                                    <button class="nav-link" id="v-pills-category5-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-category5"
                                                        type="button" role="tab" aria-controls="v-pills-category5"
                                                        aria-selected="false">category5</button>
                                                </div>
                                            </div>
                                            <div class="col-md-9 py-4">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-category1"
                                                        role="tabpanel" aria-labelledby="v-pills-category1-tab"
                                                        tabindex="0">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="category_mega_menu">
                                                                    <ul>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mega_menu_cat_img">
                                                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/use_case1.jpg" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-category2" role="tabpanel"
                                                        aria-labelledby="v-pills-category2-tab" tabindex="0">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="category_mega_menu">
                                                                    <ul>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mega_menu_cat_img">
                                                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/use_case2.jpg" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-category3" role="tabpanel"
                                                        aria-labelledby="v-pills-category3-tab" tabindex="0">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="category_mega_menu">
                                                                    <ul>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mega_menu_cat_img">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/use_case3.jpg" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-category4" role="tabpanel"
                                                        aria-labelledby="v-pills-category4-tab" tabindex="0">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="category_mega_menu">
                                                                    <ul>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mega_menu_cat_img">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/use_case4.jpg" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-category5" role="tabpanel"
                                                        aria-labelledby="v-pills-category5-tab" tabindex="0">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="category_mega_menu">
                                                                    <ul>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                        <li><a href="#">Promotional Bags</a></li>
                                                                        <li><a href="#">Bottle Bag</a></li>
                                                                        <li><a href="#">Tote Bag</a></li>
                                                                        <li><a href="#">Tie and Dye</a></li>
                                                                        <li><a href="#">Garden Pot</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mega_menu_cat_img">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/use_case1.jpg" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a  href="<?php echo get_site_url();?>/shop/" class="nav-link" > Shop</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_site_url();?>/blog/">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <ul class="d-flex align-items-center nav_cart_area">
                    <li><a href="#"><i class="fa-regular fa-user"></i> <span>My Account</span></a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span>Cart Item</span></a></li>
                    <li class="search_control"><a href="javascript:void(0)"><i class="fa-solid fa-magnifying-glass"></i>
                            <span>Search</span></a>

                    </li>
                </ul>
                <div class="search-form-main clearfix">
                    <form role="search" method="get" class="search-form" action="sitename.com/">
                        <input type="search" class="search-field mb-3" placeholder="Search …" value="" name="s">
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
                <!-- menu end here -->
                <div class="header-item item-right">
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </section>