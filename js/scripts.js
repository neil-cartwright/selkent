$(document).ready(function() {

  $('.glyphicon-arrow-right').each(function() {
    $(this).hide();
  });

  var inview = new Waypoint.Inview({
    element: $('main.page'),
    offset: 150,
    enter: function(direction) {
      $('.glyphicon-arrow-right').addClass('slideInLeft')
    },
    entered: function(direction) {
      $('.glyphicon-arrow-right').addClass('pulse')   },
    exit: function(direction) {
      $('.glyphicon-arrow-right').addClass('slideOutRight')
    },
    exited: function(direction) {
      $('.glyphicon-arrow-right').hide();    }
  })



});
