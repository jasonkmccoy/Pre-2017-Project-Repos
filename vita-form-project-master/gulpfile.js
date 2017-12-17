/*!
 * Vita Database Software Project Gulpfile
 * http://domco.us
 * @author Jason McCoy
 */
var basePaths = {
    src: 'app/assets/',
    sass: 'src/scss/',
    js: 'app/assets/',
    img: 'app/assets/',
    dest: 'app-production/assets/',
    css: 'app/assets/',
    bower: 'bower_components/',
    sprites: 'app/assets/img/',
};
var paths = {
    images: {
        src: basePaths.src + 'img/',
        img: basePaths.img + 'img/min/',
        dest: basePaths.dest + 'img/min/'
    },
    scripts: {
        src: basePaths.src + 'js/',
        js: basePaths.js + 'js/min/',
        dest: basePaths.dest + 'js/min/'
    },
    styles: {
        src: basePaths.sass + 'scss/minified-sass-files/',
        css: basePaths.css + 'css/min/',
        dest: basePaths.src + 'css/min/'
    },
    sprite: {
        src: basePaths.sprites + 'sprites/*',
        src: basePaths.dest + 'img/sprites/*'
    }
};

var appFiles = {
    styles: paths.styles.sass + '**/*.scss',
    scripts: [paths.scripts.src + 'scripts.js']
};

var vendorFiles = {
    styles: '',
    scripts: ''
};

var spriteConfig = {
    imgName: 'sprites.png',
    cssName: '_sprites.scss',
    imgPath: paths.images.dest.replace('app-production', '') + 'sprite.png' // Gets put in the css
};

/*
    Let the magic begin
*/

var gulp = require('gulp');

var es = require('event-stream');
var gutil = require('gulp-util');

var plugins = require("gulp-load-plugins")({
    pattern: ['gulp-*', 'gulp.*'],
    replaceString: /\bgulp[\-.]/
});

// Allows gulp --dev to be run for a more verbose output
var isProduction = true;
var sassStyle = 'compressed';
var sourceMap = false;

if (gutil.env.dev === true) {
    sassStyle = 'expanded';
    sourceMap = true;
    isProduction = false;
}

var changeEvent = function(evt) {
    gutil.log('File', gutil.colors.cyan(evt.path.replace(new RegExp('/.*(?=/' + basePaths.src + ')/'), '')), 'was', gutil.colors.magenta(evt.type));
};

gulp.task('css', function() {

    var sassFiles = gulp.src(appFiles.styles)
        .pipe(plugins.rubySass({
        style: sassStyle,
        sourcemap: sourceMap,
        precision: 2
    }))
        .on('error', function(err) {
        new gutil.PluginError('CSS', err, {
            showStack: true
        });
    });

    return es.concat(gulp.src(vendorFiles.styles), sassFiles)
        .pipe(plugins.concat('style.min.css'))
        .pipe(plugins.autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4', 'Firefox >= 4'))
        .pipe(isProduction ? plugins.combineMediaQueries({
        log: true
    }) : gutil.noop())
        .pipe(isProduction ? plugins.cssmin() : gutil.noop())
        .pipe(plugins.size())
        .pipe(gulp.dest(paths.styles.dest));
});

gulp.task('scripts', function() {

    gulp.src(vendorFiles.scripts.concat(appFiles.scripts))
        .pipe(plugins.concat('scripts.js'))
        .pipe(isProduction ? plugins.uglify() : gutil.noop())
        .pipe(plugins.size())
        .pipe(gulp.dest(paths.scripts.dest));

});

/*
    Sprite Generator
*/
gulp.task('sprite', function() {
    var spriteData = gulp.src(paths.sprite.src).pipe(plugins.spritesmith({
        imgName: spriteConfig.imgName,
        cssName: spriteConfig.cssName,
        imgPath: spriteConfig.imgPath,
        cssOpts: {
            functions: false
        },
        cssVarMap: function(sprite) {
            sprite.name = 'sprite-' + sprite.name;
        }
    }));
    spriteData.img.pipe(gulp.dest(paths.images.dest));
    spriteData.css.pipe(gulp.dest(paths.styles.src));
});

gulp.task('watch', ['sprite', 'css', 'scripts'], function() {
    gulp.watch(appFiles.styles, ['css']).on('change', function(evt) {
        changeEvent(evt);
    });
    gulp.watch(paths.scripts.src + '*.js', ['scripts']).on('change', function(evt) {
        changeEvent(evt);
    });
    gulp.watch(paths.sprite.src, ['sprite']).on('change', function(evt) {
        changeEvent(evt);
    });
});

gulp.task('default', ['css', 'scripts']);