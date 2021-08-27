
	$(".owl-carousel").owlCarousel({
    autoplay: true,
    autoplayhoverpause: true,
    autoplaytimeout: 100,
    items: 3,
    nav: true,
    loop: true,
    margin: 30,
    responsive:{
      0:{
          items:1,
          nav:true
      },
      660:{
          items:1,
          nav:false
      },
      1000:{
          items:3,
          nav:true,
          loop:true,
      }
  },
  });
  $( ".owl-prev").html('<img src="./img/a1.png" alt="" width="40px">');
 $( ".owl-next").html('<img src="./img/a2.png" alt="" width="40px">');
  ;
  

  //welcome particles

  particlesJS('particles-js',

  {
  "particles": {
    "number": {
      "value": 66,
      "density": {
        "enable": true,
        "value_area": 1025.908125981517
      }
    },
    "color": {
      "value": "#ccc"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#ccc"
      },
      "polygon": {
        "nb_sides": 6
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.8083770200778445,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 6.33451405615796,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 116.68319678621143,
      "color": "#ccc",
      "opacity": 3.35838410441479224,
      "width": 0.833451405615796
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 1166.8319678621144,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}

);
(jQuery);

function _class(name){
  return document.getElementsByClassName(name);
}
 
let tabPanes = _class("tab-header")[0].getElementsByTagName("div");
 
for(let i=0;i<tabPanes.length;i++){
  tabPanes[i].addEventListener("click",function(){
    _class("tab-header")[0].getElementsByClassName("active")[0].classList.remove("active");
    tabPanes[i].classList.add("active");
    
    _class("tab-indicator")[0].style.top = `calc(80px + ${i*50}px)`;
    
    _class("tab-content")[0].getElementsByClassName("active")[0].classList.remove("active");
    _class("tab-content")[0].getElementsByTagName("div")[i].classList.add("active");
    
  });
}
