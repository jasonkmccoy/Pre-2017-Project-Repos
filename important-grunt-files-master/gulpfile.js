/* See https://github.com/gulpjs/gulp/blob/master/docs/getting-started.md#getting-started */
var gulp = require('gulp'),
    uglify = require('gulp-uglify');

gulp.task('minify', function() {
    gulp.src('js/app.js')
        .pipe(uglify())
        .pipe(gulp.dest('build'))
});
