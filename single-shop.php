

<?php



get_header();  

/*Template Name:product individual*/
?>

  
    <section class="inner_banner_section position-relative" style="background-image: url(./img/inner-banner.jpg);">

        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="inner_banner_content">
                        <h2>Shop our <span> Eco Friendly Products</span></h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s,</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="product_details_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop_page_bradcamb mb-4">
                        <a href="<?php echo get_site_url();?>">Home</a> / <a href="#">Shop</a> / <a href="#">Handicraft</a> / Flower Vase
                    </div>
                </div>
            </div>
            <div class="row border-bottom pb-5">
                <div class="col-md-5">
                    <div class="single_product_slider_wrapper">
                        <div class="swiper single_product_main mb-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat1.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat2.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat3.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat4.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat5.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat6.jpg" class="img-fluid" />
                                </div>
                            </div>

                        </div>
                        <div class="single_product_main_next"><i class="fa-solid fa-chevron-right"></i>
                        </div>
                        <div class="single_product_main_prev "><i class="fa-solid fa-chevron-left"></i>
                        </div>

                        <div thumbsSlider="" class="swiper single_product_thumb">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat1.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat2.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat3.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat4.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat5.jpg" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/cat6.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="Product_details_wrapper position-relative">
                        <h2>10 Pack Natural Burlap Table Runners,12 x 72 Inch Rustic</h2>
                        <div class="review mb-4 mt-4">
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star active"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(10 Review)</span>
                        </div>
                        <div class="size_select_wrapper mb-4">
                            <p>Size: 12 Pack 12x50 inch</p>
                            <div class="size_select">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        10 Pack 12x72inch
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        10 Pack 12x72inch
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        10 Pack 12x72inch
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        10 Pack 12x72inch
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h4>RS. 1250/-</h4>
                        <div class="product_incremnt d-flex mb-4 mt-4">
                            <div class="increment">
                                <button onclick="decrement()"><i class="fa-solid fa-minus"></i></button>
                                <span id="counter">0</span>
                                <button onclick="increment()"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <div class="cart_btn">
                                <button><i class="fa-solid fa-cart-shopping"></i> Add to Cart</button>
                            </div>

                        </div>
                        <div class="buy_now_btn mb-4">
                            <button>Buy Now</button>
                        </div>
                        <div class="product_details_extra_message">
                            <li><i class="fa-solid fa-truck"></i> <strong>Estimated Delivery :</strong> Within 5-7 Days</li>
                            <li><i class="fa-solid fa-cart-shopping"></i> <strong>Free Shipping:</strong> On order over $150 and above</li>
                        </div>
                        <div class="sku_category_sec  border-top pt-3">
                            <div>
                                <strong>SKU :</strong> IKDJU568896
                            </div>
                            <div>
                                <strong>Color :</strong>Yellow
                            </div>
                            <div>
                                <strong>Material :</strong>Natural Fibers
                            </div>
                            <div>
                                <strong>Size1 :</strong>Pack 12in*10yards
                            </div>
                            <div>
                                <strong>Style :</strong>Modern
                            </div>
                        </div>
                        <div class="whislist_icon">
                            <button class="active"><i class="fa-solid fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12">
                    <div class="product_description_adiotional_info">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Additional Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Review (10)</button>
                            </li>
                        </ul>
                        <div class="tab-content product_details_tab" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="details_tab">
                                    <h4>Product Details</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="recomend_product_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="recomd_title mb-4">
                        <h4>Similar Products</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 position-relative">
                    <div class="swiper recomd_product_slide swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single_latest_product">
                                    <div class="single_latest_product_img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/u1.jpg" class="img-fluid" />
                                    </div>
                                    <div class="single_latest_product_content">
                                        <h4>Reusable Eco friendly Stylish bags for Shopping</h4>
                                        <div class="price_section_latest_product d-flex align-items-center justify-content-between">
                                            <a href="#" class="shop_now_btn">Shop Now</a>
                                            <span>Rs. 550/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single_latest_product">
                                    <div class="single_latest_product_img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/u2.jpg" class="img-fluid" />
                                    </div>
                                    <div class="single_latest_product_content">
                                        <h4>Reusable Eco friendly Stylish bags for Shopping</h4>
                                        <div class="price_section_latest_product d-flex align-items-center justify-content-between">
                                            <a href="#" class="shop_now_btn">Shop Now</a>
                                            <span>Rs. 550/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single_latest_product">
                                    <div class="single_latest_product_img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/u3.jpg" class="img-fluid" />
                                    </div>
                                    <div class="single_latest_product_content">
                                        <h4>Reusable Eco friendly Stylish bags for Shopping</h4>
                                        <div class="price_section_latest_product d-flex align-items-center justify-content-between">
                                            <a href="#" class="shop_now_btn">Shop Now</a>
                                            <span>Rs. 550/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single_latest_product">
                                    <div class="single_latest_product_img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/u4.jpg" class="img-fluid" />
                                    </div>
                                    <div class="single_latest_product_content">
                                        <h4>Reusable Eco friendly Stylish bags for Shopping</h4>
                                        <div class="price_section_latest_product d-flex align-items-center justify-content-between">
                                            <a href="#" class="shop_now_btn">Shop Now</a>
                                            <span>Rs. 550/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single_latest_product">
                                    <div class="single_latest_product_img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/u5.jpg" class="img-fluid" />
                                    </div>
                                    <div class="single_latest_product_content">
                                        <h4>Reusable Eco friendly Stylish bags for Shopping</h4>
                                        <div class="price_section_latest_product d-flex align-items-center justify-content-between">
                                            <a href="#" class="shop_now_btn">Shop Now</a>
                                            <span>Rs. 550/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single_latest_product">
                                    <div class="single_latest_product_img">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/img/u6.jpg" class="img-fluid" />
                                    </div>
                                    <div class="single_latest_product_content">
                                        <h4>Reusable Eco friendly Stylish bags for Shopping</h4>
                                        <div class="price_section_latest_product d-flex align-items-center justify-content-between">
                                            <a href="#" class="shop_now_btn">Shop Now</a>
                                            <span>Rs. 550/-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="recomd_product_slide_next"><i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="recomd_product_slide_prev "><i class="fa-solid fa-chevron-left"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter_sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="newsletter_cont">
                        <h4>Dont Miss the Latest Offers</h4>
                        <p>Yroin libero nunc consequat interdum varius. Ornare suspendisse sed nisi lacus sed.
                            Sit amet massa vitae.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <form>
                        <div class="d-flex newsletter_inner align-items-center">
                            <input type="text" placeholder="Enter email here" />
                            <button>Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_logo_part d-flex align-items-center justify-content-between">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" class="mb-4 img-fluid" />
                        <ul class="d-flex align-items-center justify-content-end justify-content-end">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-4">
                            <div class="footer_abt pe-3">
                                <h4>About Fibeusion</h4>
                                <p>One of my favourite UX publications on medium. Just a quick read daily, will keep you updated with the UX industry.One of my favourite UX publications on medium. Just a quick read daily,</p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="footer_menu">
                                        <h4>Top Category</h4>
                                        <ul class="count2">
                                            <li><a href="#">Category</a></li>
                                            <li><a href="#">Category 1</a></li>
                                            <li><a href="#">Category 2</a></li>
                                            <li><a href="#">Category 3</a></li>
                                            <li><a href="#">Category 4</a></li>
                                            <li><a href="#">Category 5</a></li>
                                            <li><a href="#">Category 6</a></li>
                                            <li><a href="#">Category 7</a></li>
                                            <li><a href="#">Category 8</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="footer_menu">
                                        <h4>User</h4>
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">My Account</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="footer_menu last">
                                        <h4>Help</h4>
                                        <ul>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Term & Conditions</a></li>
                                            <li><a href="#">Refund Policy</a></li>
                                            <li><a href="#">Manufacture Unit</a></li>
                                            <li><a href="#">Eco Friendly Products</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 px-0 px-sm-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="cocpyright_sec d-block d-sm-flex align-items-center justify-content-between">
                        <p>Copyright © 2023 Fibeusion. All Rights Reserved. design & development by chanakanalytics</p>
                        <ul class="d-flex align-items-center justify-content-sm-end justify-content-center">
                            <li><a href="#">term & Conditions</a></li>
                            <li><a href="#"> Privacy Policy </a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>


<?php

get_footer();
?>
  


</html>
