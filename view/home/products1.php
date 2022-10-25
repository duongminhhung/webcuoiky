<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  text-decoration: none;
  outline: none;
  border: none;
  text-transform: capitalize;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

html {
  overflow-x: hidden;
  font-size: 62.5%;
}

html::-webkit-scrollbar {
  width: 1rem;
}

html::-webkit-scrollbar-track {
  background: #eee;
}

html::-webkit-scrollbar-thumb {
  background: #0984e3;
  border-radius: 5rem;
}

body {
  background: #eee;
}

section {
  padding: 3rem 9%;
}

.heading {
  text-align: center;
  margin-bottom: 3rem;
  font-size: 3.5rem;
  color: #333;
}

.heading span {
  color: #0984e3;
}

.btn {
  margin-top: 1rem;
  display: inline-block;
  border-radius: .5rem;
  padding: 1rem 3rem;
  font-size: 1.7rem;
  color: #fff;
  cursor: pointer;
  background: #0984e3;
}

.btn:hover {
  background: #333;
}

@-webkit-keyframes fadeIn {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0;
  }
}

@keyframes fadeIn {
  0% {
    -webkit-transform: scale(0.5);
            transform: scale(0.5);
    opacity: 0;
  }
}

.header {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  background: #0984e3;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 1rem 9%;
}

.header .logo {
  font-size: 2.5rem;
  color: #fff;
  font-weight: bolder;
}

.header .logo i {
  color: gold;
}

.header .search-form {
  border-radius: 5rem;
  height: 5rem;
  width: 50rem;
  padding: 0 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #fff;
}

.header .search-form input {
  width: 100%;
  padding-right: 1rem;
  font-size: 1.7rem;
  text-transform: none;
  color: #666;
}

.header .search-form label {
  font-size: 2rem;
  color: #666;
  cursor: pointer;
}

.header .search-form label:hover {
  color: #0984e3;
}

.header .icons a,
.header .icons div {
  font-size: 2.5rem;
  margin-left: 2rem;
  color: #fff;
  cursor: pointer;
}

.header .icons a:hover,
.header .icons div:hover {
  color: gold;
}

#search-btn {
  display: none;
}

.side-bar {
  position: fixed;
  top: 0;
  left: -110%;
  height: 100%;
  width: 30rem;
  background: #fff;
  z-index: 10000;
}

.side-bar.active {
  left: 0;
  -webkit-box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.7);
          box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.7);
}

.side-bar #close-side-bar {
  position: absolute;
  top: 1rem;
  right: 2rem;
  font-size: 4rem;
  cursor: pointer;
  color: #666;
}

.side-bar #close-side-bar:hover {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  color: #333;
}

.side-bar .user {
  padding: 2rem;
  background: #eee;
  text-align: center;
}

.side-bar .user img {
  height: 17rem;
  width: 17rem;
  border-radius: 50%;
  border: 1rem solid #fff;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  margin-bottom: .5rem;
}

.side-bar .user h3 {
  padding: .5rem 0;
  font-size: 1.7rem;
  color: #666;
}

.side-bar .user a {
  font-size: 1.5rem;
  color: #0984e3;
}

.side-bar .user a:hover {
  color: #333;
}

.side-bar .navbar {
  padding-top: 1rem;
}

.side-bar .navbar a {
  display: block;
  padding: 1rem 2rem;
  font-size: 1.7rem;
  color: #666;
}

.side-bar .navbar a:hover {
  color: #0984e3;
}

.side-bar .navbar a:hover i {
  padding-right: 2rem;
}

.side-bar .navbar a i {
  padding-right: .5rem;
}

.home {
  background: #fff;
}

.home .slide {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
  min-height: 40rem;
  padding: 2rem 0;
}

.home .slide .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  text-align: center;
}

.home .slide .image img {
  height: 30rem;
}

.home .slide .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.home .slide .content span {
  font-size: 2rem;
  color: #0984e3;
}

.home .slide .content h3 {
  padding-top: .5rem;
  color: #333;
  font-size: 3rem;
}

.swiper-button-next::after,
.swiper-button-prev::after {
  font-size: 3rem;
  color: #333;
}

.banner .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 2rem;
}

.banner .box-container .box {
  position: relative;
  height: 25rem;
  border: 0.2rem solid #333;
  border-radius: .5rem;
  overflow: hidden;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.banner .box-container .box:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.banner .box-container .box img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.banner .box-container .box .content {
  position: absolute;
  top: 50%;
  left: 5%;
  -webkit-transform: translateY(-50%) rotate(45deg);
          transform: translateY(-50%) rotate(45deg);
}

.banner .box-container .box .content span {
  font-size: 1.7rem;
  color: #0984e3;
}

.banner .box-container .box .content h3 {
  font-size: 2rem;
  padding: .5rem 0;
  color: #333;
}

.arrivals .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(33rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(33rem, 1fr));
  gap: 2rem;
}

