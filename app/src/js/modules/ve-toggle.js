module.exports = function() {
  var toggleObj = document.querySelectorAll('[data-toggle]');

  for (var i = 0; i < toggleObj.length; i++) {
    toggleObj[i].onclick = function() {
      var
        toggleAttr = this.getAttribute('data-toggle'),
        targetAttr = this.getAttribute('data-target'),
        targetEl = targetAttr ? this.closest(targetAttr) : document.body;

        targetEl.classList.toggle(toggleAttr + '--is-active');
    }
  }
}
