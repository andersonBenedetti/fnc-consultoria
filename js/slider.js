document.addEventListener("DOMContentLoaded", function () {
  const mainCarousel = new Swiper(".main-carousel", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    speed: 1000,
  });

  const customersCarousel = new Swiper(".customers-carousel", {
    loop: true,
    slidesPerView: 2,
    spaceBetween: 0,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    speed: 1000,
    breakpoints: {
      768: {
        slidesPerView: 5,
      },
    },
  });

  const solutionsCarousel = new Swiper(".solutions-carousel", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    speed: 1000,
    breakpoints: {
      768: {
        slidesPerView: 2.4,
      },
    },
  });
});
