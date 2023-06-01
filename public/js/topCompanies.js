var logotimeline = new TimelineMax({repeat:-1});
logotimeline.staggerTo(".logo-grid .column", 2, {onComplete:tweenComplete, onCompleteParams:["{self}"]}, 0.1);

function tweenComplete(tween) {
  var column = tween.target;
  var activeItem = $(column).find('.active');
  
  var nextActiveItem = activeItem.next();
  if (typeof nextActiveItem.html() === 'undefined'){
    nextActiveItem = $(column).find('.grid-logo:first');
  }

  activeItem.removeClass('active'); 
  nextActiveItem.addClass('active');
}