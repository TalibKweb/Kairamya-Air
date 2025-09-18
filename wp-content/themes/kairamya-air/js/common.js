$(window).on("scroll", function () {
  var scrollPos = $(this).scrollTop();
  // console.log('scroll', scroll);
  if (scrollPos > 100) {
    $("header").addClass("fixedHeader");
  } else {
    $("header").removeClass("fixedHeader");
  }
});

// Tabs
$(".tabContent").hide();
$(".tabContent").eq(0).show();
$(".tabList li").eq(0).addClass('active')
$(".tabList li").click(function () {
  const indexVal = $(this).index();
  $(".tabContent").hide();
  $(".tabContent").eq(indexVal).show();
  $(this).siblings('li').removeClass('active');
  $(this).addClass('active');
});
