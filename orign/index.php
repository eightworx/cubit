<?php
if(isset($_POST['submit'])){
    $to = "alexander@stroemme.net"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Melding fra Cubit";

    $headers = "Fra:" . $from;
    $headers2 = "Til:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Takk din kontaktinformasjon er nå mottat " . $first_name . ", vi vil ta kontakt med deg fortløpende.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cubit</title>
    <meta name="keywords" content="Et smartere tilsyn med Cubit" />
    <meta name="author" content="Cubit AS" />
    <link rel="shortcut icon" href="img/favicon/fav.png">
    <link rel="stylesheet" href="css/cubit.css">
  </head>

  <body>
    <nav class="navbar navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top">
      <div class="container">
        <a href="#">
          <div style="text-align: center"><img style="padding-top:20px" src="img/logo.png" height="15%" width="15%"></div>
          <span class="sr-only">Cubit</span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
        </div>
              <div id="particles-js"></div>
      </div>
    </div>
    </nav>


    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
        <h1 class="display-3">Cubit, et smartere tilsyn.</h1>
        <h2 class="m-b-3">Cubit har laget et nytt tilsynssystem for nettselskaper sammen med Hafslund DLE. Send oss din epost eller telefonnummer for demonstrasjon og tidlig tilgang til en ny tilsynshverdag</h2>
        <a class="btn btn-secondary-outline m-b-1" href="#em" role="button">Scroll ned for å lese mer...</a>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span></a></li>
        </ul>
      </div>
    </header>
    <section class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">Cubits tilsynløsning er skreddersydd for eltilsyn</h3>
        <p class="lead wp wp-2">Bygget med brukeropplevelse i sentrum, har vi sørget for å lage en applikasjon som alle kan bruke.</p>
        <img src="img/mock.png" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section>
    <section class="section-features text-xs-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-user display-1"></span>
                <h4 class="card-title">UX</h4>
                <h6 class="card-subtitle text-muted">Brukeropplevelse</h6>
                <p class="card-text">Cubit er utviklet sammen med de som jobber med tilsyn for å sørge for at arbeidsflyten er optimalisert for deres måte å jobbe på.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-lock display-1"></span>
                <h4 class="card-title">Open source</h4>
                <h6 class="card-subtitle text-muted">Teknologi</h6>
                <p class="card-text">Cubit er bygget med et utvalg av de siste trendene innenfor teknologi som gjør at vi kan løpende tilpasse og utvikle Cubit for å passe den enkeltes behov.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <span class="icon-time display-1"></span>
                <h4 class="card-title">60</h4>
                <h6 class="card-subtitle text-muted">minutter</h6>
                <p class="card-text">Med Cubit slipper du kursing og tung dokumentasjon, vår løsning er så lett å bruke at vi kan sette deg inn i systemet på under en time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-testimonials text-xs-center bg-inverse">
      <div class="container">
        <h3 class="sr-only">Dette sier våre brukere om oss</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="img/face1.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Cubit har gitt oss full oversikt over en kronglete prosess samt. Spart oss for flere årsverk.</p>
                <footer>Hafslund</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="img/face2.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Vi har ikke tilsyn men det ser greit ut, vi liker ikke blått. Og heller ikke systemer vi ikke har laget selv men det virker sikkert...</p>
                <footer>Fjordkraft</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="img/face3.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Vi har ikke tilsyn heller men er mer fan av blått enn hva Fjordkraft er. Stå på sikkert noen som vil ta det i bruk.</p>
                <footer>Norgesenergi</footer>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li class="active"><img src="img/face1.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
            <li><img src="img/face2.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
            <li><img src="img/face3.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
          </ol>
        </div>
      </div>
    </section>

    <!-- Text Content
    ================================================== -->

    <section class="section-text">
      <div class="container">
        <h3 class="text-xs-center">Smartere og enklere utvalg</h3>
        <div class="row p-y-3">
          <div class="col-md-5">
            <p class="wp wp-7">Met kraftige søk og filteringsverktøy er det raskt og enkelt å finne anlegg for tilsyn. Fra utvalgsiden kan du plugge ut anlegg, tildele teknikkere eller bare markere at et anlegg bør prioriteres for tilsyn.</p>
          </div>
          <div class="col-md-5 col-md-offset-2 separator-x">
            <p class="wp wp-8">Med bedre verktøy for utvalg av anlegg er det enklere å holde oversikten, og Cubit jobber for at valg av anlegg for kontroll skal fungere optimalt</p>
          </div>
        </div>
      </div>
    </section>
    <section class="section-news">
      <div class="container">
        <h3 class="sr-only">Test med dine data</h3>
        <div class="bg-inverse">
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="img/1.jpg" alt="1" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <span class="label label-info">1. Kontakt oss for å få datamodel</span>
                <br>
                <h5>Send din epost, og vi vil ta kontakt med deg, og sende deg en kopi av vår datamodell.</h5>
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-push-6 p-l-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="img/2.jpg" alt="2" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 col-md-pull-6 p-r-0">
              <article class="center-block">
                <span class="label label-info">2. Datadump fra ditt kjernesystem</span>
                <br>
                <h5>Du sender oss dine data, og vi oppretter en egen instans for dine data, og ditt selskap</h5>
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="img/3.jpg" alt="3" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <span class="label label-info">3. Test løsningen med dine data</span>
                <br>
                <h5>Med egne data kan du utforske systemet. Vi bilr gjerne med dere ut på tilsyn, for å se hvordan det fungerer for dere i praksis.</h5>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-signup bg-faded">
      <div class="container">
        <h3 class="text-xs-center m-b-3">Vil du vite mer? Meld deg på vårt nyhetsbrev.</h3>
        <form action="" method="post">
          <div class="row">
            <div class="col-md-5 col-xl-4">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Dit navn</label>
                <input type="first_name" class="form-control form-control-lg" id="inputName" placeholder="Fulltnavn">
              </div>
            </div>
            <div class="col-md-5 col-xl-4">
              <div class="form-group has-icon-left form-control-email">
                <label class="sr-only" for="inputEmail">E-postadresse</label>
                <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Epostadresse" autocomplete="off">
              </div>
            </div>
            <div class="col-md-5 col-xl-4">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Meld meg på!</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object display-1"><img src="img/logo.png" height="50px" width="100px"></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
          </div>
        </div>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
    <script src='http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
