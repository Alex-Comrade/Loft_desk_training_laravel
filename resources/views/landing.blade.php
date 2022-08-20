<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body>
  <!-- HERO -->
  <section class="hero">
    <div class="box"></div>
    <div class="nav">
      <div class="nav-bar">
        <div class="nav-bar-logo">
          <a href="#">
            <img src="{{asset('assets/logo.svg')}}" alt="">
          </a>
        </div>
        <div class="nav-bar-menu">
          <ul>
            <li><a href="#">catalogue</a></li>
            <li><a href="#">about us</a></li>
            <li><a href="#">gallery</a></li>
            <li><a href="#">contacts</a></li>
          </ul>
        </div>
        <div class="nav-bar-cta">
          <button type="button" class="btn-cta">Call me</button>
        </div>
      </div>
    </div>
    <div class="hero-content">
      <div class="hero-wrapper">
        <img src="assets/h1.svg" alt="">
        <button type="button" class="btn-catalogue">Catalogue</button>
      </div>
      <img class="content-img" src="{{asset('assets/content_img.png')}}" alt="">
      <img class="content-img--text" src="{{asset('assets/content-round-text.png')}}" alt="">
    </div>
  </section>

  <!-- GALLERY -->

  <section class="ms-lg">
    <div class="heading ">
      <h2>Gallery</h2>
    </div>
    <div class="gallery">
      <a class="gallery-item sm img-1" href="#">
        <img src="{{asset('assets/gallery_img1.png')}}" alt="">
        <div class="gallery-item-text-sm">Open</div>
      </a>
      <a class="gallery-item sm img-2" href="#">
        <img src="{{asset('assets/gallery_img2.png')}}" alt="">
        <div class="gallery-item-text-sm">Open</div>
      </a>
      <a class="gallery-item lg img-3" href="#">
        <img src="{{asset('assets/gallery_img3.png')}}" alt="">
        <div class="gallery-item-text-lg">Open</div>
      </a>
      <a class="gallery-item lg img-4" href="#">
        <img src="{{asset('assets/gallery_img4.png')}}" alt="">
        <div class="gallery-item-text-lg">Open</div>
      </a>
      <a class="gallery-item lg img-5" href="#">
        <img src="{{asset('assets/gallery_img5.png')}}" alt="">
        <div class="gallery-item-text-lg">Open</div>
      </a>
      <a class="gallery-item sm img-6" href="#">
        <img src="{{asset('assets/gallery_img6.png')}}" alt="">
        <div class="gallery-item-text-sm">Open</div>
      </a>
    </div>
  </section>

  <!-- ABOUT US -->

  <section class="aboutUs">
    <div class="box2"></div>
    <div class="about">
      <div class="heading">
        <h2>About us</h2>
      </div>
      <div class="about-container">
        <div class="about-wrapper">
          <img class="about-img" src="{{asset('assets/logo.svg')}}" alt="">
          <p class="about-text">This is a young company that offers stylish, luxury loft furniture designed by a group of young designers and constructors. Shop LoftDesk production was founded in 2017, and almost immediately became the leader in local sales, and since 2019 our products have become available throughout the country.</p>
          <button type="button" class="btn-about">Catalogue</button>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->


  <footer class="footer">
    <div class="heading">
      <img class="about-img" src="{{asset('assets/logo.svg')}}" alt="">
    </div>
    <div class="footer-wrapper">
      <div class="footer-flex">
        <div class="contacts pt-1">
          <p>Phone: +40 842 94 41 320</p>
          <p>Phone: +48 842 94 41 320</p>
          <p>E-mail: loftdesk@gmail.com</p>
          <p>Instagram: loftdesk_pl</p>
        </div>
        <div class="address pt-2">
          <p>Office address: Marszałka Ofach 23, 85-310 Bydgoszcz, Poland</p>
          <p>Factory address: Szubińska 49, 85-312 Bydgoszcz, Poland</p>
        </div>
        <div class="policies pt-3">
          <a href="#">LoftDesk privacy policy</a>
          <a href="#">LoftDesk
            public offer agreement</a>
        </div>
      </div>
    </div>
    <div class="copyright-wrapper">
      <div class="copyright pt-4">
        <p class="copyright-text">© All rights reserved loftdesk.pl 2017-2022</p>
        <div class="copyright-author">
          <p class="copyright-author-1">made by: </p>
          <p class="copyright-author-2">p1nkpurple</p>
        </div>
      </div>
    </div>

  </footer>
</body>

</html>