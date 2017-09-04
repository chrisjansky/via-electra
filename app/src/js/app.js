require('smoothscroll-polyfill').polyfill();

/* Store for later and initialize inside */
var
  veCountUp = require('./modules/ve-countup'),
  veGrep = require('./modules/ve-grep'),
  veLazy = require('./modules/ve-lazyload'),
  veSmoothScroll = require('./modules/ve-smoothscroll'),
  veToggle = require('./modules/ve-toggle');

/* Auto initialize */
require('./modules/ve-headroom')();

Barba.Pjax.init();
Barba.Prefetch.init();

Barba.Dispatcher.on("linkClicked", function() {
});

/* Event based here */
Barba.Dispatcher.on("newPageReady", function() {
  veLazy.init();
  veSmoothScroll.attach();
  veToggle.attach();
});

/* Direct DOM manupulation here */
Barba.Dispatcher.on("transitionCompleted", function() {
  veCountUp.init();
  veGrep.parse();
});
