module.exports = function() {
  var
    activeClass = "countup--is-active",
    countObj = document.querySelectorAll("[data-countup]");

  if (countObj !== null) {
    for (var i = 0; i < countObj.length; i++) {
      var
        countWaypoint = new Waypoint({
        element: countObj[i],
        handler: function(direction) {
          if (!this.element.classList.contains(activeClass)) {
            var
              countEl = this.element.querySelector("[data-value]"),
              endVal = countEl.dataset.value,
              countAnim = new CountUp(countEl, 0, endVal, null, 4);

            this.element.classList.add(activeClass);
            countAnim.start();
          }
        },
        offset: "70%"
      });
    }
  }
}
