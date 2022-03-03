<?php


$msg="Macroservizi";

$header='
<header id="header" >
    <div class="header header-1 d-none d-lg-block js-header-1">
        <div class="header__bar">
            <div class="wrap wrap--w1790">
                <div class="container-fluid">
                    <div class="header__content">
                        <div class="logo">
                            <a href="index.php">
                                <img src="system/imgs/logo_bianco.ng" class="custom_logo" alt="Tatee" />
                            </a>
                        </div>
                        <div class="header__content-right">
                            <nav class="header-nav-menu">
                                <ul class="menu nav-menu">

                                    <li class="menu-item">
                                        <a href="index.php" style="font-size:1.2rem !important" class="colore_scritte_header">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="presentazione.php?pre=7" style="font-size:1.2rem !important" class="colore_scritte_header">Chi siamo</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <p style="font-size:1.2rem !important;  padding: 26px 22px; color: #222;"class="colore_scritte_header" >Servizi</p>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="servizi.php?srv=2" class="colore_scritte_header" > Controlli non distruttivi</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="servizi.php?srv=3" class="colore_scritte_header"> Ispezioni</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="servizi.php?srv=4"class="colore_scritte_header"> Progettazioni</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="servizi.php?srv=5" class="colore_scritte_header">Lavori in corda</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#contatti" style="font-size:1.2rem !important"  class="colore_scritte_header">Contatti</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile d-block d-lg-none" >
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile__bar-inner" >
                    <a class="logo" href="index.php">
                        <img src="system/imgs/logo_bianco.ng" width="150px;" alt="Tatee" />
                    </a>
                    <button class="hamburger hamburger--slider float-right" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="header-nav-menu-mobile" >
            <div class="container-fluid">
                <ul class="menu nav-menu menu-mobile">
                    <li class="menu-item custom_head_mob">
                          <a href="index.php" style="color:white !important;border-bottom: 1px solid black !important;">Home</a>
                    </li>
                    <li class="menu-item menu-item-has-children custom_head_mob">
                        <a href="project-grid-full.html custom_head_mob" style="color:white !important;border-bottom: 1px solid black !important;">Servizi</a>
                        <ul class="sub-menu">
                            <li class="menu-item custom_head_mob">
                              <a href="servizi.php?srv=2 " style="color:white !important;border-bottom: 1px solid black !important;"> Controlli non distruttivi</a>
                            </li>
                            <li class="menu-item custom_head_mob">
                                <a href="servizi.php?srv=3" style="color:white !important;border-bottom: 1px solid black !important;">Ispezioni</a>
                            </li>
                            <li class="menu-item custom_head_mob">
                                <a href="servizi.php?srv=4" style="color:white !important;border-bottom: 1px solid black !important;"> Progettazioni</a>
                            </li>
                            <li class="menu-item custom_head_mob" style=" border-bottom: 1px solid black !important;">
                                <a href="servizi.php?srv=5" style="color:white !important; border-bottom: 1px solid black !important;">Lavori in corda</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-item custom_head_mob" style=" border-bottom: 1px solid black !important;">
                            <a href="#contatti" style="color:white !important; border-bottom: 1px solid black !important;">Contatti</a>
                    </li>

                    <li class="menu-item custom_head_mob">
                        <a href="presentazione.php?pre=7" style="color:white !important; border-bottom: 1px solid black !important;">Chi siamo</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

';

$footer='
<footer class="footer bg-parallax">
    <div class="bg-overlay bg-overlay--p85"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-col">
                    <div class="widget m-b-25" style="margin-top:-2rem">
                    <a class="logo" href="index.php">
                        <img src="system/imgs/logo_bianco.ng" width="150px;" alt="Tatee" />
                    </a>
                    </div>
                    <div class="widget widget-address">
                        <ul>
                            <li>Address : Via Pedralonga, Santa Maria Navarrese (OG)</li>
                            <li>Email : info.sonicndt@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="footer-col p-l-70 p-md-l-0">
                    <div class="widget widget_pages">
                        <h4 class="widget-title">Link</h4>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#contatti">Contatti</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-col p-l-70 p-md-l-0">
                    <h4 class="widget-title">Social</h4>
                    <div class="widget widget_socials">
                        <ul class="list-social list-social-2">
                            <li class="list-social__item">
                                <a class="ic-fb" href="https://www.facebook.com/SonicNDTengineering/">
                                    <i class="zmdi zmdi-facebook" style="font-size:2.1rem;"></i>
                                </a>
                            </li>
                            <li class="list-social__item">
                                <a class="ic-insta" href="https://www.instagram.com/sonicndt/">
                                    <i class="zmdi zmdi-instagram" style="font-size:2.1rem;"></i>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-col">
                    <div class="widget widget_text">
                        <h4 class="widget-title">copyright</h4>
                        <p>© 2021 . Designed by Vistanet</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

