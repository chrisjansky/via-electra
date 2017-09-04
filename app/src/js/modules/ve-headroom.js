module.exports = function() {
  new Headroom(document.getElementById("js-headroom"), {
    offset: 100,
    tolerance: {
      down: 150,
      up: 100
    }
  }).init();
}
