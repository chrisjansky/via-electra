module.exports = function() {
  var
    jsHeadroom = document.getElementById("js-headroom");

  var veHeadroom = new Headroom(jsHeadroom, {
    offset: 100,
    "tolerance": {
      down: 150,
      up: 100
    }
  }).init();
}
