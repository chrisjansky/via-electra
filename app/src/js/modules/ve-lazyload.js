module.exports = {
  init: (function instance() {
    var loadImages = new LazyLoad({
      elements_selector: "[data-src]",
      threshold: 0
    });

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
