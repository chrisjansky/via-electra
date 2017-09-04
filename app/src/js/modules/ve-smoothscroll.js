module.exports = {
  attach: (function instance() {
    var links = document.querySelectorAll("[href^='#']");

    for(var i = 0; i < links.length; i++) {
      var link = links[i];

      link.addEventListener("click", function() {
        var target = this.getAttribute("href");

        document.querySelector(target).scrollIntoView({ behavior: 'smooth' });

        return false;
      });

    }

    /* Return to make later calls possible */
    return instance;
  /* Auto run */
  })()
}