';
$fondatori="Fondatori";
$text_fede="<b>Ingegnere Civile, Specialista NDT</b>, con esperienze lavorative in Italia e Kazakistan, a  onshore e offshore.";
$qualifiche="Qualifiche:";
$text_bach="<b>Ingegnere Civile, Specialista CND</b>, con esperienze lavorative in Italia e Kazakistan.";
$text_paolo="
<b>Specialista NDT</b>, con esperienze lavorative in Italia, Bulgaria, Messico, Africa e Kazakistan,  a  onshore e offshore.";

$title_serv="I nostri servizi";
$text_button="Scopri di più";

$srv_offerti="Servizi Offerti";
$txt_pre="Il nostro impegno per il<br> raggiungimento dell'eccellenza<br>si traduce in un progetto di <br>successo per noi e per i nostri clienti.";
$txt_pre_2="Fare sempre meglio e stare sempre <br> un passo avanti: essere competitivi a <br>livello globale è
la nostra priorità.";
$presentazione="chi siamo";
$servizio1="Controlli Non Distruttivi";
$text_serv1="
Questi servizi racchiudono una serie di procedimenti e tecniche volti alla valutazione dell’integrità dei materiali senza che gli stessi subiscano alterarazioni o siano distrutti o danneggiati.";
$servizio2="Ispezioni";
$text_serv2="
Offriamo ai nostri clienti controllli di qualità attraverso la professionalità del nostro team di ispettori di saldatura ,
per garantire conformità alle norme di sicurezza
e risultati che soddisfino gli standard di qualità e sicurezza.";
$servizio3="Progettazioni";
$text_serv3="Siamo un team di ingegneri specializzati in costruzioni residenziali e offriamo consulenza per una vasta gamma di servizi, dalla consulenza al rendering alla supervisione di progetti.";

