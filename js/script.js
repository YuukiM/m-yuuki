const elements = document.querySelectorAll('.js-fade-in');
const fadeIn = function() {
  for (let i = 0; i < elements.length; i++) {
    const element = elements[i];
    const rect = element.getBoundingClientRect();
    const viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    if (rect.top <= viewHeight) {
      element.classList.add('visible');
    }
  }
};
document.addEventListener('scroll', fadeIn);

window.addEventListener("scroll", function() {
  var element = document.getElementById("element");
  var shrink = window.scrollY > 0;
  if (shrink) {
    element.classList.add("shrink");
  } else {
    element.classList.remove("shrink");
  }
});


function scrollFunction() {
  let $content = document.getElementById("js-content");
  let $body = document.getElementById("body");
  if ($body.classList.contains("home-style-90s")) {
    //nothing
  } else {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      $content.classList.add("scrolled");
    } else {
      $content.classList.remove("scrolled");
    }
  }
}

function eraSwitcher90() {
  document.getElementById("body").classList.add("home-style-90s");
}
function eraSwitcher20() {
  document.getElementById("body").classList.remove("home-style-90s");
}