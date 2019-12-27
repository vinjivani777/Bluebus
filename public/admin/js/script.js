$(document).ready(function () {
  $('input[type=number]').on('blur', function (e) {
    $(this).off('wheel');
  }).on('keydown', function (e) {
    if (e.which == 38 || e.which == 40)
      e.preventDefault();
  }).on('focus', function (e) {
    $(this).on('wheel', function (e) {
      e.preventDefault();
    });
  });
  $('[data-toggle="tooltip"]').tooltip();
});