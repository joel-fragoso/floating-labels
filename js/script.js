// MOSTRAR/OCULTAR SENHA
$(document).ready(function($) {
  $('#eye').click(function(e) {
    e.preventDefault();
    if ($('#inputPassword').attr('type') == 'password') {
      $('#inputPassword').attr('type', 'text');
      $('#eye').attr('class', 'fas fa-eye');
    } else {
      $('#inputPassword').attr('type', 'password');
      $('#eye').attr('class', 'fas fa-eye-slash');
    }
  });
});
