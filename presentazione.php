<!DOCTYPE html>
<?php
  include_once ('./system/user_default.php');
  // include_once ($_SERVER['DOCUMENT_ROOT'] . 'send_email.php');
    $srv=$_GET["pre"];
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
      .custom_image
      {
            height: 513px !important;
      }
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
      .header--fixed
      {
        background: black !important;
      }
      .forcefullwidth_wrapper_tp_banner
      {
        max-height: 680px !important;
        height: 680px !important;
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
      .tp-bullets
      {
        display: none;
      }
      .media__text
      {
        margin-top: 5rem;
      }
      .col_fondatori
      {
        text-align: -webkit-center;
        max-height:500px !important;
      }
      .custom_logo
      {
        height: 94px;
        padding: 1rem;
      }
      .footer
      {
        background-image:none;
      }
      .row_list_tecniche
      {
        margin-top:-10rem;
      }
      .p_fondatori
      {
        font-size:1.2rem;
        margin-top:1rem;
        height:110px !important;
      }
      .section_pre
      {
        margin-top: 6rem !important;
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
      .custom_description
      {
        margin-top:42px !important;
      }
      .section_pre_cust
      {
        background:black !important;
        padding-top:8rem;
      }
      .custom_col
      {
        padding-left: 0rem !important;
        padding-right: 0rem !important;
      }
      @media only screen and (max-width: 700px)
      {
        .custom_media_text
        {
          margin-bottom: 0px !important;
        }
        .custom_div_img
        {
          margin-top: 1rem !important;
        }
        .reverse
        {
          flex-direction: column-reverse;
        }
        .custom_head_mob
        {
          background: black;
          border-bottom: 1px solid black !important;
        }
        .section_pre_cust
        {

          padding-top:1.4rem;
        }
        .section_pre
        {
          margin-top: 0rem !important;
        }
        #canvas
        {
          max-width: -webkit-fill-available !important;
          height: 500px;
        }
        .custom_desc
        {
          margin-top: 3rem;
        }
        .row_list_tecniche
        {
          margin-top:-2rem;
        }
        .custom_description
        {
          margin-top:18px !important;
          margin-bottom: 3rem !important;
        }
        .col_fondatori_custom
        {
          margin-top: 5rem;
        }
        .media_text_custo2
        {
          margin-top: 3rem !important;
          margin-bottom: 0rem !important;
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
        <main id="main"  data-srv="<?php print $srv ?>">
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

            <section>
              <div style=" position: relative;">
                    <?php print $header ?>
                    <div class="">
                      <canvas id = "canvas" style="" />
                    </div>

              </div>

            </section>



            <!-- END LASTEST PROJECT-->

            <section class="p-t-10 p-b-55 section_pre">
                <div class="">
                    <div class="media-about">
                        <div class="row">
                          <div class="col-sm-5 offset-sm-2">
                              <div class="media__body">
                                  <br>
                                  <h5 class="title-sub custom_desc"><?php print$sotto_titolo_pres ?></h5>
                                  <h2 class="title-1"><?php print$text_presentazione ?></h2>
                                  <p class="media__text custom_media_text" style="font-size:1.2rem;"><?php print$text_pre_pagina  ?></p>


                              </div>
                          </div>

                          <div class="col-lg-5">
                              <div class="media__img js-line">
                                  <img src="system/imgs/team1.jpg">
                                  <br>
                              </div>
                          </div>


                        </div>
                    </div>
                </div>
            </section>

            <section class="p-t-10 p-b-55 section_pre section_pre_cust " >
                <div class="">
                    <div class="media-about">
                        <div class="row reverse">
                          <div class="col-sm-5 ">

                                    <br>
                                  <img src="system/imgs/team2.jpg" class="">


                              </div>

                            <div class="col-sm-5 ">
                                <div class="media__body">
                                    <br>

                                    <h2 class="title-1" style="margin-top:0px; margin-bottom:1rem; color:white;"><?php print$text_presentazione2 ?></h2>
                                    <p class="media__text media_text_custo2 " style="font-size:1.2rem; margin-bottom:13px; margin-top:1px; color:white;"><?php print$text_pre_pagina2  ?></p>
                                    <!-- <p  class="media__text-1" style="margin-top:0px; margin-top:0.2rem !important; font-size:2rem;"><b><?php print$text_presentazione3 ?></b></p> -->
                                </div>
                            </div>
                            <div class="col-sm-2">
                            </div>

                        </div>
                        <div class="row">
                          <div class="col-sm-12" style="text-align: -webkit-center;">
                                <p class="media__text custom_description" style="font-size:1.8rem; margin-top:3px; color:white;"><?php print$text_pre_pagina3  ?></p>
                          </div>

                        </div>
                    </div>
                </div>
            </section>

            <section class="p-t-10 p-b-55 " style="margin-top:4rem;">
                <div class="container">
                  <div class="section-title m-b-100" style="margin-bottom:3px; text-align: center">
                    <h2 class="title-1" style="margin-bottom:6rem;"><?php print $fondatori ?></h2>
                  </div>
                  <div class="row" style="margin-top:3rem;">
                    <div class="col-sm-4 col_fondatori" style="">
                      <img src="system/imgs/federico2.jpg" style="border-radius: 50%; overflow: hidden; max-width: 330px;" alt="image">
                      <div class="" style="text-align: -webkit-center;">
                        <h2 style="margin-top:2rem; color:black">Federico Piana</h2>
                        <p   class="p_fondatori"><?php print $text_fede ?></p>
                      </div>
                      <!-- <div class="" >
                          <h4 style="margin-top:2rem; color:black;"><?php print $qualifiche ?></h4>
                          <p style="font-size:1.2rem"><b>NDT - UNI EN ISO 9712:</b></p>
                          <p style="font-size:1.2rem; height:200px !important;">
                             -UT / ToFD-PAUT (LEVEL 3); <br>

                             -RT (LEVEL 3);<br>

                             -MT (LEVEL 3);<br>

                             -VT (LEVEL 3);<br>

                             -PT (LEVEL 2);<br>

                             -TT (LEVEL 2).
                         </p>

                      </div> -->
                      <!-- <div style="border-bottom:2px solid black;width:70%; margin-top:2rem;"></div> -->
                    </div>
                    <div class="col-sm-4 col_fondatori_custom col_fondatori">
                      <img src="system/imgs/bachisio2.jpg" style="    border-radius: 50%; overflow: hidden; max-width: 330px;" alt="image">
                      <div class="" style="text-align: -webkit-center;">
                        <h2 style="margin-top:2rem; color:black">Bachisio Deidda</h2>
                        <p  class="p_fondatori"><?php print $text_bach ?></p>
                      </div>
                      <!-- <div class="" >
                          <h4 style="margin-top:2rem; color:black;"><?php print $qualifiche ?></h4>
                          <p style="font-size:1.2rem"><b>NDT - UNI EN ISO 9712:</b></p>
                          <p style="font-size:1.2rem; height:200px !important;">
                            -UT / ToFD-PAUT (LEVEL 3);<br>

                              -RT (LEVEL 3);<br>

                              -VT (LEVEL 2);<br>

                              -PT (LEVEL 2);<br>

                              -TT (LEVEL 2).
                         </p>

                      </div> -->
                      <!-- <div style="border-bottom:2px solid black;width:70%; margin-top:2rem;"></div> -->
                    </div>
                    <div class="col-sm-4 col_fondatori_custom col_fondatori">
                      <img src="system/imgs/pierpaolo2.jpg" style="border-radius: 50%; overflow: hidden; max-width: 330px;" alt="image">
                      <div class="" style="text-align: -webkit-center;">
                        <h2 style="margin-top:2rem; color:black">Pierpaolo Virdis</h2>
                        <p class="p_fondatori" style=""><?php print $text_paolo ?></p>
                      </div>
                      <!-- <div class="">
                          <h4 style="margin-top:2rem; color:black;"><?php print $qualifiche ?></h4>
                          <p style="font-size:1.2rem"><b>NDT - UNI EN ISO 9712:</b></p>
                          <p style="font-size:1.2rem;height:200px !important;">
                            -UT / ToFD-PAUT (LEVEL 3);<br>

                              -PWZ AUT V5 System (LEVEL 3);<br>

                              -MT (LEVEL 3);<br>
                              -VT (LEVEL 2);<br>


                              -RT (LEVEL 2);<br>

                              -TT (LEVEL 2);
                         </p>

                      </div> -->
                      <!-- <div style="border-bottom:2px solid black;width:70%; margin-top:2rem;"></div> -->
                    </div>




                  </div>

                </div>
            </section>



                  <!-- END TESTI-->

                  <section class="section p-b-80"style="margin-top:18rem;" id="contatti">
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
