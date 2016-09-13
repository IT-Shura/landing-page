var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minify = require('gulp-clean-css');

gulp.task('sass', function() {
    return gulp.src('src/landing.scss')
        .pipe(sass())
        .pipe(gulp.dest('dist/css'))
        .pipe(rename('landing.min.css'))
        .pipe(minify())
        .pipe(gulp.dest('dist/css'));
});

gulp.task('scripts', function() {
    return gulp.src([
            'src/_js/*.js'
        ])
        .pipe(concat('kube.js'))
        .pipe(gulp.dest('dist/js'))
        .pipe(rename('kube.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

gulp.task('watch', function() {

    //gulp.watch('src/js/*.js', ['scripts']);

    gulp.watch('src/**/*.scss', ['sass']);

});

gulp.task('default', ['sass', 'combine', 'scripts',  'watch']);