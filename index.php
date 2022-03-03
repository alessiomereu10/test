<!DOCTYPE html>
<?php
  include_once ('./system/user_default.php');
  // include_once ($_SERVER['DOCUMENT_ROOT'] . 'send_email.php');
 ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Sonic NDT</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
    <!-- Base fonts of theme-->
    <link href="css/poppins-font.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/revolution/css/layers.css" rel="stylesheet" />
    <link href="vendor/revolution/css/navigation.css" rel="stylesheet" />
    <link href="vendor/revolution/css/settings.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="css/main.min.css" rel="stylesheet" media="all">

    <!--Favicons-->
    <link rel="shortcut icon" href="system/imgs/FV.png">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <style media="screen">
      .page-col{
        border:none !important;
      }
      .page-line__inner
      {
          border:none !important;
      }
      .rev_slider_wrapper--p80
      {
        padding: 0px;
        height: 680px;
      }
      .forcefullwidth_wrapper_tp_banner
      {
        max-height: 680px !important;
        height: 680px !important;
      }
      .rev_slider_wrapper,.rev_slider_wrapper--p80,.tp-overflow-hidden
      {
          max-height: 680px !important;
          height: 680px !important;
      }

      .altezza_icone
      {
       height: 160px;
      }
      .altezza_card
      {
        height: 500px;
      }
      .rev_slider
      {
        max-height: 680px !important;
      }
      .custom_image_corda
      {
        height: 620px;
      }
      .row_luoghi
      {
        text-align: -webkit-center;
        margin-top: 2rem;
      }
      .tp-bullets
      {
        display: none;
      }
      .line-bottom
      {
        display: none !important;
      }
      .line
      {
        display: none !important;
      }
      .media__text
      {
        margin-top: 5rem;
      }
      .custom_logo_card
      {
          margin-top: 5rem;
      }
      .custom_logo
      {
        height: 94px;
        padding: 1rem;
        /* image-rendering: pixelated; */
      }
      .header--fixed
      {
        background: black !important;
      }
      .footer
      {
        background-image:none;
      }
      .custom_imag_sovra
      {
         margin-top:10rem !important;
      }
      .custom_imag_sovra2
      {
         margin-top:17rem !important;
         place-content: center; background:url('system/imgs/sfondo_mare.jpg');
         background-size:100% 100% !important;
         min-height:750px;
      }
      .custom_proget
      {
        margin-top: 3rem;
      }
      .img_size
      {
        background: content-box;

      }
      .altezza_card
      {
        height: auto !important;
      }
      .custom_lavori
      {
        text-align: -webkit-center;
        color: #222;
      }
      /* .colore_sfondo
      {
        background-color: black; */
      }
      .header__bar
      {
        z-index: 999;
        background: none;
      }
      .colore_scritte_header
      {
        color:white !important;
      }
      .text-block
      {
         position: absolute;
         bottom: 20px;
         right: 20px;
         background-color: black;
         color: white;
         padding-left: 20px;
         padding-right: 20px;
     }
     .div_sopra
     {
      position:absolute;
      top:0;
      left:-2;
      border-radius: 2rem;
      background:black;
      max-width: 488px;
      padding-left:2rem;
      padding-right:2rem;
      padding-bottom:2rem;
     }
     .div_sopra2
     {
      margin-top: -37rem;
      position:absolute;
      top:0;
      left:-2;
      border-radius: 2rem;
      background:black;
      max-width: 590px;
      padding-left:2rem;
      padding-right:2rem;
      padding-bottom:2rem;
     }
     #canvas{

       /* position:absolute; */
       /* height: 70% !important; */
       width: 100% !important;
       margin-top: -10rem;

        }
           body {
        margin: 0;
        padding: 0;
      }
      .titolo_desc
      {
        color:white;
        font-size:2rem;

      }
      .spazio_card
      {
        margin-top:9rem;
        margin-bottom:9rem;
      }
      .card_macrosrv
      {

        height:500px;
      }
      .menu-mobile
      {
        border-bottom: 1px solid black !important;
      }
      .custom_scritta_img
      {
        color:white;
        line-height:2.1rem;
        font-size:1.34rem;
      }
      @media only screen and (max-width: 700px)
      {

        .custom_head_mob
        {
          background: black;
          border-bottom: 1px solid black !important;
        }
        .custom_text_2
        {
            margin-bottom: 0px !important;
        }
        .custom_clienti
        {
          margin-bottom: 5rem !important;
        }
        .custom_logo_card
        {
            margin-top: 0rem;
        }
        .img_header
        {
          height: 200px;
        }
        .titolo_desc
        {
          color:white;
          font-size:1.2rem;

        }
        .card_macrosrv
        {
          background-image:url('system/imgs/giallo1.png');
          height:455px;
        }
        .spazio_card
        {

            margin-top:2rem;
            margin-bottom:5rem;

        }
        #canvas
        {
          max-width: -webkit-fill-available !important;
          height: 500px;
        }
        .div_sopra
        {
          /* height: 100px; */
          margin-right: 3rem;
          margin-left: 1rem;
          margin-top: -19rem;
          height: auto !important;
          overflow: hidden;
        }
        .div_sopra2
        {
          /* height: 100px; */
          margin-right: 3rem;
          margin-left: 2rem;
          margin-top: -46rem;
          height: auto !important;
          overflow: hidden;
        }
        .div_sotto
        {
          height: 599px;
          margin-right: 1rem;
          margin-left: 1rem;
          background-image: url("system/imgs/nave_mobile.jpg");
        }
        .image_sotto
        {
          display: none;
        }
        .custom_imag_sovra
        {
           margin-top:22rem !important;
        }
        .custom_imag_sovra2
        {
           margin-top:22rem !important;
           background-image: url("system/imgs/fine_sfondo_home.jpg") !important;
        }

      }

    </style>
