/*** BUILD AND SERVE ***/
var gulp        = require('gulp'),
    browserSync = require('browser-sync').create(),
    replace     = require('gulp-replace'),
    sourcemaps  = require('gulp-sourcemaps');

/*** JAVASCRIPT ***/
const babel  = require('gulp-babel'),
    concat = require('gulp-concat');
//const uglify = require('gulp-uglify');

/*** CSS and IMAGE ***/
var sass         = require('gulp-sass'),
    bourbon      = require('node-bourbon'),
    minifyCss    = require('gulp-minify-css'),
    autoprefixer = require('gulp-autoprefixer');
//var realFavicon = require('gulp-real-favicon');


/*********
 * MAIN GULP TASK
 */
gulp.task('watch', function () {
    gulp.run('browser-sync');

    gulp.watch(["sass/**/*.scss"], function () {
        gulp.run('styles')
    });

    gulp.watch(["js/**/*.js"], function () {
        gulp.run('js')
    });

    gulp.watch(["js/app.min.js", "../**/*.php"], function () {
        browserSync.reload();
    });
});


/**********
 * SETUP TEST SERVER AND WATCHER
 */
gulp.task('browser-sync', function () {
    return browserSync.init({
        proxy    : 'loc.cardinalfinancial.com',
        ghostMode: false,
        open     : false,
        notify   : false
    });
});


/*********
 * COMPILE ES2015 to JS ES5
 * concat files
 */
gulp.task('js', function () {
    return gulp.src([
        'js/source/**/*.js',
    ])
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: 'es2015'
        }))
        .on('error', function (e) {
            console.log(e);
        })
        .pipe(concat('app.min.js'))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('js/'));
});


/*********
 * COMPILE SCSS to CSS
 */
gulp.task('styles', function () {
    gulp.src([
        'sass/**/*.scss'
    ])
        .pipe(sourcemaps.init())
        .pipe(sass({
            // includePaths: ['styles', 'node_modules/bootstrap-sass/assets/stylesheets/'].concat(bourbon.includePaths)
        }))
        .on('error', function (e) {
            console.log(e);
        })
        .pipe(autoprefixer({
            browsers: ['last 3 versions']
        }))
        .pipe(minifyCss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.reload({ stream: true }))
});
