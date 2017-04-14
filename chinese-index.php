<!DOCTYPE html>
<!-- Drew - A Multipurpose Landing Page Template, designed by David Rozando (http://design.davidrozando.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<?php
    $cookie_name = "lang";
    $cookie_lang = "chi";
    setcookie($cookie_name, $cookie_lang, time() + (86400 * 30), "/");
    $portfolio = "作品";
$viewFull = "查看完整作品";
$contactUs = "聯繫我們";
$contactDesc = "兴奋听到从你";
?>
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- BASIC INFO -->
    <title>MacCil Marketing</title>
    <meta name="author" content="David Rozando">
    <meta name="keywords" content="markham, marketing firm, marketing, advertising, translation, ethnic advertising">
    <meta name="description" content="">
    <!-- FAVICONS -->
    <link rel="icon" href="images/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
    <!-- CSS
        ================================= -->
    <!-- GOOGLE FONTS -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <!-- LIBRARIES CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- SPECIFIC CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- COLORS -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/pink.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/red.css"> -->
    <!--<link id="color-css" rel="stylesheet" href="css/colors/orange.css">-->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/yellow.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/green.css"> -->
    <!-- <link id="color-css" rel="stylesheet" href="css/colors/turquoise.css"> -->
    <link id="color-css" rel="stylesheet" href="css/colors/blue.css">
</head>

<body class="enable-animations enable-preloader">
    <div id="document" class="document">
        <!-- HEADER
            ================================= -->

        <header id="header" class="header-section section section-dark navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header navbar-left">
                    <!-- RESPONSIVE MENU BUTTON -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    <!-- HEADER LOGO -->
                    <a class="navbar-logo navbar-brand anchor-link" href="#hero">
                        <img src="images/logos/logo.png" srcset="images/logos/header-logo@2x.png 2x" alt="MacCil Marketing">

                    </a>
                </div>
                <nav id="navigation" class="navigation navbar-collapse collapse navbar-right">
                    <!-- NAVIGATION LINKS -->
                    <ul id="header-nav" class="nav navbar-nav nav-chinese">
                        <li><a href="#hero" class="hidden">Top</a></li>
                        <li><a href="#about">關於我們</a></li>
                        <li><a href="#services">服務</a></li>
                        <li><a href="#portfolio">廣告組合</a></li>
                        <li><a href="#events">活動策劃</a></li>
                        <!-- HEADER ACTION BUTTON -->
                        <li class="header-action-button"><a href="#contact" class="btn btn-primary nav-chinese">聯繫我們</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- HERO
            ================================= -->
        <section id="hero" class="hero-section hero-layout-simple hero-fullscreen section section-dark">
            <div class="section-background">
                <!-- IMAGE BACKGROUND -->
                <div class="section-background-image parallax" data-stellar-ratio="0.4">
                    <img src="" alt="" style="opacity: 0.3;">
                </div>
            </div>
            <div class="container">
                <div class="hero-content">
                    <div class="hero-content-inner">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="hero-heading white-frame text-center" data-animation="fadeIn">
                                    <h1 class="hero-title">MacCil Marketing</h1>
                                    <p class="hero-tagline">連接文化, 品牌建設</p>
                                </div>
                                <div class="text-center trans-buttons">
                                    <a href="index.php" class="translate eng-translate">English</a>
                                    <a class="translate chi-translate trans-active">中文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HERO START LINK -->
            <a href="#about" class="hero-start-link anchor-link"><span class="fa fa-angle-double-down"></span></a>
        </section>
        <!-- TWO COLS DESCRIPTION SECTION
            ================================= -->
        <section id="about" class="two-cols-description-section section-accent section">
            <div class="container-fluid two-cols-description-row">
                <!-- TWO COLS DESCRIPTION TEXT -->
                <div class="two-cols-description-text">
                    <div class="two-cols-description-text-inner">
                        <h2 class="section-heading text-left">關於我們</h2>
                        <p>我們是一間著力打造原創和具創意的，熱情洋溢的廣告和市場公司. 我們希望消費者能分享品牌所提供的正面訊息和對品牌忠誠。</p>
                        <p>從平面設計美觀新穎理想品牌開始。</p>
                        <h2 class="section-heading text-left">連接文化, 品牌建設</h2>
                        <p>通過與不同族裔的媒體合作夥伴合作，我們為客戶獲得最好戰略營銷工具,取得最佳的市場優勢.</p>
                    </div>
                </div>
                <!-- TWO COLS DESCRIPTION IMAGE -->
                <div class="two-cols-description-image">
                    <img src="images/contents/aboutUs.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- HEADLINE
            ================================= -->
        <!-- BENEFITS
            ================================= -->
        <section id="services" class="benefits-section section-dark section">
            <div class="section-background">
                <!-- IMAGE BACKGROUND -->
                <div class="section-background-image parallax" data-stellar-ratio="0.4">
                    <img src="images/backgrounds/services.jpg" alt="" style="opacity: 0.15;">
                </div>
            </div>
            <div class="container">
                <h2 class="section-heading text-center">廣告組合</h2>
                <div class="benefits-row row">
                    <!-- BENEFIT 1 outreach-->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-bicycle" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">市場推廣</h4>
                            <p class="benefit-description">無論是面對面營銷，產品推出，我們提供活動策劃，建立品牌和形象。</p>
                        </div>
                    </div>
                    <!-- BENEFIT 2 ethnci marketing -->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-users" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">多元文化市場</h4>
                            <p class="benefit-description">我們可以接近任何市場或觀眾，建立關係, 開發我們的客戶和他們的客戶之間的橋樑.</p>
                        </div>
                    </div>
                    <div class="hidden-md hidden-lg clear"></div>
                    <!-- BENEFIT 3 Mall events-->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent org-accent fa fa-building" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">商場活動與推廣 </h4>
                            <p class="benefit-description"> 成功的活動,可增加商場客流量, 帶來重大的營銷機會. 透過活動,帶給現場參與者一個深刻的印象. 以建立商場形象和品牌.  </p>
                        </div>
                    </div>
                    <!-- translation -->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-globe" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">翻譯服務（英/中） </h4>
                            <p class="benefit-description">提供優質的翻譯服務, 將品牌訊息及含意, 準確地面表達在文字中. 客戶包括如萬錦劇院, 萬錦關顧參與之家, 我們可以翻譯英語成中文 (繁體/簡體) </p>
                        </div>
                    </div>
                    <div class="hidden-xs clear"></div>
                    <!-- BENEFIT 4 -->
                    <!-- advertising-->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-bullhorn" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">廣告與市場</h4>
                            <p class="benefit-description">客戶的產品或服務品牌信息直接傳至任何市場或觀眾, 提供有效的策略建議.</p>
                        </div>
                    </div>
                    <!-- BENEFIT 2 -->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-briefcase" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">營銷諮詢</h4>
                            <p class="benefit-description">我們接近任何市場或觀眾，我們的營銷諮詢, 提供有效策略建議.  </p>
                        </div>
                    </div>
                    <div class="hidden-md hidden-lg clear"></div>
                    <!-- Graphic design -->
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-eye" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">平面設計</h4>
                            <p class="benefit-description">無論你所需要的是品牌推廣，平面, 抑或是簡單的製作，我們的細心經驗製作團隊,準備好於限期前完成,滿足你的要求，打做建立一個促進企業成功的品牌訊息。 </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="benefit">
                            <span class="benefit-icon org-accent fa fa-newspaper-o" data-animation="bounceIn"></span>
                            <h4 class="benefit-title">媒體策劃和合作</h4>
                            <p class="benefit-description">我們與不同媒體合作超過15年，我們甚具競爭力。為客戶爭取最好的媒體價格，最重要是我們選擇最有效媒體吸引觀眾。</p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        <?php include('homePagePortfolio.php')?>
        <!-- Events -->
        <section id="events" class="team-section section">
            <div class="container-fluid">
                <h2 class="section-heading text-center">
活動策劃</h2>
                <div class="team-row row">
                    <!-- TEAM MEMBER 1 -->
                    <div class="col-sm-6 col-md-3" data-animation="fadeIn">
                        <a href="event-template.php?event=0" class="eventCards">
                            <div class="wrapper">
                                <img class="team-member-picture" src="events/1/1.jpg" alt="">
                                <div class="team-member-text">
                                    <h4 class="team-member-name">Chinese New Year Show</h4>
                                    <div class="team-member-position"></div>
                                    <p class="team-member-description">MacCil Marketing organized Chinese New Year Program</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- TEAM MEMBER 2 -->
                    <div class="col-sm-6 col-md-3" data-animation="fadeIn">
                        <a href="event-template.php?event=1" class="eventCards">
                            <div class="wrapper">
                                <img class="team-member-picture" src="events/2/1.jpg" alt="">
                                <div class="team-member-text">
                                    <h4 class="team-member-name">Christmas Show</h4>
                                    <div class="team-member-position"></div>
                                    <p class="team-member-description">Christmas Concert and Show</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="hidden-md hidden-lg clear"></div>
                    <!-- TEAM MEMBER 3 -->
                    <div class="col-sm-6 col-md-3" data-animation="fadeIn">
                        <a href="event-template.php?event=2" class="eventCards">
                            <div class="wrapper">
                                <img class="team-member-picture" src="events/3/2.jpg" alt="">
                                <div class="team-member-text">
                                    <h4 class="team-member-name">Mother's Day Program</h4>
                                    <div class="team-member-position"></div>
                                    <p class="team-member-description">Mother's Day program with a Mexican cultural twist.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="hidden-sm hidden-lg clear"></div>
                    <!-- TEAM MEMBER 4 -->
                    <div class="col-sm-6 col-md-3" data-animation="fadeIn">
                        <a href="event-template.php?event=3" class="eventCards">
                            <div class="wrapper">
                                <img class="team-member-picture" src="events/4/1.jpg" alt="">
                                <div class="team-member-text">
                                    <h4 class="team-member-name">Year of the Ram</h4>
                                    <div class="team-member-position"></div>
                                    <p class="team-member-description">Our largest Chinese New Year yet. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="hidden-md hidden-lg clear"></div>
                </div>
            </div>
        </section>
        <!-- CONTACT + MAPS
                ================================= -->
                       <section id="contact" class="contact-maps-section section bg-blue">
                    <div class="container text-center">
                        <div class="contact-maps-row row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="contact-maps-box text-center" data-animation="fadeIn">
                                    <h2 class="section-heading"><?php echo $contactUs;?></h2>
                                    <p><?php echo $contactDesc;?></p>
                                    <div class="row">
                                        <address class="col-sm-6">
                                            <ul class="fa-ul">
                                                <li><i class="fa-li fa fa-home"></i>Markham, Ontario</li>
                                                <li><i class="fa-li fa fa-envelope"></i>info@maccilmarketing.com</li>
                                                <li><i class="fa-li fa fa-phone"></i>Phone: (416) 875-0828</li>
                                                <li><i class="fa-li fa fa-fax"></i>Fax: (905) 258-0046</li>
                                            </ul>
                                        </address>
                                    </div>
                                    <form name="contact" action="modules/send-email.php" method="post" class="form form-ajax-submit">
<<<<<<< HEAD
                                        <p><strong>聯繫我們</strong></p>
=======
                                        <p><strong></strong></p>
>>>>>>> 19a14d8f1ba6a914931bc1e7f8841698948808f4
                                        <div class="form-validation alert"></div>
                                        <div class="form-group">
                                            <input type="text" name="contact-name" class="form-control" placeholder="姓名">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact-email" class="form-control" placeholder="郵箱地址">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact-subject" class="form-control" placeholder="有關項目">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="contact-message" class="form-control" placeholder="訊息

" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-block">傳遞訊息
</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        <!-- FOOTER
                ================================= -->
        <?php include ('footer.php') ?>
    </div>
    <!-- LIBRARIES JS
            ================================= -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/respimage.min.js"></script>
    <script src="js/jpreloader.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/jquery.nav.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/instaclick.js"></script>
    <script src="js/masonry.min.js"></script>
    <script src="js/handlebars-v4.0.5.js"></script>
    <!-- MAIN SCRIPT
            ================================= -->
    <script src="js/script.js"></script>
</body>

</html>
