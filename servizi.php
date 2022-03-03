<!DOCTYPE html>
<?php
  include_once ('./system/user_default.php');
 ?>
<html lang="en">
<?php
  $srv=$_GET["srv"];
  $txt_servizio=get_serv($srv);
  if($srv==2 || $srv==4 || $srv==3)
  {
    $piccolo_desc=get_desc($srv);
    $micro_serv=get_microser($srv);
  }
  else
  {
    $text_servizio_completa=get_descrizione($srv);
  }

 ?>
<head>

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
      .custom_forza
      {
        margin-top:-1rem;
         margin-bottom:6rem;
      }
      .custom_list
      {
        margin-bottom: 8rem;

      }
      .custom_list_p
      {
        font-weight: bold;
        font-size:1.2rem !important;
        color: white;

      }
      .page-line__inner
      {
          border:none !important;
      }
      .rev_slider_wrapper--p80
      {
        padding: 0px;
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
      .rev_slider
      {
        max-height: 680px !important;
      }
      .altezza_icone
      {
       height: 160px;
      }
      .altezza_card
      {
        height: 500px;
      }
      .custom_titolo_liste
      {
        margin-top: -1rem;
        border-right: 1px solid white;
        height: 98px;
      }
      .tp-bullets
      {
        display: none;
      }
      .media__text
      {
        margin-top: 5rem;
      }
      .custom_logo
      {
        height: 94px;
        padding: 1rem;
      }
      .tp-rightarrow
      {
        display: none;
      }
      .tp-leftarrow
      {
        display: none;
      }
      .furgone_custom_image
      {
        height: 337px;
      }
      .custom_ispezioni
      {
        height: 320px;
      }
      .custom_list_p_ma
      {
        margin-top:1rem;
      }
      .custom_list_p_ma2
      {
        margin-top:1.9rem !important;
      }
      .row_list_tecniche
      {
        margin-top: -2rem;
      }
      .row_list_tecniche_pro
      {
        margin-top: 0.8rem;
      }
      .footer
      {
        background-image:none;
        padding-bottom: 67px !important;
      }
      .spazio_card
      {
        padding-top:8rem;
        padding-bottom:8rem;
        margin-top:8rem;
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
       .header__bar
       {
         z-index: 999;
         background: none;
       }
       .header--fixed
       {
         background: black !important;
       }
       .colore_scritte_header
       {
         color:white !important;
       }
       .div_sopra
       {
        position:absolute;
        top:0;
        left:-2;
        border-radius: 2rem;
        background:black;
        max-width: 438px;
        padding-left:2rem;
        padding-right:2rem;
        padding-bottom:2rem;
       }
       .spazio_srv
       {
         margin-top:4rem;
         padding-top:80px;
         padding-bottom:70px;
       }
       .custom_container
       {

         padding-left: 1rem;
         margin-right: 0px !important;
         margin-left: 0px !important;
       }
       .custom_col2
       {
         padding-left: 0px !important;
       }
       .custom_col_lav
       {
         margin-top: 10rem !important;
       }

      @media only screen and (max-width: 700px)
      {
        .custom_head_mob
        {
          background: black;
          border-bottom: 1px solid black !important;
        }
        .custom_col_lav
        {
          margin-top: 0rem;
        }

        /* .reverse {
         flex-direction: row-reverse;
        } */
        .reverse {
          flex-direction: column-reverse;
        }
        .custom_forza
        {
          margin-top: -8rem !important;
        }
        .grandezza_titolo
        {
          font-size: 35px !important
        }
        .custom_text_card
        {
          margin-bottom: 0rem !important;
        }
        .spazio_titolo
        {
          margin-top: 2rem;
        }
        .spazio_card
        {
          padding-top:3rem;
          padding-bottom:3rem;
          margin-top:3rem;
        }
        .spazio_srv
        {
          margin-top:4rem;
          padding-top:50px;
          padding-bottom:50px;
        }
        .div_sopra
        {
          /* height: 100px; */
          margin-right: 3rem;
          margin-left: 1rem;
          margin-top: -19rem;
          height: 475px;
          overflow: hidden;
        }
        .div_sotto
        {
          height: 599px;
          margin-right: 1rem;
          margin-left: 1rem;
          background-image: url("system/imgs/nave_mobile.jpg");
        }
        .custom_list
        {
          margin-bottom: 0rem;
        }
        .custom_list_p
        {
          margin-top: 2rem;
        }
        .row_list_tecniche
        {
          margin-top: 0rem;
        }
        .custom_titolo_liste
        {
          border-right: none;
          height: auto !important;
        }
        .custom_card_princ
        {
          padding-bottom: 1rem !important;
        }
        .titolo_card
        {
          margin-top: 2rem;
          text-align-last: center;
        }
        .row_list_tecniche_pro
        {
          margin-top: -3.1rem;
        }
        .spazio_card
        {
          background-size: inherit !important;
        }
        .custom_image_corda
        {
          margin-bottom: 2rem;
        }
        .text_corda
        {
          margin-bottom: 0rem !important;
        }
        .custom_col
        {
          padding-left: 0px !important;
        }
        .defaultimg
        {
        <?php print $style ?>
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
        <main id="main" data-srv="<?php print $srv ?>">
            <!-- PAGE LINE-->
            <div class="page-line" >
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


            <!-- <section class="p-t-60 p-b-55 ">
                <div class="container">


                    <div class="row no-gutters" style="justify-content:center;"> -->


                      <?php

                        print  $piccolo_desc;
                       ?>



<!--
                    </div>
                </div>
            </section> -->


            <?php if($srv!='5')
            {
              ?>

              <div class="row" style="margin-top:6rem;">

                <div class="col-sm-12" style="text-align:center;">

                  <h2 style="color:black;"> Le nostre aree d'intervento</h2>
                </div>

              </div>
              <?php
            }

        for ($i=0; $i <$micro_serv[9]["i"] ; $i++)
        {
          $name_slider="slider".$i;
          $link_slider="#slider".$i;
         ?>

        <!-- <section class="section p-b-80 spazio_srv "style="background: gainsboro; padding-top: 5rem;" >
          <div class="container">
            <div class="row ">

              <div class="col-sm-12" style="text-align:center; margin-bottom:3rem;">
                <h1><?php print $micro_serv[$i]["titolo"] ?></h1>
              </div>

            </div>
            <div class="row custom_imag_sovra" style="place-content: center; padding-bottom: 5rem; padding-top: 5rem;  background-color: black;">
              <div class="col-sm-8" >
                <div class="row">
                  <div class="col-sm-6">
                    <img src="<?php print $micro_serv[$i]["img"] ?>" class="custom_logo_card image_sotto">

                  </div>
                  <div class="col-sm-6">
                    <h3 class="title titolo_card">
                        <p style="font-size:1.5rem; color:white;"><?php print $micro_serv[$i]["titolo"] ?></p>
                    </h3>
                      <br>
                    <p style="color:white; font-size:1.3rem;"><?php print $micro_serv[$i]["desc"] ?></p>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </section> -->
        <?php
        if ($i % 2 == 0)
        {
          ?>

          <section class="p-t-10 p-b-55 spazio_card" style="background-image:url('<?php print $micro_serv[$i]['img'][3] ?>') ; background-size: cover;">
              <div class="custom_container">
                  <div class="media-about">
                      <div class="row"  >
                          <div class="col-sm-4 offset-sm-3">
                              <div class="media__body">
                                  <!-- <h5 class="title-sub" ><?php print $novita ?></h5> -->
                                  <h2 class="title-1 spazio_titolo grandezza_titolo" style="border-bottom: 3px solid white; color:white;"><?php print $micro_serv[$i]["titolo"] ?></h2>
                                  <p class="media__text " style="font-size: 1.4rem; color:white;"><?php print $micro_serv[$i]["desc"] ?></p>
                              </div>
                          </div>
                          <div class="col-sm-5 custom_col">

                            <div id="<?php print $name_slider ?>" class="carousel slide" data-ride="carousel" >
                              <div class="carousel-inner">
                                <div class="carousel-item active" style="height: 100%;">
                                  <img class="d-block w-100" src="<?php print $micro_serv[$i]["img"][0]?>" alt="First slide">
                                </div>
                                <div class="carousel-item" style="height: 100%;">
                                  <img class="d-block w-100" src="<?php print $micro_serv[$i]["img"][1] ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="height: 100%;">
                                  <img class="d-block w-100" src="<?php print $micro_serv[$i]["img"][2] ?>" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="<?php print $link_slider ?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="<?php print $link_slider ?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                              <!-- <div class="media__img js-line">
                                  <img src="<?php print $micro_serv[$i]["img"] ?>" class="custom_image_corda">
                                  <span class="line"></span>
                                  <span class="line line-bottom"></span>
                                  <div class="media__img-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                  </div>
                              </div> -->
                          </div>
                      </div>
                  </div>
              </div>
          </section>
        <?php
        }
          else
        {
          ?>

          <section class="p-t-10 p-b-55 spazio_card" style="background-image:url('<?php print $micro_serv[$i]['img'][3] ?>') ;  background-size: cover; ">
              <div class="custom_container">
                  <div class="media-about">
                      <div class="row reverse">
                        <div class="col-sm-5 custom_col2">
                            <!-- <div class="media__img js-line">
                                <img src="<?php print $micro_serv[$i]["img"] ?>" class="custom_image_corda">
                                <span class="line"></span>
                                <span class="line line-bottom"></span>
                                <div class="media__img-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                </div>
                            </div> -->
                            <div id="<?php print $name_slider ?>" class="carousel slide" data-ride="carousel" >
                              <div class="carousel-inner">
                                <div class="carousel-item active" style="height: 100%;">
                                  <img class="d-block w-100" src="<?php print $micro_serv[$i]["img"][0]?>" alt="First slide">
                                </div>
                                <div class="carousel-item" style="height: 100%;">
                                  <img class="d-block w-100" src="<?php print $micro_serv[$i]["img"][1] ?>" alt="Second slide">
                                </div>
                                <div class="carousel-item" style="height: 100%;">
                                  <img class="d-block w-100" src="<?php print $micro_serv[$i]["img"][2] ?>" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="<?php print $link_slider ?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="<?php print $link_slider ?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </div>

                          <div class="col-sm-5">
                              <div class="media__body">
                                  <!-- <h5 class="title-sub" ><?php print $novita ?></h5> -->
                                  <h2 class="title-1 spazio_titolo grandezza_titolo" style="border-bottom: 3px solid white; color:white;"><?php print $micro_serv[$i]["titolo"] ?></h2>
                                  <p class="media__text" style="font-size: 1.4rem; color:white;"><?php print $micro_serv[$i]["desc"] ?></p>
                                  <!-- <a class="au-btn au-btn--arrow" href="servizi.php?srv=5"><?php print $text_button ?> -->
                                      <!-- <i class="zmdi zmdi-arrow-right ic-arrow"></i> -->
                                  <!-- </a> -->
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </section>

          <?php
        }

         ?>


        <?php
          }
         ?>
         <?php print $text_servizio_completa ?>
         <?php  if($srv==="2")
                 {
                   print $tecniche_utili;
                 }

                 if($srv=="4")
                 {
                   print $tecniche_utili_proge;
                 }


          ?>


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
      <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
      var srv=$("#main").attr("data-srv");
      if(srv=="5")
      {
        var isMobile = false; //initiate as false
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
          || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) isMobile = true;
        if (isMobile) {

          // $("#img_corda").attr("src","system/imgs/cavo_finale_4.jpg");

          console.log($(".img_corda_custom_pho").attr("src","system/imgs/cavo_finale_4.jpg"));
        }
      }
    </script>
    <!-- Jquery JS-->

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
    <script src="system/routines/js/index.js"></script>
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
