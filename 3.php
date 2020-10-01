<!DOCTYPE html>
<html lang="en">
  <head>
    <title>IETE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="icomoon/style.css">
    <link rel="stylesheet" href="css/cpstyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
      .parallax {
  /* The image used */
 background-image: url('Resources/elan.png');
 background-size: 100% 100%;
 width: 100%;
  height: 900px;

}
@media 
  (min-width: 345px) and (max-width: 450px){
    .parallax {
  /* The image used */
 background-image: url('Resources/ELAN 11.png');
 background-size: 100% 100%;
 width: 100%;
  height: 900px;

}
  }
/* Base */
html {
 
  
}
::-webkit-scrollbar {
  width: 0px;  /* Remove scrollbar space */
  background: transparent;
}
body{
                width: 100%;
                height: 2600px;
                background-image: url("https://www.transparenttextures.com/patterns/dark-wood.png");
                background-color: #0A0A0A !important;
                background-size: contain;
                /* overflow: hidden; */
                background-attachment: fixed;
                margin: 0;
                position: relative;
    }

/* body {
  line-height: 1.7;
  color: #cfcfd1;
  font-weight: 300;
  font-size: 1rem;
  background-color: #0a0a0a;
  background-image: url("https://www.transparenttextures.com/patterns/dark-wood.png");
  font-family: "Roboto Mono", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; */
} 

