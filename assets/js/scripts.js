function jsLoaded(){
  const htmlTag = document.querySelector('html')
  htmlTag.classList.remove('no-js')
  htmlTag.classList.add('js')
}

function elementAddAnimate(){
  let elements = document.querySelectorAll('h1, h2, p, .project, .post, img:not(.wp-block-cover__image-background)')
  for(let i = 0; i < elements.length; i++){
      elements[i].classList.add('animate')
  }
}

function elementInViewport() {
  let elements = document.querySelectorAll('.animate');
  let elementClass = 'animated';
  let windowHeight = window.innerHeight || document.documentElement.clientHeight;
  let windowTopPosition = window.scrollY;
  let windowBottomPosition = windowTopPosition + windowHeight;

  for (let i = 0; i < elements.length; i++) {
    let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition;
    let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition;

    if ((windowBottomPosition > elementTopPosition && windowTopPosition < elementBottomPosition) || (windowTopPosition < elementTopPosition && windowBottomPosition > elementTopPosition)) {
      elements[i].classList.add(elementClass);
    } else {
      elements[i].classList.remove(elementClass);
    }
  }
}


function showToTop(){
  const toTopButton = document.getElementById('to-top')

  if(window.scrollY > 350){
      toTopButton.classList.add('show')
  } else{
      toTopButton.classList.remove('show')
  }
}

document.addEventListener('DOMContentLoaded', function(){
  jsLoaded()
  elementAddAnimate()
  elementInViewport()
})

document.getElementById('to-top').addEventListener('click', function(){
      document.body.scrollTop = 0
      document.documentElement.scrollTop = 0
})

document.addEventListener('scroll', function(){
   showToTop()   
   elementInViewport()
})

document.addEventListener('resize', function(){
  elementInViewport()
})




let angle = 0;
function galleryspin(sign) {
  const spinner = document.querySelector("#spinner");
  if (!sign) { angle += 45; } else { angle -= 45; }
  spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
}





/*
document.addEventListener("scroll", function() {
  const layers = document.querySelectorAll('.parallax-layer');
  const windowHeight = window.innerHeight;

  layers.forEach((layer, index) => {
    const layerTop = layer.getBoundingClientRect().top;

  
    if (layerTop < windowHeight - 100) { 
      layer.classList.add('visible');

      
      if (index === 3) { 
        layer.querySelector('img').style.transform = 'scale(1.05)'; 
      }
    } else {
      layer.classList.remove('visible');
      if (index === 3) {
        layer.querySelector('img').style.transform = 'scale(1)';
      }
    }
  });
});
*/


document.addEventListener('DOMContentLoaded', function() {
  var animatedSpans = document.querySelectorAll('.animated-text span');

  animatedSpans.forEach(function(span) {
      
      span.addEventListener('animationstart', function() {
        
          span.classList.add('transparent');
      });

     
      span.addEventListener('animationend', function() {
         
          span.classList.remove('transparent');

          
          span.style.color = 'var(--base-color)';
      });
  });
});


function berechneExtensions() {
  console.log("bext");

  const typ = document.getElementById("typ").value;
  const haardicke = document.getElementById("haardicke").value;
  let result;

  if (typ === "verdichtung") {
      if (haardicke === "fein") {
          result = 40;
      } else if (haardicke === "mittel") {
          result = 60;
      } else {
          result = "Unbekannte Haardicke für Haarverdichtung.";
      }
  } else if (typ === "verlängerung") {
      if (haardicke === "fein") {
          result = 100;
      } else if (haardicke === "mittel") {
          result = 140;
      } else if (haardicke === "dick") {
          result = 160;
      } else {
          result = "Unbekannte Haardicke für Haarverlängerung.";
      }
  } else {
      result = "Unbekannter Typ.";
  }

  if (typeof result === "number") {
      showResult(`Du benötigst ${result} Extensions.`);
  } else {
      alert(result);
  }
}

function showResult(message) {
  const resultElement = document.getElementById("result");
  resultElement.textContent = message;
  resultElement.style.display = "block";
}


document.addEventListener("scroll", function() {
  const textElement = document.querySelector(".pencil-text");
  const textPosition = textElement.getBoundingClientRect().top;
  const screenHeight = window.innerHeight;

  if (textPosition < screenHeight && textPosition > 0) {
      textElement.classList.add("circled");
  } else {
      textElement.classList.remove("circled");
  }
});
