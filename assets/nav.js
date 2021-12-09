//main nav 
// window.addEventListener("scroll", function() {
//   var el = document.querySelector("a[href='#home']");

//   if((el.classList.contains("active"))) {
//       document.querySelector('.main-navigation').classList.remove("nav-scroll");
//   } else {
//       document.querySelector('.main-navigation').classList.add("nav-scroll");
//   }
   
//   });

window.addEventListener('load', function () {
  


document.querySelector('.nav-ico').addEventListener("click", function() {
  document.querySelector('.main-nav').classList.toggle("act");
 

document.querySelector('.main-nav').addEventListener("click", function() {
  document.querySelector('.main-nav').classList.remove("act");
});
 



});




})
 
//scroll spy
setTimeout(function()
 {
  'use strict';

  var section = document.querySelectorAll(".section");
  var sections = {};
  var i = 0;

  Array.prototype.forEach.call(section, function(e) {
    sections[e.id] = e.offsetTop;
  });

  window.onscroll = function() {
    var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

    for (i in sections) {
      if (sections[i] <= scrollPosition) {
        document.querySelector('.active').setAttribute('class', ' ');
        document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
      }
    }
  };
}
, 500);


  