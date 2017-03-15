(function() {
  'use strict';

  var gulp = require('gulp');
  var minifyCSS = require('gulp-minify-css');
  var sass = require('gulp-sass');
  var browserSync = require('browser-sync').create();
  var sourcemaps = require('gulp-sourcemaps');
  var autoprefixer = require('gulp-autoprefixer');

  gulp.task('compileStyle', function(){
    gulp.src(['./src/*.scss', './src/**/*.scss'])
      //.pipe(sourcemaps.init())
      .pipe(sass())
      .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
      }))
      .pipe(minifyCSS())
      //.pipe(sourcemaps.write())
      .pipe(gulp.dest('./src'))
      .pipe(browserSync.stream());
  });

 

  gulp.task('server', ['compileStyle'], function() {
    browserSync.init({
      proxy: 'localhost:8000'
    });
    gulp.watch(['./src/*.scss', './src/**/*.scss'], ['compileStyle']);
  });

  gulp.task('default', ['server']);

})();