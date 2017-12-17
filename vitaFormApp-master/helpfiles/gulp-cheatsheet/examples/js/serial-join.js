var gulp = require('gulp');
var streamqueue = require('streamqueue');
var less = require('gulp-less');
var cssimport = require('gulp-cssimport');
var autoprefier = require('gulp-autoprefixer');

gulp.task('css', function(){
    return streamqueue({ objectMode: true },
        gulp.src('./css/src/first.less')
            .pipe(less()),
        gulp.src('./css/src/second.css')
            .pipe(cssimport())
            .pipe(autoprefixer('last 2 versions')))
        .pipe(concat('app.css'))
        .pipe(minifyCss())
        .pipe(gulp.dest('./css/'))
});