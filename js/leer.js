$(function*(){

});

function leerCiudad(){
  var dato =$("Ciudad").val();

  $.ajax({
    type:"GET",
    url:"buscador.php",
    data:{"dato":dato},
    success:function(r){
      $('#muestralista').html(r);
    }



});
}
