(function() {
  'use strict';

  var gulp = require('gulp');
  var cleanCSS = require('gulp-clean-css');
  var minifyCSS = require('gulp-minify-css');
  var sass = require('gulp-sass');
  var browserSync = require('browser-sync').create();
  var autoprefixer = require('gulp-autoprefixer');
  var sftp = require('gulp-sftp');

  gulp.task('compileStyle', function(){
    return gulp.src(['./src/*.scss', './src/**/*.scss'])
      .pipe(sass())
      .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
      }))
      .pipe(cleanCSS())
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

  gulp.task('build', ['compileStyle']);


  gulp.task('deploy', ['build'] ,function() {

    var minimist = require('minimist');
    var args = minimist(process.argv.slice(2));

    return gulp.src(['./src/*', './src/**/*'])
        .pipe(sftp({
            host: args.host,
            user: args.user,
            password: args.password,
            remotePath: 'kingwoodchurch.com/wp-content/themes/kingwood-2017'
        }));
  });

})();