</head>

<body class="animsition js-preloader">
  <?php
    // $msg="ciao";
   ?>
    <div class="page-wrapper">
        <!-- HEADER-->

        <!-- END HEADER-->

        <!-- MAIN-->
        <main id="main">
            <!-- PAGE LINE-->
            <div class="page-line">
                <div class="container">
                    <div class="page-line__inner">
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                        <div class="page-col"></div>
                    </div>
                </div>
            </div>
            <!-- END PAGE LINE-->

            <!-- SLIDER-->
            <section>
              <div style=" position: relative;">
                    <?php print $header ?>
                    <div class="">
                      <!-- <img src="system/imgs/ispezione_fine.jpg" class="img_header"style="margin-top: -10rem;" width="100%" alt=""> -->
                      <canvas id = "canvas" style="" />

                    </div>

              </div>

            </section>
            <!-- END SLIDER-->
            <div class="row  custom_imag_sovra2" style="">
              <div class="col-sm-8" style="">
                <div class="div_sopra2" style="">
                  <div class="title" style="text-align:center;">
                    <br>
                      <h4 style=" " class="titolo_desc"> <?php print $text_pic_desc ?></h4>
                      <br>
                      <p class="custom_scritta_img" style=""><?php print $piccola_desc ?></p>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row custom_imag_sovra" style="place-content: center; ">
              <div class="col-sm-8" >
              <div class="div_sotto" style="">
                    <img src="system/imgs/sfondo_mare.jpg" class="custom_logo_card image_sotto">
                  <div class="div_sopra" style="">
                    <div class="title" style="text-align:center;">
                      <br>
                        <h4 style=" " class="titolo_desc"> <?php print $text_pic_desc ?></h4>
                        <br>
                        <p style="color:white;line-height:1.9rem; font-size:1.2rem;"><?php print $piccola_desc ?></p>
                    </div>
                  </div>
              </div>
              </div>
            </div> -->


            <!-- SERVICE-->

            <section class="p-t-60 p-b-55 colore_sfondo spazio_card" style="">
                <div class="container">
                    <div class="section-title">
                        <h5 class="title-sub colore_scritte">  <?php print $msg ?></h5>
                        <h2 class="title-1 colore_scritte"><?php  print $title_serv ?></h2>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-6 col-lg-4 card_macrosrv" style="background-image:url('system/imgs/blu1.png'); cursor:pointer;" onclick="apri_page('servizi.php?srv=2')">
                            <article class="media media-service">
                                <figure class="media__img">
                                <a href="servizi.php?srv=2" style="cursor:pointer; "></a>
                                </figure>
                                <!-- <div class="article_srv"> -->
                                  <div class="media__title">
                                      <h3 class="title">
                                          <a href="servizi.php?srv=2" class="colore_scritte" style="color:white; margin-top: 26rem; font-size:23px;"><?php print $servizio1 ?></a>
                                      </h3>
                                      <!-- <span class="number">01</span> -->
                                  </div>

                                  <!-- <p class="media__text colore_scritte" style="color:white;" ><?php print $text_serv1 ?></p> -->
                                <!-- </div> -->

                            </article>
                        </div>

                        <div class="col-md-6 col-lg-4 card_macrosrv" style="background-image:url('system/imgs/rosso1.png'); cursor:pointer;" onclick="apri_page('servizi.php?srv=4')">
                            <article class="media media-service" >
                                <figure class="media__img">
                                  <a href="servizi.php?srv=4" style="cursor:pointer;"></a>
                                </figure>
                                <div class="media__title">
                                    <h3 class="title">
                                      <a href="servizi.php?srv=4" class="colore_scritte" style="color:white; margin-top: 26rem; font-size:24px;"><?php print $servizio3 ?></a>
                                    </h3>
                                    <!-- <span class="number">03</span> -->
                                </div>
                                <!-- <p class="media__text colore_scritte" style="color:white;" ><?php print $text_serv3 ?></p> -->
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-4 card_macrosrv" style="background-image:url('system/imgs/giallo1.png'); cursor:pointer;" onclick="apri_page('servizi.php?srv=3')">
                            <article class="media media-service">
                                <figure class="media__img">
                                  <a href="servizi.php?srv=3" style="cursor:pointer;"></a>
                                </figure>
                                <div class="media__title">
                                    <h3 class="title">
                                        <a href="servizi.php?srv=3" style="color:white; margin-top: 26rem; font-size:24px;"  class="colore_scritte"><?php print $servizio2 ?></a>
                                        <br>
                                    </h3>
                                    <!-- <span class="number">02</span> -->
                                </div>
                                <!-- <p class="media__text colore_scritte" style="color:white;"><?php print $text_serv2 ?></p> -->
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ABOUT US-->
            <section class="p-t-10 p-b-55" style="background-color: black; padding-top:3rem; padding-bottom:3rem;">
                <div class="">
                    <div class="media-about">
                        <div class="row">
                            <div class="col-lg-5 offset-lg-2">
                                <div class="media__body">
                                    <h5 class="title-sub" style="color:white;" ><?php print $novita ?></h5>
                                    <h2 class="title-1" style="border-bottom: 3px solid #222; color:white;"><?php print $servizio4 ?></h2>
                                    <p class="media__text" style="font-size: 1.2rem; color:white;"><?php print $text_serv4 ?>.</p>
                                    <a class="au-btn au-btn--arrow" href="servizi.php?srv=5" style=" color:white;"><?php print $text_button ?>
                                        <i class="zmdi zmdi-arrow-right ic-arrow"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="media__img js-line">
                                    <img src="system/imgs/lavori_corda_fine_card.jpg" class="custom_image_corda">
                                    <span class="line"></span>
                                    <span class="line line-bottom"></span>
                                    <div class="media__img-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <!-- <span class="number">28</span> -->
                                        <!-- <span class="desc">years of experience</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- LASTEST PROJECT-->
            <section class="wrap wrap--w1790 p-b-75 custom_proget colore_sfondo" id="lavori">
                <div class="section-title m-b-70">
                    <!-- <h5 class="title-sub">our work</h5> -->
                    <h2 class="title-1 colore_scritte"><?php print $progetti ?></h2>
                </div>
                <div class="container-fluid">
                    <div class="slick-wrap slick-project js-slick-wrapper" data-slick-xs="1" data-slick-sm="1" data-slick-md="3" data-slick-lg="4" data-slick-xl="4" data-slick-dots="false" data-slick-customnav="true" data-slick-autoplay="true">
                        <div class="slick-wrap-content">
                            <div class="slick-content js-slick-content">
                                <div class="slick-item" class="altezza_card">
                                    <article class="media media-project altezza_card" >
                                        <figure class="media__img altezza_card" >
                                            <img src="system/imgs/gallery1.png"  class="altezza_card img_size"/>
                                        </figure>


                                    </article>
                                </div>
                                <div class="slick-item" class="altezza_card">
                                    <article class="media media-project altezza_card">
                                        <figure class="media__img altezza_card">
                                            <img src="system/imgs/gallery2.png" class="altezza_card img_size" />
                                        </figure>


                                    </article>
                                </div>
                                <div class="slick-item" class="altezza_card">
                                    <article class="media media-project altezza_card">
                                        <figure class="media__img altezza_card">
                                            <img src="system/imgs/gallery3.png" class="altezza_card img_size" />
                                        </figure>


                                    </article>
                                </div>
                                <div class="slick-item" class="altezza_card">
                                    <article class="media media-project altezza_card">
                                        <figure class="media__img altezza_card">
                                            <img src="system/imgs/gallery4.png" class="altezza_card img_size" />
                                        </figure>
                                        <!-- <div class="bg-overlay"></div> -->
                                        <!-- <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">Frozen house</a>
                                            </h3>
                                            <div class="address">Mexico</div>
                                        </div> -->
                                    </article>
                                </div>
                                <div class="slick-item" class="altezza_card">
                                    <article class="media media-project altezza_card">
                                        <figure class="media__img altezza_card">
                                            <img src="system/imgs/gallery6.png" class="altezza_card img_size" />
                                        </figure>


                                    </article>
                                </div>
                                <div class="slick-item" class="altezza_card">
                                    <article class="media media-project altezza_card">
                                        <figure class="media__img altezza_card">
                                            <img src="system/imgs/gallery7.png" class="altezza_card img_size"/>
                                        </figure>
                                        <!-- <div class="bg-overlay"></div>
                                        <span class="line"></span>
                                        <span class="line line--bottom"></span>
                                        <div class="media__body">
                                            <h3 class="title">
                                                <a href="project-detail-1.html">wooden villa</a>
                                            </h3>
                                            <div class="address">New York, USA</div>
                                        </div> -->
                                    </article>
                                </div>

                            </div>
                        </div>
                        <div class="slick__nav arrows-1">
                            <i class="slick-prev slick-arrow js-slick-prev ti-angle-left"></i>
                            <i class="slick-next slick-arrow js-slick-next ti-angle-right"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END LASTEST PROJECT-->


            <br>
            <br>
            <!--
            <div class="row">
              <div class="col-sm-3 offset-sm-2" style=" margin-bottom:-390px; height: 350px; z-index: 999; background: black; padding-left:2rem; padding-right:2rem;">
                  <div class="title" style="text-align:center;">
                    <br>
                      <h4 style="color:white"> ciaoooooo</h4>
                  </div>
                    <br>
                  <p style="color:white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="" style="text-align: end; image-rendering: pixelated;">
                      <img src="system/imgs/logo_bianco.ng" height="50px" width="50px">
                    </div>

              </div>

            </div>
            <div class="row" style="place-content: center;">
              <div class="col-sm-8">
                  <img src="system/imgs/sfondo_mare.jpg" class="custom_logo_card">
              </div>
            </div> -->




            <!-- CLIENT-->
            <section class="p-t-15 colore_sfondo " style="margin-top:2rem;">
                <div class="container">
                    <div class="section-title m-b-100" style="margin-bottom:3px;">
                        <!-- <h5 class="title-sub">awesome partner</h5> -->
                        <h2 class="title-1 custom_clienti colore_scritte"><?php print $clienti ?></h2>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <img src="system/imgs/clienti_fine.jpg" alt="">
                      </div>
                    </div>
                </div>
            </section>
            <!-- END CLIENT-->
            <section class="p-t-15">
              <div class="container">
                <div class="row " style="margin-top:5rem;">
                  <div class="col-sm-12 custom_lavori" >
                    <h2 style="font-size: 34px !important;">I nostri lavori</h2>
                  </div>
                </div>
              <div class="row">
                <div class="col-sm-12"style="">
                    <img src="system/imgs/cartina_fine_2.png" alt="image">
                </div>
              </div>

              <!-- <div class="row row_luoghi"style="margin-bottom: 15rem;">
                <div class="col-sm-6" style="text-align: start;">
                <p style="font-size:1.2rem;"><b>SARDEGNA:</b></p>
                <p  style="font-size:1.2rem;"><b>Tortolì - Arbatax </b></p>
                <p  style="font-size:1.2rem;"><b>Cagliari </b></p>
                <p  style="font-size:1.2rem;"><b>Olbia </b></p>
                <br>
                <p  style="font-size:1.2rem;"><b>ITALIA</b></p>
                <p  style="font-size:1.2rem;"><b>San Giorgio di Nogaro</b></p>
                <p  style="font-size:1.2rem;"><b>Ravenna</b></p>
                <p  style="font-size:1.2rem;"><b>Siracusa</b></p>
                </div>
                <div class="col-sm-3" style="text-align: start;">
                  <p style="font-size:1.2rem;"><b>ESTERO:</b></p>
                  <p  style="font-size:1.2rem;"><b>Ghana</b></p>
                  <p  style="font-size:1.2rem;"><b>Arabia</b></p>
                  <p  style="font-size:1.2rem;"><b>Norvegia</b></p>
                  <p  style="font-size:1.2rem;"><b>Kazakistan</b></p>
                  <p  style="font-size:1.2rem;"><b>Trinidad</b></p>
                  <p  style="font-size:1.2rem;"><b>Stati Uniti</b></p>
                  <p  style="font-size:1.2rem;"><b>Bulgaria</b></p>
                    <p  style="font-size:1.2rem;"><b>Francia:</b></p>



                </div>
                <div class="col-sm-3" style="text-align: start;">
                    <p style="font-size:1.2rem;"><b>ESTERO:</b></p>
                  <p  style="font-size:1.2rem;"><b>Scozia</b></p>
                  <p  style="font-size:1.2rem;"><b>Congo</b></p>
                  <p  style="font-size:1.2rem;"><b>Nigeria</b></p>
                  <p  style="font-size:1.2rem;"><b>Russia</b></p>
                  <p  style="font-size:1.2rem;"><b>Olanda</b></p>
                  <p  style="font-size:1.2rem;"><b>Tobago</b></p>
                  <p  style="font-size:1rem;"><b>Venezuela</b></p>
                  <p  style="font-size:1.2rem;"><b>Costa d'avorio</b></p>

                </div>

              </div> -->
              </div>
            </section>



            <section class="section p-b-80"style="margin-top:4rem;" id="contatti">
                <div class="container">
                    <!-- <div class="map-wrapper js-google-map m-b-60" data-makericon="images/icon/marker.png" data-makers="[[&quot;TATEE&quot;, &quot;Now that you visited our website,&lt;br&gt; how about checking out our office too?&quot;, 40.715681, -74.003427]]">
                        <div class="map__holder js-map-holder" id="map" style="height: 370px;"></div>
                    </div> -->
                    <div class="container">
                        <div class="section-title m-b-100">
                            <!-- <h5 class="title-sub">awesome partner</h5> -->
                            <h2 class="title-1"><?php print $contattaci ?></h2>
                        </div>
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <div class="contact-info">
                                <div class="contact-info__item">
                                    <h5 class="title--sm2"><?php print $indirizzo ?>:</h5>
                                    <p class="value">Via Pedralonga, Santa Maria Navarrese (OG)</p>
                                </div>

                                <div class="contact-info__item">
                                    <h5 class="title--sm2">email:</h5>
                                    <p class="value">info.sonicndt@gmail.com</p>
                                </div>
                                <div class="contact-info__item">
                                    <h5 class="title--sm2"><?php print $Phone ?>:</h5>
                                    <p class="value">+39 327 8262776 <span>/ +39 340 9718135</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact js-contact-form">
                                <div class="form-row no-gutters">
                                    <div class="col-md-6">
                                        <input class="au-input" type="text"  id="nome" placeholder="Name" required="required">
                                        <input class="au-input" type="email"  id="email" placeholder="Email Address" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                        <input class="au-input" type="text" placeholder="Phone" required="required">
                                    </div>
                                    <div class="col-md-6 p-r-0">
                                        <textarea class="au-textarea" id="message" placeholder="Message*" required="required"></textarea>
                                        <div class="text-right">
                                            <button class="au-btn au-btn--solid" onclick="manda_email()">Invia messaggio</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- END MAIN-->

        <!-- FOOTER-->
        <?php print $footer; ?>
        <!-- END FOOTER-->
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/matchHeight/jquery.matchHeight-min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/sweetalert/sweetalert.min.js"></script>
    <script src="vendor/noUiSlider/nouislider.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!--
    | (Load Extensions only on Local File Systems !
    | The following part can be removed on Server for On Demand Loading)
    -->
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <!-- Config Revolution Slider-->
    <script type="text/javascript" src="js/config-revolution.min.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="system/routines/js/index.js"></script>

</body>

</html>
<!-- end document-->
