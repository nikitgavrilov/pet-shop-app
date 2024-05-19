$(document).ready(function () {
  $(".slider").slick({
    arrows: true,
    slidesToShow: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
});
