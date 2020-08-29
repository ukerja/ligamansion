
<!DOCTYPE html>

<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>FORZA88</title>

    <meta name="description" content="FORZA88 memberikan bonus terbaik disetiap game" />

    
    <meta name="theme-color" content="Red" />    
    <meta name="language" content="id-ID" />   
    
    <meta name="categories" content="website" />

    <meta name="robots" content="INDEX,FOLLOW" />
    
    <link href="../resources/css/mobile/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../resources/css/mobile/style.css"
        rel="stylesheet" type="text/css" />
    <link href="../resources/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../../desktop/assets/fontawesome-free-5.14.0-web/css/all.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../resources/css/menu.css">
    <link href="../resources/css/jquery.range.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/assets/owl.carousel.min.css">
    <link href="../resources/css/mobile/main.css" rel="stylesheet" type="text/css">
    <link href="../../mobile/assets/lobibox-master/dist/css/lobibox.css" rel="stylesheet" type="text/css">

    <script src="../resources/js/jquery.min.js"></script>
    <script src="../resources/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../resources/assets/owl.carousel.js"></script>
    <script src="../resources/js/menu.js"></script>

    

    <script type="text/javascript">
        var popups = new Array();
        var destroyGameAfterDispatch = new Array();
        var validNavigation = false;
        var isPopup = false;

        function changeLanguage(language) {
            var now = new Date();
            var expires = now.setTime(now.getTime() + (7 * 24 * 60 * 60 * 1000));
            expires = new Date(expires);

            document.cookie = "language=" + language + "; expires=" + expires + "; path=/; SameSite=Strict";

            location.reload();
        }

        function refreshCaptcha(img_id) {
            document.getElementById(img_id).src = "/web-root/restricted/common/get-captcha.ashx?from=" + Math.random();
        }

        function openPopup(url, name) {
            destroyDispatchPopup();
            isPopup = true;
            var popUp = window.open(url, name);
            popups.push(popUp);
        }

        function openPopupWithCloseUnload(url, name) {
            destroyDispatchPopup();
            isPopup = true;
            var myWindow = window.open(url, name);
            destroyGameAfterDispatch.push(myWindow);
            popups.push(myWindow);
        }

        function destroyPopUps() {
            if (popups.length == 0) return;

            for (i = 0; i < popups.length; i++) {
                popups[i].close();
            }
        }

        function destroyDispatchPopup() {
            if (destroyGameAfterDispatch.length == 0) return;

            for (i = 0; i < destroyGameAfterDispatch.length; i++) {
                destroyGameAfterDispatch[i].close();
            }
        }


    </script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $("li.navigation7").click(function () {
                window.location.href = "promotion";
            });
        });
    </script>
</head>
<body>

<div class="loading_div" id="loadingShow">
	<div class="spinner-border text-warning" role="status" style="width:6rem; height:6rem;">
	  <span class="sr-only">Loading...</span>
	</div>
	<div class="boxLoading">
		<span style="font-size: 16px;font-weight: bold;color: black;">Loading...</span>
	</div>
</div>
    <div id="myModal" class="modal fade mainModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="ctl00_divModalHeader" class="modal-header" style="">
                    <button type="button" class="fas fa-times" data-dismiss="modal" aria-hidden="true" style="opacity: initial;"></button>
                </div>
                <div id="ctl00_divModalBody" class="modal-body">
                </div>
            </div>
        </div>
    </div>

<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
</div>
<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="EE458023" />
</div>
        
    <div class="modal fade gameModal_box" id="gameModal" role="dialog" aria-labelledby="gameModalLabel" aria-hidden="false">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body container">

                    <div class="col-xs-5 gameModal_icon">
                        <img id="casinoImg" src="" />
                        <p id="casinoName"></p>
                    </div>

                    <div class="col-xs-7 gameModal_btn text">
                        <a class="popup-demo-pp slot_btn demo_btn" href="#" target="_blank" id="demoBtn">COBA</a>
                        <a class="popup-pp slot_btn" href="#" target="_blank" id="playBtn">MAIN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!--=========================== Header ===========================-->

        <header>
            <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mainlogo">
                        <a href="../menu">
                            <img src="../../resources/images/desktop/ligamansion.png" style="width:85px;" alt="" />
                            
                        </a>
                    </div>
                </div>
            </div>

        </header>
        <main class="cd-main-content">
            

    

<!--=========================== Banner ===========================-->

<div class="banner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li><li data-target="#myCarousel" data-slide-to="1" class=""></li><li data-target="#myCarousel" data-slide-to="2" class=""></li><li data-target="#myCarousel" data-slide-to="3" class=""></li><li data-target="#myCarousel" data-slide-to="4" class=""></li><li data-target="#myCarousel" data-slide-to="5" class=""></li><li data-target="#myCarousel" data-slide-to="6" class=""></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active"><img src="https://api2-fz8.tr8games.com/images/id_cbm_3045f459-f899-4ab1-93df-21297284e3b0_1596014218580.jpg?1596014218580" alt="Welcome to FORZA 88 5" /></div><div class="item "><img src="https://api2-fz8.tr8games.com/images/id_cbm_466d27a6-3d1b-40fd-a3b7-30f687d42932_1595582929580.jpeg?1595582929580" alt="Welcome to FORZA88 7" /></div><div class="item "><img src="https://api2-fz8.tr8games.com/images/id_cbm_05447c22-8b64-4419-9770-7ed553b58c54_1595850047480.jpg?1595850047480" alt="Welcome to FORZA 88 4" /></div><div class="item "><img src="https://api2-fz8.tr8games.com/images/id_cbm_44a5b62d-c533-437c-978b-fc0808d877f6_1595272403963.png?1595272403963" alt="Welcome to FORZA 88 2" /></div><div class="item "><img src="https://api2-fz8.tr8games.com/images/id_cbm_aae4dc69-c015-4660-8f21-1beb9d0926d8_1595272435870.png?1595272435870" alt="Welcome to FORZA88 1" /></div><div class="item "><img src="https://api2-fz8.tr8games.com/images/id_cbm_b71c415f-24d7-4f0a-b206-70d1fea8ba1a_1598346950607.jpeg?1598346950607" alt="Welcome to FORZA88 8" /></div><div class="item "><img src="https://api2-fz8.tr8games.com/images/id_cbm_aa6670fa-05c8-46a8-85c2-3f427f20e4bc_1595845022593.jpg?1595845022593" alt="Welcome to FORZA88 6" /></div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 5000,
            wrap: true,
            keyboard: true
        });
    });
  
</script>
 
    <hr class="spacer1px" />


    <!--=========================== Player Tabbing ===========================-->
    <div class="play_tabbing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    

<script type="text/javascript">
    function onRefreshClick(info) {
        var username = info.getAttribute("data-Username");
        var obj = JSON.stringify({
            Username: username
        });
        $.ajax({
            type: 'POST',
            contentType: 'application/json; charset=utf-8',
            url: 'dashboard.aspx/getRefreshData',
            cache: false,
            data: obj,
            dataType: 'json',
            success: function (data) {
                $("#ctl00_ContentPlaceHolder1_playerSection_playerCredit").text(data.d.balance);
                $("#ctl00_ContentPlaceHolder1_playerSection_lblBalanceLock").text(data.d.balanceLock);
            }
        });
    }
</script>