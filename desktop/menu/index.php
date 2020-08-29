	<?php 
	include '../template/header.php'; 
	?>
	<!--===========================banner===========================-->
    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../resources/images/desktop/slideLigamandion1.jpg" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
                <div class="carousel-item">
                    <img src="../../resources/images/desktop/slide2.jpg" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
                <div class="carousel-item">
                    <img src="../../resources/images/desktop/slide3.jpg" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
                <div class="carousel-item">
                    <img src="../../resources/images/desktop/slide4.jpg" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
                <div class="carousel-item">
                    <img src="../../resources/images/desktop/slide5.png" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
                <div class="carousel-item">
                    <img src="../../resources/images/desktop/slide6.png" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
                <div class="carousel-item">
                    <img src="../../resources/images/desktop/slide7.jpg" title="Welcome to Ligamansion" alt="Welcome to Ligamansion" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="notice">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="notice_box">
                        <div class="notice_left">
                            <ul>
                                <li><span></span></li>
                                <li>
                                    Pemberitahuan
                                </li>
                            </ul>
                        </div>
                        <div class="notice_right">
                            <ul id="ctl00_ContentPlaceHolder1_myUl">
                                <li>Welcome to FORZA88</li>
                            </ul>
                        </div>
                        <div class="notice_text">
                            <p>
								<?php echo " " . date("l");?>
								<?php echo " " . date("d-m-Y");?>
								<?php date_default_timezone_set("asia/bangkok"); echo " " . date("H:i:s");?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========================banner===========================-->

   <div class="mega_jackpot">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mega_jackpot_main">
                        
                            
                                <ul>
                                    <li>
										<img src="https://api2-fz8.tr8games.com/images/id_promo_102b4686-3997-4d8b-8d62-16865e0d95ec_1595848265573.jpg?1595848265573"alt="" />
									</li>
								</ul>
                           
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php 
	include '../template/footer.php'; 
	?>