$novita="Novità";
$servizio4="Lavori In Corda";
$text_serv4="La partnership con Lavori in corda, dal 2020 completa il nostro ventaglio di servizi. <br>Attraverso l’utilizzo di funi e corde interveniamo su qualunque tipo di struttura industriale o civile anche in situazioni di estrema urgenza e <b>mettendo al vostro servizio tecnici specializzati</b> per ogni area di intervento.<br>
Nel settore industriale eseguiamo controlli non distruttivi e controlli coating con ispettori qualificati NDT e NACE level 3.<br>
Effettuiamo manutenzioni di ponti, dighe, condotte forzate, off-shore, pale eoliche e ciminiere e tra le altre cose, ci occupiamo di  trattamenti del settore metalmeccanico, per la protezione anticorrosiva delle strutture metalliche
";
$contattaci="Contattaci";
$progetti="Ultimi progetti";
$clienti="I nostri clienti";
$indirizzo="Indirizzo";
$Phone="Cellulare";
$text_pic_desc="LA TUA SCELTA SICURA";
$piccola_desc="Fondata nel 2016, la Società <b>Sonic NDT & Engineering s.r.l.</b> si è fatta largo nel panorama
internazionale per l’esclusività dei servizi offerti.
Un’esclusività che ci ha portati lontano, letteralmente dall’altra parte del mondo, permettendoci di
lasciare il segno per la qualità che caratterizza ogni nostra lavorazione.
Il concetto di qualità può sembrare semplice, ma se lo interpreterai con la giusta attenzione
scoprirai che non lo è.
Soprattutto quando sei determinato ad abbracciarne ogni sfumatura per fare la differenza.";
function get_serv($nome)
{
  switch ($nome) {
    // case '1':
    //
    // $text[0]["img"]="system/imgs/cantiere.webp";
    // $text[0]["srv"]="chi siamo";
    // $text[0]["descrizione"]="descr";
    //
    //
    //   break;
    case '2':
      $text[0]["img"]="system/imgs/ispezion2_fine.jpg";
      $text[0]["srv"]="Controlli non distruttivi";
      $text[0]["descrizione"]="descr";

      break;

    case '3':

      $text[0]["img"]="system/imgs/ispezione_fine.jpg";
      $text[0]["srv"]="Ispezioni";
      $text[0]["descrizione"]="descr";


      break;

    case '4':

      $text[0]["img"]="system/imgs/meet_fine.jpg";
      $text[0]["srv"]="Progettazioni";
      $text[0]["descrizione"]="descr";


      break;

    case '5':

      $text[0]["img"]="system/imgs/custom_corda_sfondo.png";
      $text[0]["srv"]="Lavori in corda";
      $text[0]["descrizione"]="descr";


      break;


  }
    return $text;
}
function get_microser($srv)
{
    switch ($srv)
    {

      case '2':

      $text[0]["img"][0]="system/imgs/oil1.jpg";
      $text[0]["img"][1]="system/imgs/oil2.jpg";
      $text[0]["img"][2]="system/imgs/oil3.jpg";
      $text[0]["img"][3]="system/imgs/gas_base.jpg";


      $text[0]["titolo"]="Oli & gas";
      $text[0]["desc"]="Nel settore petrolifero e gas garantiamo la piena integrità e sicurezza nel rispetto di tutte le normative governative sulla protezione ambientale. L’esecuzione di controlli non distruttivi consente di verificare l’integrità delle condutture, di prevenirne la corrosione, di rilevare eventuali perdite.";

      $text[1]["img"][0]="system/imgs/nuc1.jpg";
      $text[1]["img"][1]="system/imgs/ncu2.jpg";
      $text[1]["img"][2]="system/imgs/nuc3.jpg";
      $text[1]["img"][3]="system/imgs/nucleare_base.jpg";

      $text[1]["titolo"]="Nucleare";
      $text[1]["desc"]=" Siamo leader nella  fornitura di servizi finalizzati ad un funzionamento sicuro e produttivo degli impianti nucleari e lavoriamo per garantire integrità negli impianti  e il pieno rispetto delle normative. I nostri tecnici e ingegneri NDE seguono rigorose pratiche di sicurezza e rispettano gli standard più elevati del settore, operando in ogni parte del  mondo. ";

      $text[2]["img"][0]="system/imgs/nav1.jpg";
      $text[2]["img"][1]="system/imgs/nav2.jpg";
      $text[2]["img"][2]="system/imgs/nav3.jpg";
      $text[2]["img"][3]="system/imgs/navale_base.jpg";

      $text[2]["titolo"]="Navale";
      $text[2]["desc"]="Interveniamo in molti settori dell'industria navale per garantire piena sicurezza e integrità strutturale di navi e navi cisterna. Individuiamo eventuali discontinuità superficiali o interne, misurando lo spessore dei materiali, determinando la posizione e la dimensione di eventuali difetti strutturali per garantire massima sicurezza e soddisfazione ai nostri clienti.";

      $text[3]["img"][0]="system/imgs/civ1.jpg";
      $text[3]["img"][1]="system/imgs/civ2.jpg";
      $text[3]["img"][2]="system/imgs/civ3.jpg";
      $text[3]["img"][3]="system/imgs/civile_base.jpg";
      $text[3]["titolo"]="Civile";
      $text[3]["desc"]="Anche in ambito civile applichiamo le nostre tecniche di indagine non invasive allo scopo di valutare l’integrità di un materiale o di una struttura e di evidenziarne eventuali disomogeneità e discontinuità, il tutto senza arrecare danno o comprometterne la funzionalità. Lavoriamo con passione per la sicurezza del manufatto e delle persone che lì vivono e lavorano. Monitoriamo lo stato di salute di un’opera individuando eventuali difetti e anomalie come rotture, corrosioni, erosioni, usure e danni termici assicurando un intervento tempestivo e di qualità.";



      $text[9]["i"]=4;



      break;

      case '4':

      // $text[0]["img"]="system/imgs/Progetti_preliminari.png";
      // $text[0]["titolo"]="Progetti preliminari";
      // $text[0]["desc"]="Preliminary plans;";

      $text[0]["img"][0]="system/imgs/pia1.jpg";
      $text[0]["img"][1]="system/imgs/pia2.jpg";
      $text[0]["img"][2]="system/imgs/pia3.jpg";
      $text[0]["img"][3]="system/imgs/esecutivi_base.jpg";

      $text[0]["titolo"]="Piani esecutivi";
      $text[0]["desc"]="Ci occupiamo della stesura delle relazioni generali  che descrivono i contenuti del progetto attraverso
disegni architettonici, strutturali, impiantistico-tecnologici esecutivi. Definiamo il Computo Metrico Estimativo, il costo imprenditoriale e il costo complementare. Ci occupiamo di ogni fase del progetto sulla base del progetto definitivo a partire dalla relazione generale, passando attraverso l’elaborazione di piani di sicurezza e coordinamento, crono programma dei lavori e piani di manutenzione dell’opera nel suo complesso e nelle parti di cui è composto.";


      $text[1]["img"][0]="system/imgs/arc1.jpg";
      $text[1]["img"][1]="system/imgs/arc2.jpg";
      $text[1]["img"][2]="system/imgs/arc3.jpg";
      $text[1]["img"][3]="system/imgs/architte_base.jpg";

      $text[1]["titolo"]="Piani architettonici";
      $text[1]["desc"]="Ci occupiamo di tutte le fasi della progettazione architettonica, definendo la finalità d’uso della struttura futura e determinandone le caratteristiche finali. Progettiamo non solo l’aspetto esterno dell'edificio ma anche elementi di design interno, finiture e compatibilità con l’ambiente su cui sorge la struttura. Analizziamo nel dettaglio tutti gli elementi di una costruzione partendo dalle condizioni specifiche del terreno, le sue caratteristiche topografiche e le condizioni dell'ambiente naturale in cui è immersa.";


      $text[2]["img"][0]="system/imgs/con1.jpg";
      $text[2]["img"][1]="system/imgs/con2.jpg";
      $text[2]["img"][2]="system/imgs/con3.jpg";
      $text[2]["img"][3]="system/imgs/consulenza_base.jpg";

      $text[2]["img"][1]="system/imgs/consulenze2.jpg";
      $text[2]["img"][2]="system/imgs/consulenze3.jpg";


      $text[2]["titolo"]="Consulenze tecniche";
      $text[2]["desc"]="Offriamo consulenza volta a fornire un parere tecnico ed esperto al cliente come la ricerca del valore di mercato di un terreno o di un fabbricato, l’individuazione delle cause di eventuali problematiche strutturali quali infiltrazioni d'acqua all'interno di un appartamento. Svolgiamo rilievi  topografici dei fabbricati e dei terreni, rettifiche dei confini,
      stima del valore di fabbricati e di terreni.";

      $text[3]["img"][0]="system/imgs/sup1.jpg";
      $text[3]["img"][1]="system/imgs/sup2.jpg";
      $text[3]["img"][2]="system/imgs/sup3.jpg";
      $text[3]["img"][3]="system/imgs/supervisione_base.jpg";
      $text[3]["titolo"]="Supervisione del progetto";
      $text[3]["desc"]=" Monitoriamo la qualità dei materiali utilizzati e dei componenti. Identifichiamo eventuali violazioni normative che pregiudicherebbero un uso sicuro e conforme della struttura finita. La nostra attività di supervisione progettuale si articola in una revisione sia dei progetti esecutivi e costruttivi, sia in una completa revisione progettuale degli interventi a seguito di eventuali cambiamenti strategici, funzionali e tecnici intervenuti in fase di costruzione";

      $text[4]["img"][0]="system/imgs/3d1.jpg";
      $text[4]["img"][1]="system/imgs/3d2.jpg";
      $text[4]["img"][2]="system/imgs/3d3.jpg";
      $text[4]["img"][3]="system/imgs/3d_base.jpg";
      $text[4]["titolo"]="Rappresentazione architettonica 3D ";
      $text[4]["desc"]="Creiamo immagini bidimensionali e tridimensionali del progetto architettonico proposto, con l’obiettivo di riprodurre in modo realistico l'aspetto di un'area o di un edificio prima della costruzione, rappresentando con accuratezza l'idea progettuale e l’aspetto finale atteso. La modellazione 3D ci consente di ricostruire il progetto come nella realtà, valutarne le proporzioni e le varie grandezze e creare una rappresentazione grafica delle esigenze o richieste dei clienti.";

      $text[9]["i"]=5;

      break;
      case '3':

      $text[0]["img"][0]="system/imgs/quality1.jpg";
      $text[0]["img"][1]="system/imgs/quality2.jpg";
      $text[0]["img"][2]="system/imgs/quality3.jpg";
      $text[0]["img"][3]="system/imgs/ispezioni_base2.jpg";

      $text[1]["img"][0]="system/imgs/saldatore1.jpg";
      $text[1]["img"][1]="system/imgs/saldatori2.jpg";
      $text[1]["img"][2]="system/imgs/saldatori1.jpg";
      $text[1]["img"][3]="system/imgs/ispezioni_base1.jpg";

      $text[0]["titolo"]="Controllo di qualità";
      $text[0]["desc"]="Disponiamo di esperti qualificati, strumenti all’avanguardia e un solido programma finalizzato ai controlli di qualità delle saldature. Il connubio tra questi elementi ci consente di effettuare una valutazione  completa dei requisiti e dei criteri di accettazione delle saldature permettendoci di ottenere risultati che lasciano ogni cliente pienamente soddisfatto. I riconoscimenti dei nostri clienti sono lo stimolo per continuare a dare il massimo ovunque, nel minor tempo possibile e a prezzi competitivi.";



      $text[1]["titolo"]="Ispezione di saldatura";
      $text[1]["desc"]="I nostri Ispettori di saldatura qualificati svolgono attività di supervisione e sorveglianza alle attività di saldatura e alle attività ad esse correlate, verificando nel dettaglio la correttezza delle attività ispettive in fase di pre-fabbricazione, costruzione di nuovi componenti, strutture ed impianti e durante le fasi di manutenzione o riparazione. Controlliamo che tutti gli standard di sicurezza e qualità siano rispettati e a norma di legge.";



      $text[9]["i"]=2;

      break;



    }


    return $text;
}
function get_desc($srv)
{
    switch ($srv) {
      case '2':

      $text='

           <section class="p-t-10 p-b-55 spazio_card" style="background-color: black; ">
               <div class="custom_container">
                   <div class="media-about">
                       <div class="row reverse">
                         <div class="col-sm-5 custom_col">
                         <div class="media__img">
                             <img src="system/imgs/ispezioni_card_finish.jpg"  tyle="padding-left: 0px;" alt="About Us">
                         </div>
                         </div>

                           <div class="col-sm-5">
                               <div class="media__body">
                                   <h2 class="title-1" style="color:white;">Siamo competitivi a livello globale</h2>
                                   <p class=" custom_text_2" style="font-size:1.2rem; color:white;">Condividere gli obiettivi del cliente significa mettere in atto ogni strategia utile al conseguimento degli stessi in maniera veloce, puntuale e competitiva. Durante la nostra corsa verso l\'obiettivo e in tutti gli aspetti dei nostri controlli di qualità, siamo orgogliosi di poter garantire l\'eccellenza. Grazie al connubio perfetto creato da un team coeso e da strumentazioni innovative e all\'avanguardia siamo fieri di poter dire di aver dato vita a una realtà che ci ha permesso di affermarci come i principali attori nel settore dei controlli non distruttivi.</p>

                               </div>
                           </div>

                       </div>
                   </div>
               </div>
           </section>


      ';

        break;
      case '3':

      $text='

             <section class="p-t-10 p-b-55 spazio_card" style="background-color: black; ">
                 <div class="custom_container">
                     <div class="media-about">
                         <div class="row reverse">
                           <div class="col-sm-5 custom_col">
                           <div class="media__img">
                               <img src="system/imgs/ncu2.jpg" style="padding-left: 0px;" alt="About Us">
                           </div>
                           </div>

                             <div class="col-sm-5">
                                 <div class="media__body">

                                     <h2 class="title-1" style="color:white;">Nell\'attenzione ai dettagli una garanzia di sicurezza</h2>
                                     <p class=" custom_text_2" style="font-size:1.2rem; color:white;">Il nostro team di ispettori qualificati garantisce una scrupolosa analisi e un efficace giudizio della qualità ottenuta. Grazie alla professionalità del nostro team il nostro obiettivo d’eccellenza viene sempre raggiunto. Un’eccellenza che ci rende Leader nel panorama internazionale e che contribuisce a costruire rapporti di estrema fiducia con i nostri clienti che a noi si affidano sapendo di aver scelto il meglio.</p>

                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </section>
      ';

        break;

      case '4':

        $text='



                       <section class="p-t-10 p-b-55 spazio_card" style="background-color: black; ">
                           <div class="custom_container">
                               <div class="media-about">
                                   <div class="row reverse">
                                     <div class="col-sm-5 custom_col">
                                     <div class="media__img">
                                         <img src="system/imgs/con1.jpg" style="padding-left: 0px;"alt="About Us">
                                     </div>
                                     </div>

                                       <div class="col-sm-5">
                                           <div class="media__body">
                                               <h2 class="title-1" style="color:white;">Abbracciamo il concetto di eccellenza in tutte le sue sfumature</h2>
                                               <p class=" custom_text_2" style="font-size:1.2rem; color:white;">Tra i membri del nostro team possiamo vantare la presenza di ingegneri specializzati in costruzioni residenziali  che, offrendo la loro esperienza, assicurano che in ogni  progetto di costruzione, ricostruzione e ampliamento siano garantiti la sicurezza e l\'integrita della forma al cento percento.
                  Lavoriamo con professionalita ed estrema puntualita per far sì che nessun aspetto chiave del progetto sia trascurato.</p>

                                           </div>
                                       </div>

                                   </div>
                               </div>
                           </div>
                       </section>


        ';


        break;

    }

    return $text;
}