.arrivals .box-container .box {
  border-radius: .5rem;
  border: 0.2rem solid #333;
  padding: 2rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1rem;
  background: #fff;
}

.arrivals .box-container .box:hover .image .main-img {
  display: none;
}

.arrivals .box-container .box:hover .image .hover-img {
  display: inline-block;
}

.arrivals .box-container .box .image img {
  height: 15rem;
  -webkit-animation: fadeIn .2s linear;
          animation: fadeIn .2s linear;
}

.arrivals .box-container .box .image .hover-img {
  display: none;
}

.arrivals .box-container .box .content h3 {
  font-size: 2rem;
  color: #333;
}

.arrivals .box-container .box .content .price {
  padding-top: .5erm;
  font-size: 2rem;
  color: #0984e3;
  padding-bottom: .7rem;
}

.arrivals .box-container .box .content .price span {
  font-size: 1.5rem;
  color: #666;
  text-decoration: line-through;
}

.arrivals .box-container .box .content .stars i {
  font-size: 1.5rem;
  color: gold;
}

.about {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.about .image img {
  width: 100%;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  padding: 3rem;
  background: #fff;
}

.about .content h3 {
  font-size: 3rem;
  text-transform: uppercase;
  color: #333;
}

.about .content p {
  font-size: 1.5rem;
  color: #666;
  padding: 1rem 0;
  line-height: 2;
}

.faq .accordion-container {
  max-width: 70rem;
  margin: 0 auto;
}

.faq .accordion-container .accordion {
  background: #fff;
  margin-bottom: 1.5rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.faq .accordion-container .accordion:last-child {
  margin-bottom: .5rem;
}

.faq .accordion-container .accordion.active .accordion-heading {
  background: #0984e3;
}

.faq .accordion-container .accordion.active .accordion-heading i {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.faq .accordion-container .accordion.active .accordioin-content {
  display: block;
}

.faq .accordion-container .accordion .accordion-heading {
  padding: 2rem;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 1rem;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  background: #333;
  cursor: pointer;
}

.faq .accordion-container .accordion .accordion-heading h3 {
  font-size: 2rem;
  color: #fff;
}

.faq .accordion-container .accordion .accordion-heading i {
  font-size: 2rem;
  color: #fff;
}

.faq .accordion-container .accordioin-content {
  padding: 2rem;
  font-size: 1.5rem;
  line-height: 2;
  color: #666;
  display: none;
  -webkit-animation: fadeIn .2s linear;
          animation: fadeIn .2s linear;
}

.review .slide {
  width: 35rem;
  padding: 3rem;
  text-align: center;
  border: 0.2rem solid #333;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  border-radius: .5rem;
  background: #fff;
}

.review .slide img {
  height: 10rem;
  width: 10rem;
  border-radius: 50%;
  margin-bottom: .5rem;
}

.review .slide h3 {
  font-size: 2rem;
  color: #333;
}

.review .slide span {
  color: #0984e3;
  font-size: 1.7rem;
}

.review .slide p {
  font-size: 1.5rem;
  line-height: 2;
  color: #666;
  padding-top: 1rem;
}

.category .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(15rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
  gap: 2rem;
}

.category .box-container .box {
  text-align: center;
  border-radius: .5rem;
  border: 0.2rem solid #333;
  padding: 2rem;
  background: #fff;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.category .box-container .box:hover {
  background: #333;
}

.category .box-container .box:hover h3 {
  color: #fff;
}

.category .box-container .box img {
  height: 8rem;
  margin-bottom: .5rem;
}

.category .box-container .box h3 {
  font-size: 1.7rem;
  color: #333;
}

.products .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 2rem;
}

.products .box-container .box {
  border: 0.2rem solid #333;
  text-align: center;
  background: #fff;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  border-radius: .5rem;
  overflow: hidden;
}

.products .box-container .box:hover .image .hover-img {
  display: inline-block;
}

.products .box-container .box:hover .image .main-img {
  display: none;
}

.products .box-container .box:hover .image .icons {
  left: 1rem;
}

.products .box-container .box .image {
  position: relative;
}

.products .box-container .box .image img {
  height: 30rem;
  -webkit-animation: fadeIn .2s linear;
          animation: fadeIn .2s linear;
}

.products .box-container .box .image .hover-img {
  display: none;
}

.products .box-container .box .image .icons {
  position: absolute;
  top: 0;
  left: -7rem;
}

.products .box-container .box .image .icons a {
  display: block;
  margin-top: 1rem;
  height: 4.5rem;
  width: 4.5rem;
  line-height: 4.5rem;
  font-size: 1.7rem;
  border-radius: 50%;
  color: #fff;
  background: #333;
}

.products .box-container .box .image .icons a:hover {
  background: #0984e3;
}

.products .box-container .box .content {
  padding: 2rem;
}

.products .box-container .box .content h3 {
  font-size: 2rem;
  color: #333;
}

.products .box-container .box .content .price {
  font-size: 2.2rem;
  color: #0984e3;
  padding-bottom: .7rem;
  padding-top: .5rem;
}

.products .box-container .box .content .price span {
  color: #666;
  font-size: 1.5rem;
  text-decoration: line-through;
}

.products .box-container .box .content .stars i {
  font-size: 1.7rem;
  color: gold;
}

.product-banner .box-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.product-banner .box-container .box {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  position: relative;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  border-radius: .5rem;
  border: 0.2rem solid #333;
  overflow: hidden;
  height: 30rem;
}

.product-banner .box-container .box:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.product-banner .box-container .box img {
  height: 100%;
  width: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.product-banner .box-container .box .content {
  position: absolute;
  top: 50%;
  left: 5%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.product-banner .box-container .box .content span {
  font-size: 1.7rem;
  color: #0984e3;
}

.product-banner .box-container .box .content h3 {
  padding-top: .5rem;
  font-size: 2rem;
  color: #333;
}

.info-container .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 2rem;
}

.info-container .box-container .box {
  background: #fff;
  border-radius: .5rem;
  text-align: center;
  padding: 2rem;
  border: 0.2rem solid #333;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

.info-container .box-container .box i {
  height: 7.5rem;
  width: 7.5rem;
  line-height: 7.5rem;
  font-size: 2.5rem;
  border-radius: 50%;
  margin-bottom: .5rem;
  background: #0984e3;
  color: #fff;
}

.info-container .box-container .box h3 {
  font-size: 2rem;
  padding: .5rem 0;
  color: #333;
}

.info-container .box-container .box p {
  font-size: 1.5rem;
  line-height: 2;
  color: #666;
}

.contact {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.contact form {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.contact form h3 {
  font-size: 3rem;
  text-transform: uppercase;
  color: #333;
  padding-bottom: 1rem;
}

.contact form p {
  font-size: 1.5rem;
  color: #666;
  padding: 1rem 0;
  line-height: 2;
}

.contact form .inputBox {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.contact form .inputBox input {
  width: 49%;
}

.contact form .inputBox input, .contact form textarea {
  padding: 1.2rem 1.4rem;
  border-radius: .5rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  border: 0.2rem solid #333;
  background: #fff;
  text-transform: none;
  color: #666;
  font-size: 1.5rem;
  margin: .7rem 0;
}

.contact form textarea {
  height: 15rem;
  resize: none;
  width: 100%;
}

.contact .map {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  width: 100%;
}

.newsletter {
  background: #0984e3;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
}

.newsletter .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.newsletter .content h3 {
  font-size: 6rem;
  color: #fff;
  text-transform: uppercase;
}

.newsletter .content p {
  font-size: 2.2rem;
  color: #fff;
}

.newsletter form {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  background: #fff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: .5rem;
  border-radius: .5rem;
}

.newsletter form .email {
  width: 100%;
  padding: 0 1.4rem;
  text-transform: none;
  color: #666;
  font-size: 1.6rem;
}

.newsletter form .btn {
  margin-top: 0;
}

.register form,
.login form {
  max-width: 40rem;
  border-radius: .5rem;
  padding: 2rem;
  background: #fff;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  border: 0.2rem solid #333;
  margin: 1rem auto;
}

.register form h3,
.login form h3 {
  font-size: 2.5rem;
  padding-bottom: 1rem;
  color: #333;
  text-transform: uppercase;
}

.register form .box,
.login form .box {
  width: 100%;
  padding: 1.2rem 1.4rem;
  border-radius: .5rem;
  border: 0.2rem solid #333;
  font-size: 1.6rem;
  color: #666;
  text-transform: none;
  margin: .7rem 0;
}

.register form .remember,
.login form .remember {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: .5rem;
  padding-top: 1.5rem;
  padding-bottom: 1rem;
}

.register form .remember label,
.login form .remember label {
  font-size: 1.5rem;
  color: #666;
  cursor: pointer;
}

.register form .btn,
.login form .btn {
  width: 100%;
  text-align: center;
}

.register form .btn.link,
.login form .btn.link {
  background: #333;
}

.register form .btn.link:hover,
.login form .btn.link:hover {
  background: #0984e3;
}

.register form p,
.login form p {
  padding-top: 2rem;
  font-size: 1.5rem;
  color: #666;
  text-align: center;
  padding-bottom: 1rem;
}

.shopping-cart .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(31rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(31rem, 1fr));
  gap: 2rem;
}

.shopping-cart .box-container .box {
  padding: 2rem;
  border: 0.2rem solid #333;
  background: #fff;
  border-radius: .5rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: .5rem;
  position: relative;
}

.shopping-cart .box-container .box .fa-times {
  position: absolute;
  top: 1rem;
  right: 1.5rem;
  font-size: 2.5rem;
  color: #666;
  cursor: pointer;
}

.shopping-cart .box-container .box .fa-times:hover {
  color: #333;
}

.shopping-cart .box-container .box img {
  height: 12rem;
}

.shopping-cart .box-container .box .content h3 {
  font-size: 1.7rem;
  color: #333;
}

.shopping-cart .box-container .box .content form {
  padding: 1rem 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: .5rem;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.shopping-cart .box-container .box .content form span {
  font-size: 1.5rem;
  color: #666;
}

.shopping-cart .box-container .box .content form input {
  width: 7rem;
  padding: .5rem 1rem;
  color: #666;
  border-radius: .5rem;
  background: #eee;
  font-size: 1.5rem;
}

.shopping-cart .box-container .box .content .price {
  font-size: 2rem;
  color: #0984e3;
}

.shopping-cart .box-container .box .content .price span {
  font-size: 1.5rem;
  color: #666;
  text-decoration: line-through;
}

.shopping-cart .cart-total {
  margin-top: 2rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
  border: 0.2rem solid #333;
  border-radius: .5rem;
  background: #fff;
  padding: 2rem;
  padding-top: 1rem;
}

.shopping-cart .cart-total h3 {
  padding-top: 1rem;
  font-size: 2rem;
  color: #333;
}

.shopping-cart .cart-total h3 span {
  color: #0984e3;
}

.quick-links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 2rem;
  background: #333;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.quick-links .logo {
  font-size: 2.5rem;
  color: #fff;
  font-weight: bolder;
}

.quick-links .logo i {
  color: gold;
}

.quick-links .links a {
  margin: 0 1rem;
  font-size: 1.7rem;
  color: #fff;
}

.quick-links .links a:hover {
  color: gold;
}

.quick-links .share a {
  font-size: 2.5rem;
  color: #fff;
  margin-left: 2rem;
}

.quick-links .share a:hover {
  color: gold;
}

.credit {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 2rem;
  background: #fff;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.credit p {
  font-size: 2rem;
  color: #666;
}

.credit p span {
  color: #0984e3;
}

.credit img {
  height: 4rem;
  -webkit-filter: drop-shadow(0 0 0.1rem #333);
          filter: drop-shadow(0 0 0.1rem #333);
}

@media (max-width: 1200px) {
  html {
    font-size: 55%;
  }
  .header {
    padding: 2rem;
  }
  section {
    padding: 3rem 2rem;
  }
}

@media (max-width: 991px) {
  .quick-links {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    text-align: center;
  }
  .quick-links .links {
    padding: 1rem 0;
  }
  .quick-links .links a {
    display: block;
    font-size: 2rem;
    padding: 1rem 0;
  }
  .quick-links .share a {
    margin: 0 1rem;
  }
  .credit {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    text-align: center;
  }
}

@media (max-width: 768px) {
  #search-btn {
    display: inline-block;
  }
  .header .search-form {
    position: absolute;
    top: 99%;
    left: 0;
    right: 0;
    width: 100%;
    border-radius: 0;
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
    height: 6rem;
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
  }
  .header .search-form.active {
    -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
  }
  .swiper-button-next,
  .swiper-button-prev {
    display: none;
  }
  .home .slide {
    text-align: center;
  }
  .newsletter {
    text-align: center;
  }
  .newsletter .content h3 {
    font-size: 4rem;
  }
  .newsletter .content p {
    font-size: 1.5rem;
  }
}

@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
  .header {
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
  }
  .header .logo {
    display: none;
  }
  .header .icons a,
  .header .icons div {
    margin: 0 1rem;
  }
  .home .slide .image img {
    height: auto;
    width: 100%;
  }
  .arrivals .box-container .box {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-flow: column;
            flex-flow: column;
    gap: 2rem;
    text-align: center;
  }
  .contact form .inputBox input {
    width: 100%;
  }
  .shopping-cart .cart-total {
    text-align: center;
  }
  .shopping-cart .cart-total .btn {
    width: 100%;
  }
}
    </style>

</head>
<body>
    <?php 
   $connect = mysqli_connect('localhost:3306','root','','webcuoiky');
    $sql = "SELECT  DISTINCT category.id_category, category.name_category, home.id_category, category.img_category

    FROM home
    
    INNER JOIN category
    
    ON home.id_category = category.id_category;  ";
    $result_category = mysqli_query($connect,$sql);
    if(isset($_GET['id_category'])){
        $id_category = $_GET["id_category"];
        $sql = "select * from home where id_category = $id_category and date is not null ";
        $result_all_products = mysqli_query($connect,$sql);
        // $result_all_products = mysqli_fetch_array($result_products);
    }else{
        $sql = "SELECT *
        FROM home
        WHERE date IS NOT NULL ";
        $result_all_products = mysqli_query($connect,$sql);
    }
    ?>
    <?php require 'header.php' ?>



<section class="category">

    <h1 class="heading"> shop by <span>category</span> </h1>

    <div class="box-container">

        <?php foreach ($result_category as $item) { ?>
            <a href="?action=select&&id_category=<?php echo $item['id_category'] ?>"><button data-id='<?php echo $item['id_category'] ?>' class="box box1">
                <?php echo '<img  src="data:image/png;base64,' . base64_encode($item['img_category']) . '" />'; ?>
                <h3><?php echo $item['name_category'] ?></h3>
            </button></a>
        <?php } ?>



    </div>

</section>



<section class="products">

    <h1 class="heading"> featured <span>products</span> </h1>

    <div class="box-container " id="box1">

        <?php foreach ($result_all_products as $item) { ?>
            <div class="box">
                <div class="image">
                    <?php echo '<img class="main-img" src="data:image/png;base64,' . base64_encode($item['img']) . '" />'; ?>

                    <?php echo '<img class="hover-img" src="data:image/png;base64,' . base64_encode($item['imghover']) . '" />'; ?>

                    <div class="icons">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <a href="#" class="fas fa-search-plus"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?php echo $item['name'] ?></h3>

                    <div class="price"> <?php echo '$' . $item['price'] - ($item['price'] * $item['sale'] / 100) ?><span> $<?php echo $item['price'] ?></span> </div>

                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        <?php  } ?>
















    </div>

</section>

<!-- products section ends -->

<!-- product banner section starts  -->

<section class="product-banner">

    <h1 class="heading"> <span>deal</span> of the day </h1>

    <div class="box-container">

        <?php foreach ($result_sale as $item) { ?>
            <div class="box">
                <?php echo '<img class="main-img" src="data:image/png;base64,' . base64_encode($item['img']) . '" />'; ?>

                <div class="content">
                    <span>special offer</span>
                    <h3>upto <?php echo $item['sale'] ?>% off</h3>
                    <a href="#" class="btn">shop now</a>
                </div>
            </div>
        <?php } ?>



    </div>

</section>

<!-- product banner section ends -->















<!-- footer section starts  -->

<?php require 'footer.php' ?>

<!-- footer section ends -->




<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script>
    let sideBar = document.querySelector('.side-bar');

    document.querySelector('#menu-btn').onclick = () => {
        sideBar.classList.toggle('active');
    }

    document.querySelector('#close-side-bar').onclick = () => {
        sideBar.classList.remove('active');
    }

    let searchForm = document.querySelector('.search-form');

    document.querySelector('#search-btn').onclick = () => {
        searchForm.classList.toggle('active');
    }

    window.onscroll = () => {
        sideBar.classList.remove('active');
        searchForm.classList.remove('active');
    };

    document.querySelectorAll('.accordion-container .accordion').forEach(accordion => {
        accordion.onclick = () => {
            accordion.classList.toggle('active');
        }
    });

    var swiper = new Swiper(".home-slider", {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper = new Swiper(".review-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        breakpoints: {
            450: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
    $(document).ready(function() {
        function fetch_data(){
            $.ajax({
                url: 'model/Home.php',
                method: 'GET',
                success: function(data){
                    $('#box1').html(data);
                }
            })
        }
        $(".box1").click(function() {
            let id = $(this).data('id');
            // alert(id); 
            $.ajax({
                    type: 'get',
                    url: 'model/Home.php',
                    data: {id:id},
                    dataType:'html',
                })
                


        });
    });
</script>
</body>
</html>