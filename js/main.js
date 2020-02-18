(function () {

  "use strict";
  var regalo = document.getElementById('regalo');
  document.addEventListener('DOMContentLoaded', function () {

    var map = L.map('mapa').setView([20.674678, -103.38683], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    L.marker([20.674678, -103.38683]).addTo(map)
        .bindPopup('GDLWEBCAMP 2020 <br> boletos ya disponibles')
        .openPopup();
        // .bindTooltip('Un tooltip')
        // .openTooltip();
    //campo datos usuarios
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');
    //campo pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    //botones y divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');
    //extras
    var etiquetas = document.getElementById('etiquetas');
    var camisas = document.getElementById('camisa_evento');

    calcular.addEventListener('click', calcularMontos);
    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);

    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);

      function validarCampos(){
        if(this.value == '') {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Este campo es obligatorio";
          this.style.border ='1px solid red'; 
          errorDiv.style.border = '1px solid red';
        } else {
          errorDiv.style.display = 'none';
          this.style.border = '1px solid #cccccc';
        }
      }

      function validarMail(){
        if(this.value.indexOf("@") > -1) {
          errorDiv.style.display = 'none';
          this.style.border = '1px solid #cccccc';
        }
        else {
          errorDiv.style.display = "block";
          errorDiv.innerHTML = "Debe tener un arroba";
          this.style.border ='1px solid red'; 
          errorDiv.style.border = '1px solid red';
        }
      }



    function calcularMontos(event) {
      event.preventDefault();
      // console.log("Has hecho click en calcular");
      if (regalo.value === '') {
        alert('Debes elegir un regalo');
        regalo.focus();
      } else {
        var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
          boletosCompletos = parseInt(pase_completo.value, 10) || 0,
          cantCamisa = parseInt(camisas.value, 10) || 0,
          cantEtiquetas = parseInt(etiquetas.value, 10) || 0;
        //  console.log("Boletos dias: " + boletosDia );
        //   console.log("Boletos dias: " + boletosDia );
        var totalPagar = (boletosDia * 30) + (boletos2Dias * 45) + (boletosCompletos * 50) + ((cantCamisa * 10) * .93) + (cantEtiquetas * 2);

        var listadoProductos = [];

        if (boletosDia >= 1) {
          listadoProductos.push(boletosDia + ' Pase por día');
        }
        if (boletos2Dias >= 1) {
          listadoProductos.push(boletos2Dias + ' Pase por 2 días');
        }
        if (boletosCompletos >= 1) {
          listadoProductos.push(boletosCompletos + ' Pase por todos los días');
        }
        if (cantCamisa >= 1) {
          listadoProductos.push(cantCamisa + ' Camisas');
        }
        if (cantEtiquetas >= 1) {
          listadoProductos.push(cantEtiquetas + ' Etiquetas');
        }
        //  console.log(listadoProductos);
        lista_productos.style.display = "block";
        lista_productos.innerHTML = '';
        for (var i = 0; i < listadoProductos.length; i++) {
          lista_productos.innerHTML += listadoProductos[i] + '<br/>';
        }
        //  console.log(totalPagar);

        suma.innerHTML = "$ " + totalPagar.toFixed(2);
      }
    }

    function mostrarDias() {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
        boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
        boletosCompletos = parseInt(pase_completo.value, 10) || 0;

      var diasElegidos = [];
      if (boletosDia > 0) {
        diasElegidos.push('viernes');
      }
      if (boletos2Dias > 0) {
        diasElegidos.push('viernes', 'sabado');
      }
      if (boletosCompletos > 0) {
        diasElegidos.push('viernes', 'sabado', 'domingo');
      }

      for (var i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = "block";
      }
    }

    //console.log("listo");
  }); //DOM CONTENT LOADED
})();

$(function(){
  //programa de conferencias
  $('.programa-evento .info-curso:first').show();
  $('nav.menu-programa  a:first').addClass('activo');
  $('nav.menu-programa a').on('click', function(){
    $('nav.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
  $('.ocultar').hide();
  var enlace= $(this).attr('href');
  //console.log(enlace);
  $(enlace).fadeIn(1000); //es 1 seg
    return false;
  });

  //animaciones para los numeros
  $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6}),1200;
  $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15}),1200;
  $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3}),1500;
  $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9}),1800;
});