$tecniche_utili_proge='

<section class="section bg-pattern-01 p-t-100 p-b-25" style="background: url(system/imgs/schermo_sfondo.jpg) center center/cover no-repeat fixed; margin-top:8rem; margin-bottom:12rem;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="section-title section-title--light text-left p-t-15">

                                <h2 class="title-1 custom_titolo_liste">Tecniche utilizzate</h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-9">
                            <div class="row row_list_tecniche_pro" style="">

                                <div class="col-sm-4 col_custom_tec">

                                          <p class="custom_list_p ">Preliminary plans</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p">  Executive plans</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                      <p class="custom_list_p" >Architectural plans</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p custom_list_p_ma"> Technical consultations</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p custom_list_p_ma"> Project supervision</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p custom_list_p_ma">  3D Architectural rendering</p>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

';

$tecniche_utili='
<section class="section bg-pattern-01 p-t-100 p-b-25" style="background: url(system/imgs/schermo_sfondo.jpg) center center/cover no-repeat fixed; margin-top:8rem; margin-bottom:12rem;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="section-title section-title--light text-left p-t-15">

                                <h2 class="title-1 custom_titolo_liste">Tecniche utilizzate</h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-9">
                            <div class="row row_list_tecniche" style="">
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p">  VT Visual Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                      <p class="custom_list_p" >PT Dye Penetrant Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p">  MT Magnetic Particle Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p custom_list_p_ma2">   RT Radiographic Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p custom_list_p_ma2">  UT Ultrasonic Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                          <p class="custom_list_p custom_list_p_ma2">TOFD Time of Flight Diffraction  UT</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                      <p class="custom_list_p custom_list_p_ma2">  AUT Automatic  UT (Pipe Wizard)</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p custom_list_p_ma2">PAUT Pashed Array UT</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p custom_list_p_ma2">PAUT Pashed Array UT</p>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

