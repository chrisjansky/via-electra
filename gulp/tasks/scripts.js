module.exports = function(config, gulp, plugins, browserSync, browserify, babelify, watchify, vinyl, beepbeep) {

  gulp.task('scripts', function() {
    var scriptsWatch = 
      watchify(
        browserify({
          entries: config.dev.jsBundle
        })
        .transform(babelify, {
          presets: ['es2015']
        })
      );

    scriptsWatch.on('update', scriptsBundle);

    function scriptsBundle() {
      return scriptsWatch.bundle()

        .on('error', function (error) {
          beepbeep();
          console.log(error.message);
          this.emit('end');
        })

        .pipe(vinyl('bundle.js'))

        .pipe(gulp.dest(config.dev.tempRoot))

        .pipe(browserSync.stream({
          once: true
        }));
    }

    return scriptsBundle();
  });

}
