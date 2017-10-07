// Slider 
$('.carousel').carousel({
	interval:3000,
	pause:"hover"
})

// Mapa
  function initMap() {
        var uluru = {lat: 6.991912399999999, lng: -73.06812639999998};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru,
          disableDefaultUI:true
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          icon: "public/img/mapa.png"
        });
      }


// scroll
// click , lugar
// scroll boton de  subir
document.querySelector(".subir").addEventListener("click",function(){
   document.querySelector(".contenedor").scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
})


// ir a la modal
document.querySelector(".btn-inicio").addEventListener("click",function(){
   document.querySelector(".slider").scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
})

// ir a la  informacion de la  pagina
document.querySelector(".btn-datos").addEventListener("click",function(){
   document.querySelector(".info").scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
})

// ir al equipo
document.querySelector(".btn-equipo").addEventListener("click",function(){
   document.querySelector(".nuestro-equipo").scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
})

// ir al pie de pagina 
document.querySelector(".btn-contacto").addEventListener("click",function(){
   document.querySelector(".contacto").scrollIntoView({ 
    behavior: 'smooth',
    block: 'start'
  });
})

// Aparecer y Desaparecer el boton 
window.addEventListener("scroll",function(e){
  let yPos = document.documentElement.scrollTop || document.body.scrollTop;

  if (yPos> 480) {
    if (document.querySelector(".subir").style.visibility !="visible") {
      document.querySelector(".subir").style.visibility="visible";
    }
    
  }
  else{
    if ( document.querySelector(".subir").style.visibility!="hidden") {
       document.querySelector(".subir").style.visibility="hidden";
    }
    
  }
})

// Hacer que el menu siempre este visible
let nav = document.querySelector('nav');
let offSetTop = nav.offsetTop;

let afterNavSec = document.querySelector('section[class="slider"]');

window.addEventListener("scroll", function(e){

  let yPos = document.documentElement.scrollTop || document.body.scrollTop;

  if (yPos >= offSetTop) {

    with (nav.style) {
      position = 'fixed';
      top = '0px';
      backgroundColor = 'white';
      zIndex = 1;
    }

    let navCompHeight = window.getComputedStyle(nav).height;

    with (afterNavSec.style) {
      paddingTop = navCompHeight;
    }

  } else {

    if (nav.style.position === 'fixed') {

      with (nav.style) {
        position = 'static';
      }

      with (afterNavSec.style) {
        paddingTop = '0px';
      }

    }

  }

});