';

$tecniche_utili_prog='

<section class="section bg-pattern-01 p-t-100 p-b-25" style="background: url(system/imgs/schermo_sfondo.jpg) center center/cover no-repeat fixed; margin-top:8rem; margin-bottom:12rem;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-3">
                            <div class="section-title section-title--light text-left p-t-15">

                                <h2 class="title-1 custom_titolo_liste">Tecniche utilizzate</h2>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-9">
                            <div class="row row_list_tecniche" style="">
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p">  VT Visual Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                      <p class="custom_list_p" >PT Dye Penetrant Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p">  MT Magnetic Particle Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p custom_list_p_ma">   RT Radiographic Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p custom_list_p_ma">  UT Ultrasonic Testing</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                          <p class="custom_list_p custom_list_p_ma">TOFD Time of Flight Diffraction  UT</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                      <p class="custom_list_p custom_list_p_ma">  AUT Automatic  UT (Pipe Wizard)</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                       <p class="custom_list_p custom_list_p_ma">PAUT Pashed Array UT</p>
                                    </p>
                                </div>
                                <div class="col-sm-4 col_custom_tec">

                                         <p class="custom_list_p custom_list_p_ma">PAUT Pashed Array UT</p>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

';

function get_descrizione($srv)
{
   switch ($srv) {

     case '5':
     $txt_desc='

     <section class="p-t-120" style="margin-top:-7rem;">
                     <div class="container">
                         <div class="media-about-2 p-b-80">
                             <div class="media__img">
                                 <img src="system/imgs/logo_corda_lav.jpg" alt="About Us">
                             </div>
                             <div class="media__body">
                                 <p class="media__text " style="font-size:1.4rem; margin-top:1rem !important;"> Una <b>nuova stimolante</b> sfida che abbiamo deciso di abbracciare, specializzandoci per aggiungere un nuovo tassello alla nostra realtà e continuare a garantirvi <b>l’eccellenza e l’affidabilità</b> che ci contraddistinguono in tutti i servizi che storicamente offriamo.</p>

                             </div>
                         </div>

                     </div>
                 </section>

     <section class="p-t-10 p-b-55 custom_col_lav" style="background:black; padding-top:4rem; padding-bottom:4rem;">
         <div class="">
             <div class="media-about">
                 <div class="row">
                     <div class="col-lg-5 offset-lg-2">
                         <div class="media__body">
                             <h5 class="title-sub" style="color:white;">Novità</h5>
                             <h2 class="title-1" style="color:white;">Ovunque tu sia, troveremo il modo per raggiungerti</h2>
                             <p class="media__text text_corda" style="font-size: 1.2rem; color:white;">La nostra <b>partnership</b> con la società Lavori in corda ci permette di fornire i nostri servizi da una prospettiva del tutto nuovo e attraverso l’ausilio di un metodo di lavoro <b>vantaggioso</b> sia in termini di tempo che di <b>costi e benefici</b>.</p>

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

     <section class="p-t-10 p-b-55 custom_col_lav" style="margin-top:5rem;">
         <div class="">
             <div class="media-about">
                 <div class="row reverse">
                 <div class="col-lg-5">
                     <div class="media__img js-line">
                         <img src="system/imgs/lavori_corda_card.jpg" class="custom_image_corda">
                         <span class="line"></span>
                         <span class="line line-bottom"></span>
                         <div class="media__img-inner wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                             <!-- <span class="number">28</span> -->
                             <!-- <span class="desc">years of experience</span> -->
                         </div>
                     </div>
                 </div>
                     <div class="col-lg-5">
                         <div class="media__body">
                             <h5 class="title-sub">Novità</h5>

                             <h2 class="title-1">Perché sceglierci?</h2>
                             <p class="media__text custom_text_card" style="font-size: 1.2rem;">L’accesso e il posizionamento tramite funi ci consente di raggiungere qualunque sito di intervento senza limiti imposti dalle opere provvisionali.

Siamo quindi in grado di operare <b>rapidamente</b>, anche in situazioni di estrema <b>urgenza</b>, mettendo al vostro servizio tecnici specializzati per ogni area di intervento.</p>

                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>

     ';

     break;

   }
   return $txt_desc;
}
$text_presentazione="Sonic NDT & Engineering s.r.l";
$sotto_titolo_pres="PUNTUALI, PROFESSIONALI, COMPETITIVI.
LA VERSATILITA’ E’ IL NOSTRO MESTIERE DA
SEMPRE.";
$text_pre_pagina="Fondata nel 2016, la Società Sonic NDT & Engineering s.r.l. si è fatta largo nel panorama
internazionale per l’esclusività dei servizi offerti.
Un’esclusività che ci ha portati lontano, letteralmente dall’altra parte del mondo, permettendoci di
lasciare il segno per la qualità che caratterizza ogni nostra lavorazione";
$text_presentazione2="Come ci distinguiamo?";
$text_pre_pagina2="
● Per le nostre lavorazioni, svolte con puntualità e precisione.<br>
● Il nostro team di professionisti, qualificati e selezionati per il loro expertise nel settore.<br>
● Perché ci impegniamo anima e corpo nella realizzazione del progetto che con fiducia ci è stato commissionato.<br>
● Grazie  alla determinazione che mettiamo in campo in ogni attività che veniamo chiamati a svolgere affinché ai nostri clienti sia sempre garantita l’eccellenza.

";
$text_pre_pagina3="<b>Al termine delle nostre attività amiamo portare con noi un bagaglio di esperienze sempre più ricco e nuove consapevolezze.</b>";
// $text_pre_pagina3="";
 ?>
