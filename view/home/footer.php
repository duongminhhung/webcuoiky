<section class="quick-links">

    <a href="action=index" class="logo"> <i class="fas fa-store"></i> shopie </a>

    <div class="links">
        <a href="?action=index"> home </a>
        <a href="?action=about"> about </a>
        <a href="?action=products"> products </a>
        <a href="?action=contact"> contact </a>
        <a href="?action=login"> login </a>
        <a href="?action=logout">việt </a>
        <a href="?action=cart"> cart </a>
    </div>

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://github.com/duongminhhung" class="fab fa-github"></a>
        <a href="https://www.instagram.com/_wyn.trang_/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
    </div>

</section>

<section class="credit">

    

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script>
    let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = () =>{
    sideBar.classList.toggle('active');
}

document.querySelector('#close-side-bar').onclick = () =>{
    sideBar.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
}

window.onscroll = () =>{
    sideBar.classList.remove('active');
    searchForm.classList.remove('active');
};

document.querySelectorAll('.accordion-container .accordion').forEach(accordion =>{
    accordion.onclick = () =>{
        accordion.classList.toggle('active');
    }
});

var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCursor:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    grabCursor:true,
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
</script>