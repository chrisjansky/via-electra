var activeClass = "countup--is-active";

module.exports = {
  init: (function instance() {
    var countObj = document.querySelectorAll("[data-countup]");

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

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
