$(".card").mouseover(function () {
    $(this).css("cursor", "pointer");
    $(this).addClass("hover");
    $(this).find(".hidden").removeClass("hidden");
});

$(".card").mouseleave(function () {
    $(this).removeClass("hover");
    $(this).find(".card-footer").addClass("hidden");
});


$(".edit").on("click", function (e) {
    $(this).parent().parent().find(".cardFront").addClass("hide");
    $(this).parent().parent().find(".footerFront").addClass("hide");
    $(this).parent().parent().find(".cardBack").removeClass("hide");
  });

  $(".save").on("click", function (e) {
    $(this).parent().parent().find(".cardFront").removeClass("hide");
    $(this).parent().parent().find(".footerFront").removeClass("hide");
    $(this).parent().parent().find(".cardBack").addClass("hide");
  });

  $(".cancel").on("click", function (e) {
    $(this).parent().parent().find(".cardFront").removeClass("hide");
    $(this).parent().parent().find(".footerFront").removeClass("hide");
    $(this).parent().parent().find(".cardBack").addClass("hide");
  });

