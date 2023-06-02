// $(".question-wrapper").click( function () {
//     console.log('geclicked');
//     var container = $(this).parents(".accordion");
//     var answer = container.find(".answer-wrapper");
//     var trigger = container.find(".material-icons.drop");
//       var state = container.find(".question-wrapper");
    
//     // answer.animate({height: "toggle"}, 100);
//     answer.slideToggle(100);

//     if (trigger.hasClass("icon-expend")) {
//       trigger.removeClass("icon-expend");
//           state.removeClass("active");
//     }
//     else {
//       trigger.addClass("icon-expend");
//           state.addClass("active");
//     }
    
//     if (container.hasClass("expanded")) {
//       container.removeClass("expanded");
//     }
//     else {
//       container.addClass("expanded");
//     }
//   });

$(".question-wrapper").click(function() {
  console.log('geclicked');
  var container = $(this).parents(".accordion");
  var answer = container.find(".answer-wrapper");
  var trigger = container.find(".material-icons.drop");
  var state = container.find(".question-wrapper");

  if (container.hasClass("expanded")) {
    // Close the currently open dropdown
    answer.slideUp("slow");
    trigger.removeClass("icon-expend");
    container.removeClass("expanded");
  } else {
    // Close all other dropdowns
    $(".accordion").not(container).removeClass("expanded");
    $(".answer-wrapper").slideUp("slow");
    $(".material-icons.drop").removeClass("icon-expend");

    // Open the clicked dropdown
    answer.slideDown("slow");
    trigger.addClass("icon-expend");
    container.addClass("expanded");
  }
});
