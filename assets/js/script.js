
$('.carousel').carousel({
  interval: 5000
});
$(document).ready( function () {
  $('#dropdownMenuButton').on('show.bs.dropdown', function () {
    alert('hlla');
  })
	 $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
  }
  var $subMenu = $(this).next('.dropdown-menu');
  $subMenu.toggleClass('show');
  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass('show');
  });
  return false;
});

    //validamos los campos
 $("#sendMessageButton").on("click", function(e){
  e.preventDefault();
  var nombre = $("#name").val();
  var tellefono = $("#phone").val();
  var email = $("#email").val();
  var estadousuario = $("#message").val();
  
  var enviarDatos = [];
  enviarDatos.push({"nombre":nombre,"tel":tellefono,"mail":email,"edo":estadousuario});
  var joinData = {"datos":enviarDatos};
  var sentCorreo = JSON.stringify(joinData);

    $.ajax({
      url: "views/modules/ajax.php",
      method:"POST",
      data:{"datosSent":sentCorreo},
      cache:false,
      beforeSend: function(){
        $("#rollWhite").html('<div><img src="views/images/ajax-loader (1).gif"  width="100px" height="100px" /></div>');
      },
      success:function(envio){
        console.log(envio);
        if(envio == 1){
          alert("hola");
          $("#success").html('<div class="alert alert-success" role="alert">CORREO ENVIADO GRACIAS</div>');
        }else{
          alert("nop");
          $("#success").html('<div class="alert alert-success" role="alert">SUCEDIO UN ERROR INTENTALO MAS TARDE</div>');          
        }
        }
    });
 });
});
