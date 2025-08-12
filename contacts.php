
<!-- Page Title--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contacto - Ginecologia Eva Ecuador</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body"> 
        <div class="cssload-jumping"><span></span><span></span><span></span><span></span><span></span></div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <?
    include 'vista/nav.php';
    ?>
      </header>
      <section class="section-page-title" style="background-image: url(images/page-title-4-1920x305.jpg); background-size: cover;">
        <div class="container">
          <h1 class="page-title">Contacto</h1>
        </div>
      </section>
      <section class="breadcrumbs-custom">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Inicio</a></li>
            <li class="active">Contacto</li>
          </ul>
        </div>
      </section>
      <!-- Mailform-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8">
              <h2>Contacto</h2>
              <div class="divider-lg"></div>
              <p>Puede contactarnos de la forma que le resulte más conveniente. Estamos disponibles 24/7 por correo electrónico. <br class="d-none d-lg-inline">También puede utilizar un formulario de contacto rápido a continuación o visitar nuestro salón personalmente.</p>
              <!-- RD Mailform-->
              <form class="rd-mailform text-left rd-form" data-form-output="form-output-global" data-form-type="contact" method="post" id="contactForm" name="contactForm">
                <div class="row row-30">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <label class="form-label" for="name">Nombre</label>
                      <input class="form-input" id="name" type="text" name="name" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <label class="form-label" for="apellido">Apellido</label>
                      <input class="form-input" id="apellido" type="text" name="apellido" data-constraints="@Required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <label class="form-label" for="celular">Celular</label>
                      <input class="form-input" id="celular" type="text" name="celular" data-constraints="@Numeric @Required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <label class="form-label" for="email">Correo</label>
                      <input class="form-input" id="email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="message">Mensaje</label>
                      <textarea class="form-input" id="message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div id="msgSubmit">
                    
                </div>
                <div class="form-button group-sm text-left">
                  <button class="button button-primary" type="submit" id="btnEnviarCorreo">Enviar Mensaje</button>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <ul class="contact-list">
                <li> 
                  <p class="contact-list-title">Dirección</p>
                  <div class="contact-list-content"><span class="icon mdi mdi-map-marker icon-primary"></span><a href="#">Dirección azuay entre 18 de Noviembre y Sucre</a></div>
                </li>
                <li>
                  <p class="contact-list-title">teléfono</p>
                  <div class="contact-list-content"><span class="icon mdi mdi-phone icon-primary"></span><a href="tel:#">+593 96 707 6053</a></div>
                </li>
                <li>
                  <p class="contact-list-title">Correo</p>
                  <div class="contact-list-content"><span class="icon mdi mdi-email-outline icon-primary"></span><a href="mailto:#">información@ginecólogiaeva.com</a></div>
                </li>
                <li>
                  <p class="contact-list-title">Horarios</p>
                  <div class="contact-list-content"><span class="icon mdi mdi-clock icon-primary"></span>
                    <ul class="list-xs">
                      <li>Lunes-Viernes: 9 am – 6 pm</li>
                      <li>Sabado: 9 am – 4 pm</li>
                      <li>Domingo: Cerrado</li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    <?
    include 'vista/footer.html';
    ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
  </body>
  <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="correo/enviarCorreo.js"></script>
</html>