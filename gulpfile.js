var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    concatcss = require('gulp-concat-css'),
    clean = require('gulp-clean-dest'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    del = require('del');

gulp.task('sass', function(){
    return sass('style.scss', { style: 'expanded' })
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest('css'))
    .pipe(minifycss())
    .pipe(gulp.dest('css'))
});

gulp.task('clean', function () {
    return gulp.src('style.scss', {read: false})
        .pipe(clean('style.scss'))
        .pipe(gulp.dest('./'));
});

gulp.task('css', function(){
    return gulp.src(['css/main.min.css', 'css/animations/animations.css'])
    .pipe(concatcss('final.css'))
    .pipe(gulp.dest('css'))
    .pipe(rename({suffix:'.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('css'))
});

gulp.task('scripts', function(){
    return gulp.src(['js/ux.js', 'js/fonts.js'])
    .pipe(concat('final.js'))
    .pipe(gulp.dest('js'))
    .pipe(rename({suffix:'.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('js'))
});

gulp.task('images', function(){
    return gulp.src('images/**/')
        .pipe(imagemin({optimizationLevel: 3}))
        .pipe(gulp.dest('imgs.min'));
});

gulp.task('default', ['sass', 'scripts', 'css', 'images']);