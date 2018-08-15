'use strict'
//Para evitar copiado de campo correo
$(document).ready(function(){ //evitar copia corte o pegar del campo correo
    $("#correo").bind("cut copy paste", function(e){
      e.preventDefault();
      alert("No se puede cortar, ni copiar este campo");
      $("#correo").bind("contextmenu", function(e){ //evitar menu de click derecho 
        e.preventDefault();
      });
    });
    $("#confirmemail").bind("cut copy paste", function(e){
      e.preventDefault();
      alert("No se puede cortar, ni copiar este campo");
      $("#confirmemail").bind("contextmenu", function(e){ //evitar menu de click derecho 
        e.preventDefault();
      });
    });
  });