::-moz-selection {
  background: #000;
  color: #fff; }

::selection {
  background: #000;
  color: #fff; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a:hover {
    text-decoration: none; }

h1, h2, h3, h4, h5,
.h1, .h2, .h3, .h4, .h5 {
  font-family: "Roboto Mono", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important; }

.border-2 {
  border-width: 2px; }

.text-black {
  color: #000 !important; }

.bg-black {
  background: #000 !important; }

.color-black-opacity-5 {
  color: rgba(0, 0, 0, 0.5); }

.color-white-opacity-5 {
  color: rgba(255, 255, 255, 0.5); }

  .img-valign {
    position: relative;
    vertical-align: middle;
    margin-bottom: 0.75em;
    width: 500px;
    height: 400px;
  }
  
  .text1 {
    font-size: 44px;
  }
  
  .text2 {
    font-size: 24px;
  }  
.site-wrap:before {
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out;
  background: rgba(0, 0, 0, 0.6);
  content: "";
  position: absolute;
  z-index: 2000;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0;
  visibility: hidden; }

.offcanvas-menu .site-wrap {
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 2;
  overflow: hidden; }
  .offcanvas-menu .site-wrap:before {
    opacity: 1;
    visibility: visible; }

.btn {
  text-transform: uppercase;
  letter-spacing: .2em;
  border-radius: 0; }
  .btn:hover, .btn:active, .btn:focus {
    outline: none;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

.line-height-1 {
  line-height: 1 !important; }

.bg-black {
  background: #000; }

.form-control {
  height: 43px;
  border-radius: 0; }
  .form-control:active, .form-control:focus {
    border-color: #ff5733; }
  .form-control:hover, .form-control:active, .form-control:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

.site-section {
  padding: 1.5em 0; }
  @media (min-width: 768px) {
    body,html{
   
    }
    .site-section {
      padding: 6em 0; } }
  .site-section.site-section-sm {
    padding: 2rem 0; }

.site-section-heading h2 {
  position: relative;
  font-size: 2.5rem;
  color: #fff;
  padding-bottom: 30px; }
  @media (min-width: 768px) {
    .site-section-heading h2 {
      font-size: 3rem; } }
  .site-section-heading h2:after {
    content: "";
    left: 0%;
    bottom: 0;
    position: absolute;
    width: 100px;
    height: 2px;
    background: -webkit-gradient(linear, left top, right top, from(#00dffe), color-stop(70%, #00dffe));
    background: -webkit-linear-gradient(left, #00dffe, #00dffe 70%);
    background: -o-linear-gradient(left, #00dffe, #00dffe 70%);
    background: linear-gradient(to right, #00dffe, #00dffe 70%); }
    @media (min-width: 992px) {
      body,html{
       
      }
      .site-section-heading h2:after {
        left: -20%; } }
  .site-section-heading h2.text-center:after {
    content: "";
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%);
    content: "";
    left: 50%;
    bottom: 0;
    position: absolute;
    width: 100px;
    height: 2px; }

.border-top {
  border-top: 1px solid #edf0f5 !important; }

.site-footer {
  padding: 4em 0;
  background: #000000; }
  @media (min-width: 768px) {
    html,body{
     
    }
.bg-text-line {
  display: inline;
  background: #000;
  -webkit-box-shadow: 20px 0 0 #000, -20px 0 0 #000;
  box-shadow: 20px 0 0 #000, -20px 0 0 #000; }

.text-white-opacity-05 {
  color: rgba(255, 255, 255, 0.5); }

.text-black-opacity-05 {
  color: rgba(0, 0, 0, 0.5); }

.hover-bg-enlarge {
  overflow: hidden;
  position: relative; }
  @media (max-width: 991.98px) {
    html,body{
      
    }
    .hover-bg-enlarge {
      height: auto !important; } }
  .hover-bg-enlarge > div {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transition: .8s all ease-in-out;
    -o-transition: .8s all ease-in-out;
    transition: .8s all ease-in-out; }
  .hover-bg-enlarge:hover > div, .hover-bg-enlarge:focus > div, .hover-bg-enlarge:active > div {
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2); }
  @media (max-width: 991.98px) {
    html,body{
    
    }
    .hover-bg-enlarge .bg-image-md-height {
      height: 300px !important; } }

.bg-image {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: fixed; }
  .bg-image.overlay {
    position: relative; }
    .bg-image.overlay:after {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.7); }
  .bg-image > .container {
    position: relative;
    z-index: 1; }

@media (max-width: 991.98px) {
  html,body{
    
  }
  .img-md-fluid {
    max-width: 70%;
    height: auto; } }

@media (max-width: 991.98px) {
  html,body{
    
  }
  .display-1, .display-3 {
    font-size: 3rem; } }

.play-single-big {
  width: 90px;
  height: 90px;
  display: inline-block;
  border: 2px solid #fff;
  color: #fff !important;
  border-radius: 50%;
  position: relative;
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out; }
  .play-single-big > span {
    font-size: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-40%, -50%);
    -ms-transform: translate(-40%, -50%);
    transform: translate(-40%, -50%); }
  .play-single-big:hover {
    width: 120px;
    height: 120px; }

.overlap-to-top {
  margin-top: -150px; }

.ul-check {
  margin-bottom: 50px; }
  .ul-check li {
    position: relative;
    padding-left: 35px;
    margin-bottom: 15px;
    line-height: 1.5; }
    .ul-check li:before {
      left: 0;
      font-size: 20px;
      top: -.3rem;
      font-family: "Roboto Mono", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important; }
      content: "\e5ca";
      position: absolute; }
  .ul-check.white li:before {
    color: #fff; }
  .ul-check.success li:before {
    color: #8bc34a; }
  .ul-check.primary li:before {
    color: #ff5733; }

.program h2 {
  font-size: 1.5rem; }

.program .border-top {
  border-top: 1px solid #383b4f !important; }

.program .border-bottom {
  border-bottom: 1px solid #383b4f !important; }

.blog-entry h2 {
  font-size: 20px; }
  .blog-entry h2 a {
    color: #fff; }

.blog-entry .post-meta {
  font-size: 14px; }
  .blog-entry .post-meta a {
    color: #ff5733; }
  .blog-entry .post-meta img {
    width: 36px;
    border-radius: 50%; }

/* Navbar */

/* Blocks */
.container-fluid {
  max-width: 1400px; }

.site-hero {
  margin-bottom: 7rem; }
  .site-hero, .site-hero .row {
    min-height: 700px;
    height: calc(100vh - 95px); }
  .site-hero.inner, .site-hero.inner .row {
    min-height: 400px;
    height: calc(50vh - 95px); }
  .site-hero h1 {
    font-size: 2rem;
    background: -webkit-gradient(linear, left top, right top, from(#00dffe), color-stop(70%, #00dffe));
    background: -webkit-linear-gradient(left, #00dffe, #00dffe 70%);
    background: -o-linear-gradient(left, #00dffe, #00dffe 70%);
    background: linear-gradient(to right, #00dffe, #00dffe 70%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; }
    @media (min-width: 992px) {
      html,body{
        
      }
      .site-hero h1 {
        font-size: 6rem; } }
  .site-hero .caption {
    color: #fff; }
    @media (min-width: 768px) {
      html,body{
       
      }
      .site-hero .caption {
        font-size: 1.7rem; } }

.btn-custom {
  text-transform: uppercase;
  color: #fff !important;
  background: #3f4046;
  padding: 16px 30px;
  display: inline-block;
  letter-spacing: .2em;
  position: relative; }
  .btn-custom > span {
    position: relative;
    z-index: 2; }
  .btn-custom:before {
    background: -webkit-gradient(linear, left top, right top, from(#ff5733), color-stop(70%, #ff5733));
    background: -webkit-linear-gradient(left, #ff5733, #ff5733 70%);
    background: -o-linear-gradient(left, #ff5733, #ff5733 70%);
    background: linear-gradient(to right, #ff5733, #ff5733 70%);
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    top: 0;
    width: 0;
    -webkit-transition: .3s all ease-in-out;
    -o-transition: .3s all ease-in-out;
    transition: .3s all ease-in-out;
    z-index: 1; }
  .btn-custom:hover:before {
    width: 100%; }

.coordinator img {
  max-width: 50px;
  border-radius: 50%; }

.speaker {
  margin-bottom: 50px; }
  .speaker .name {
    left: -80px;
    position: relative; }
    @media (max-width: 1199.98px) {
      .speaker .name {
        left: 0; } }

.testimony {
  max-width: 480px; 
 padding: 30px;
margin-left: 0px;}
  .testimony figure {
    margin-bottom: 40px;
    text-align: center; }
    .testimony figure img {
      margin: 0 auto;
      max-width: 150px;
      border-radius: 50%; }
  .testimony .author {
    margin-top: 50px;
    color: #fff; }
  .testimony .text-muted {
    color: #e9e9ea; }

.form-group .form-control {
  color: #fff !important;
  background: none;
  border: 2px solid #fff; }
  .form-group .form-control:active, .form-group .form-control:focus {
    background: none; }

.pricing {
  border: 2px solid #ff5733;
  padding: 30px; }
  .pricing h2 {
    font-size: 26px;
    color: #fff;
    margin-bottom: 30px; }
  .pricing .amount {
    color: #ff5733;
    margin-bottom: 30px; }
    .pricing .amount sup {
      top: -30px;
      font-size: 18px; }
    .pricing .amount .number {
      font-size: 3rem; }
  .pricing ul li {
    margin-bottom: 10px; }

.block-13, .slide-one-item {
  position: relative;
  z-index: 1; }
  .block-13 .owl-nav, .slide-one-item .owl-nav {
    position: relative;
    position: absolute;
    bottom: -90px;
    left: 50%;
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    transform: translateX(-50%); }
    .block-13 .owl-nav .owl-prev, .block-13 .owl-nav .owl-next, .slide-one-item .owl-nav .owl-prev, .slide-one-item .owl-nav .owl-next {
      position: relative;
      display: inline-block;
      padding: 20px;
      font-size: 30px;
      color: #000; }
      .block-13 .owl-nav .owl-prev.disabled, .block-13 .owl-nav .owl-next.disabled, .slide-one-item .owl-nav .owl-prev.disabled, .slide-one-item .owl-nav .owl-next.disabled {
        opacity: .2; }

.slide-one-item.home-slider .owl-nav {
  position: absolute !important;
  top: 50% !important;
  bottom: auto !important;
  width: 100%; }

.slide-one-item.home-slider .owl-prev {
  left: 10px !important; }

.slide-one-item.home-slider .owl-next {
  right: 10px !important; }

.slide-one-item.home-slider .owl-prev, .slide-one-item.home-slider .owl-next {
  color: #fff;
  position: absolute !important;
  top: 50%;
  padding: 0px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.2);
  -webkit-transition: .3s all ease-in-out;
  -o-transition: .3s all ease-in-out;
  transition: .3s all ease-in-out;
  line-height: 0;
  text-align: center;
  font-size: 25px; }
  @media (min-width: 768px) {
    html,body{
    
    }
    .slide-one-item.home-slider .owl-prev, .slide-one-item.home-slider .owl-next {
      font-size: 25px; } }
  .slide-one-item.home-slider .owl-prev > span, .slide-one-item.home-slider .owl-next > span {
    position: absolute;
    line-height: 0;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  .slide-one-item.home-slider .owl-prev:hover, .slide-one-item.home-slider .owl-prev:focus, .slide-one-item.home-slider .owl-next:hover, .slide-one-item.home-slider .owl-next:focus {
    background: black; }

.slide-one-item.home-slider:hover .owl-nav, .slide-one-item.home-slider:focus .owl-nav, .slide-one-item.home-slider:active .owl-nav {
  opacity: 10;
  visibility: visible; }

.custom-pagination a, .custom-pagination span {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px; }
  .magnific-img img {
    width: 100%;
    height: auto;
    margin: 10px;
    padding-left: 10px;
    padding-right: 10px;
}
.mfp-bottom-bar,*{
  font-family: "Roboto Mono", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important; }
}
.magnific-img {
    display: inline-block;
    width: 32.3%;
}
a.image-popup-vertical-fit {
    cursor: -webkit-zoom-in;
}
.mfp-with-zoom .mfp-container,
.mfp-with-zoom.mfp-bg {
  opacity: 0;
  -webkit-backface-visibility: hidden;
  /* ideally, transition speed should match zoom duration */
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  -o-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.mfp-with-zoom.mfp-ready .mfp-container {
    opacity: 1;
}
.mfp-with-zoom.mfp-ready.mfp-bg {
    opacity: 0.98;
}

.mfp-with-zoom.mfp-removing .mfp-container,
.mfp-with-zoom.mfp-removing.mfp-bg {
  opacity: 0;
}
.mfp-arrow-left:before {
    border-right: none !important;
}
.mfp-arrow-right:before {
    border-left: none !important;
}
button.mfp-arrow, .mfp-counter {
    opacity: 0 !important;
    transition: opacity 200ms ease-in, opacity 2000ms ease-out;
}
.mfp-container:hover button.mfp-arrow, .mfp-container:hover .mfp-counter{
	opacity: 1 !important;
}


/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: "Roboto Mono", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px; 
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }



.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  html,body{
   
  }
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } 
}
    </style>
  </head>
  <body>
 
    <div id="container1"><div id="container2">
    <?php include "header2.html"; ?>
     
         <div class="site-wrap">
<div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
        
     
    <div class="parallax">
    </div>

        <div class="site-section">
          <div class="container">
            <div class="row mb-5 justify-content-center">
              <div class="col-lg-4 mb-1">
                <div class="site-section-heading" data-aos="fade-up">
                  <h2 class="text-center">About</h2>
                </div>
              </div>
            </div>
            <div class="site-section">
              <div class="container">
                
        
                <div class="row align-items-center speaker">
                  <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <img src="Resources/3.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-lg-6 ml-auto">
                   
                    <div class="bio pl-lg-5">
                      <p class="mb-4" data-aos="fade-right" data-aos-delay="400">Elan is an inter-college Technical Fest organized by IETE-TSEC in the odd Semester of reach year. It includes a multitude of amazing projects, interesting seminars and most importantly 5 mind-blowing Technical Workshops taken by famous and knowledgeable mentors. In all, Elan is a grand fiesta, celebrating Technological Advancements. Each year more than a thousand college students from all over Mumbai join us at our college to take part in this spectacular Event.</p>
                      
                    </div>
                  </div>
                </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-4 mb-5">
            <div class="site-section-heading" data-aos="fade-up">
              <h2 class="text-center">Our Workshops</h2>
            </div>
          </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="100">
            <div class="testimony text-center"> 
              <figure>
                <img src="Resources/python.png" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="text-uppercase text-primary d-block mb-0">Python ML</p>
                <p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="200">
            <div class="testimony text-center">
              <figure>
                <img src="Resources/android.png" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="text-uppercase text-primary d-block mb-0">Android App Development </p>
                <p class="text-muted mb-4"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5" data-aos="fade-up" data-aos-delay="300">
            <div class="testimony text-center">
              <figure>
                <img src="Resources/robot.png" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="text-uppercase text-primary d-block mb-0">Robotics</p>
                <p class="text-uppercase text-primary d-block mb-4"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 col-centered" data-aos="fade-up" data-aos-delay="400">
            <div class="testimony text-center">
              
              <figure>
                <img src="Resources/virtual.png" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="text-uppercase text-primary d-block mb-0">Virtual Reality </p>
                <p><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 col-centered" data-aos="fade-up" data-aos-delay="500">
            <div class="testimony text-center">
              <figure>
                <img src="Resources/hacking.png" alt="Image" class="img-fluid">
              </figure>
              <blockquote>
                <p class="text-uppercase text-primary d-block mb-0">Ethical hacking </p>
                <p class="text-muted mb-4"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem alias reprehenderit error quidem aliquam ad minus, veritatis modi.&</p>
                
              </blockquote>
            </div>
          </div>
          </div>
        </div>
      </div>


        

      </div>
    </div>
  
    
  </div>
  </div>
    </div>

    <script>
    AOS.init({
      duration: 1500,
    });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         
    <script src="js/main.js"></script> 
    <?php include "footer.html"; ?>
  </body>
</html>