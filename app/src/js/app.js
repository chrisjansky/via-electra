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

/* Barba.js */
Barba.Pjax.init();
Barba.Prefetch.init();

let barbaClicked = false;

Barba.Dispatcher.on('linkClicked', function() {
  barbaClicked = true;
});

addEventListener('popstate', function (event) {
  barbaClicked = false;
})

/* Event based here */
Barba.Dispatcher.on('newPageReady', function() {
  veLazy.init();
  veSmoothScroll.attach();
  veToggle.attach();
});

/* Direct DOM manupulation here */
Barba.Dispatcher.on('transitionCompleted', function() {
  veCountUp.init();
  veGrep.parse();
});

var veTransition = Barba.BaseTransition.extend({
  start: function() {
    Promise
      .all([this.newContainerLoading, this.exit()])
      .then(this.enter.bind(this));
  },
  exit: function() {
    var container = this.oldContainer;

    this.oldContainer.classList.toggle('page--exit');

    return new Promise(function(resolve, reject) {
      container.addEventListener('transitionend', function() {
        resolve();
      })
    });
  },
  enter: function() {
    var instance = this;

    /* Don't change scroll position if back button pressed */
    if (barbaClicked) {
      window.scroll({
        top: 0,
        behaviour: 'smooth'
      })
    }
    instance.newContainer.classList.toggle('page--enter');

    /* After $duration--l has passed */
    setTimeout(function() {
      instance.newContainer.classList.remove('page--enter');
    }, 500);

    this.done();
  }
});

Barba.Pjax.getTransition = function() {
  return veTransition;
}
