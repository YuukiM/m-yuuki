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