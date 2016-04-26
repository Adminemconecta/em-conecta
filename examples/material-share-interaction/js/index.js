(function() {
  var close, fab, fabCtr, links, nav, ripple;

  fab = document.querySelector(".fab");

  fabCtr = document.querySelector(".fab-ctr");

  nav = document.querySelector(".nav");

  links = document.querySelector(".links");

  close = document.querySelector(".close");

  ripple = document.querySelector(".ripple");

  fab.addEventListener("click", function() {
    fabCtr.classList.add("active");
    ripple.classList.add("off");
    setTimeout((function() {
      return nav.classList.add("active");
    }), 200);
    return setTimeout((function() {
      fab.classList.add("active");
      return links.classList.add("active");
    }), 150);
  });

  close.addEventListener("click", function() {
    links.classList.remove("active");
    fab.classList.remove("active");
    setTimeout((function() {
      return nav.classList.remove("active");
    }), 200);
    return setTimeout((function() {
      fabCtr.classList.remove("active");
      return ripple.classList.remove("off");
    }), 150);
  });

  balapaCop("Material Share Interaction", "#999");

}).call(this);