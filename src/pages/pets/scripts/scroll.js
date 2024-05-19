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

  $("#footer-btn").on("click", function () {
    scrollToSection("#first-section");
  });
  $("#make-friend-btn").on("click", function () {
    scrollToSection("#friends-section");
  });
});
