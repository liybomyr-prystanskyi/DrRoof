<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <title></title>

  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta property="og:image" content="path/to/image.jpg">
  <link rel="icon" href="images/favicon/favicon.ico">
  <meta name="theme-color" content="#000">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.min.css">
</head>

<div id="Load" class="load">
  <div class="load__container">
    <div class="load__animation"></div>
    <div class="load__mask"></div>
  </div>
</div>

<body>
  <main>
    <?php require ("tpl/header.php");?>

    <section class="contact-banner" style="background-image: url('img/temp/contact/banner.png');">
      <div class="container">
        <div class="contact-banner__main">
          <h1>Contact Us</h1>
        </div>
      </div>
    </section>

    <section class="contact-form">
      <div class="container">
        <div class="contact-form__main">
          <div class="row justify-content-between">
            <div class="col-12 col-lg-5">
              <form action="#" class="contact-form__main__form" id="request-form">
                <div class="contact-form__main__form__title">
                  <h2>Do you have a questions?</h2>
                  <p>Fill out the form and we will get back to you
                    as soon as possible
                  </p>
                </div>
                <div class="contact-form__main__form__inputs ">
                  <label for="form-name">Your name:</label>
                  <input data-title="Name: " type="text" id="form-name" class="sn_form_information" data-required="yes">
                  <label for="form-name">Your phone:</label>
                  <input data-title="Phone: " type="tel" id="form-tel" class="sn_form_information" data-required="yes">
                  <label for="form-name">Your email:</label>
                  <input data-title="Email: " type="email" id="form-email" class="sn_form_information"
                    data-required="yes">
                  <label for="form-area">Message:</label>
                  <textarea name="form-area" id="form-area" style="resize: none;" data-title="Message"
                    data-required="yes"></textarea>
                </div>
                <div class="contact-form__main__form__submit btn btn-default sn_form_submit"
                  onClick="sn_form_submit('request-form')">Send
                </div>
              </form>
            </div>
            <div class="col-12 col-lg-6">
              <div class="contact-form__main__location">
                <div class="contact-form__main__location__title">
                  <h2>Contact details</h2>
                  <p>Save time and money, call us for help from trusted roofer.</p>
                </div>
                <div class="contact-form__main__location__info">
                  <a href="tel: +1 717-232-4291">
                    <img src="img/temp/contact/contact-book.png" alt="contact-book">
                    +1 717-232-4291
                  </a>
                  <a href="#">
                    <img src="img/temp/contact/contact-location.png" alt="contact-location">
                    1524 north sixth street, Harrisburg pa 17102
                  </a>
                </div>
                <div class="contact-form__main__location__social">
                  <a href="#">
                    Social:
                    <img src="img/temp/contact/facebook.png" alt="facebook">
                  </a>
                </div>
                <div class="contact-form__main__location__map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.083110753826!2d-76.88951908429686!3d40.27390397223687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8c13c4ddde5d7%3A0xfb06485f50ef079d!2zMTUyNCBOIDZ0aCBTdCwgSGFycmlzYnVyZywgUEEgMTcxMDIsINCh0KjQkA!5e0!3m2!1sru!2sua!4v1573038981600!5m2!1sru!2sua"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>

  </main>
  <?php require ("tpl/footer.php");?>
</body>

</html>