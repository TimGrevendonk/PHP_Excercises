const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const connect = require('gulp-connect-php');
const sass = require('gulp-dart-sass');
const plumber = require('gulp-plumber');
const prefix = require('gulp-autoprefixer');
const notify = require('gulp-notify');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const mqpacker = require('@lipemat/css-mqpacker');
const newer = require('gulp-newer');

gulp.task('browser-sync', function () {
    connect.server({}, function () {
        browserSync.init({
            proxy: 'php_project.test',
            port: 5500,
            ui: {
                port: 5501
            }
        });
    });

    gulp.watch('./scss/**/*.scss', gulp.series('sass'));
    gulp.watch('./**/*.{html,css,js,php}').on('change', browserSync.reload);
});

// Compile sass into CSS (/public_html/css/) & auto-inject into browser
gulp.task('sass', function () {
    let processors = [
        mqpacker({sort: true})
    ];
    return gulp.src('./scss/**/*.scss')
        .pipe(plumber({
            errorHandler: notify.onError({
                title: 'SASS compile error!',
                message: '<%= error.message %>'
            })
        }))
        .pipe(sourcemaps.init())
        // outputStyle: nested (default), expanded, compact, compressed
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(prefix("last 2 versions"))
        .pipe(postcss(processors))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./public_html/css'));
});

// Copy JS-files
gulp.task('js', function () {
    return gulp.src(['node_modules/jquery/dist/jquery.min.js'])
        .pipe(newer('./public_html/js'))
        .pipe(gulp.dest('./public_html/js'));
});

gulp.task('default', gulp.series('js', 'sass', 'browser-sync'));
