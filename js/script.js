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
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("js-content").classList.add("scrolled");
  } else {
    document.getElementById("js-content").classList.remove("scrolled");
  }
}