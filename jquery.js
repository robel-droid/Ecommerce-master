$(document).ready(function() {
  $('a.external-link').click(function(event) {
    event.preventDefault();

    var url = $(this).attr('href');

    window.open(url, '_blank');
  });
});
