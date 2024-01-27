  var gulp = require('gulp');
  var watch = require('gulp-watch');
  var rename = require('gulp-rename');
  var concatJS = require('gulp-concat');
  var concatCSS = require('gulp-concat-css');
  var cleanCSS = require ('gulp-clean-css');
  var clean = require ('gulp-clean');
  var uglify = require ('gulp-uglify');
  const sass = require('gulp-sass')(require('node-sass'));
  
  gulp.task('sass', function () {
    return gulp.src('./_src/scss/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./_src/css'));
  });
  
  gulp.task('concat-css', function() {
    return gulp.src('./_src/css/**/*.css')
      .pipe(concatCSS('./assets/css/dev/theme.css'))
      .pipe(gulp.dest('.'));
  });
  
  gulp.task('minify-css', function() {
    return gulp.src('./assets/css/dev/theme.css')
      .pipe(cleanCSS({compatibility: 'ie8'}))
      .pipe(rename({ suffix: ".min" }))
      .pipe(gulp.dest('./assets/css/production'));
  });
  
  // Concatenate & minify JS
  gulp.task('concat-minify-js', function() {
    return gulp.src('./_src/js/**/*.js')
        .pipe(concatJS('./assets/js/theme.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: ".min" }))
        .pipe(gulp.dest('.'));
  });
  
  gulp.task('compiler', gulp.series(
        // 'sass',
        // 'concat-css',
        // 'minify-css',
        'concat-minify-js'
      )
  );
  
  gulp.task('watch', function() {
    // gulp.watch('./_src/scss/**/*.scss', gulp.series(
    //     'sass',
    //     'concat-css',
    //     'minify-css',
    // ));
    gulp.watch('./_src/js/**/*.js', gulp.series( 'concat-minify-js' ));
  });
  
  gulp.task('default', gulp.series('compiler','watch'));