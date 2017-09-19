module.exports = {
  init: (function instance() {
    var loadImages = new LazyLoad({
      elements_selector: "[data-src]",
      data_src: "src"
    });

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
