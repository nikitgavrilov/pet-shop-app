$(document).ready(function () {
  function scrollToSection(sectionId) {
    const top = $(sectionId).offset().top;
    $("html, body").animate(
      {
        scrollTop: top,
      },
      500
    );
  }

  $("#popular-btn").on("click", function () {
    scrollToSection("#popular-section");
  });
  $("#feedback-btn").on("click", function () {
    scrollToSection("#feedback-section");
  });
  $("#footer-btn").on("click", function () {
    scrollToSection("#first-section");
  });
});
