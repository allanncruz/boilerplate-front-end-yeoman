var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('default',['sass','js','copyfonts','copy-img','fancy-img','watch']);

gulp.task('sass', function() {
    return gulp.src([
        'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
        'node_modules/owl.carousel/dist/assets/owl.theme.default.min.css',
        'src/scss/*.scss'])
    .pipe(concat('style.min.css'))
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('js', function() {
    return gulp.src([
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/popper.js/dist/umd/popper.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.min.js',
            'node_modules/owl.carousel/dist/owl.carousel.js',
        'node_modules/fancybox/dist/js/jquery.fancybox.js',
            'src/js/*.js'])
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist/js'));
});

gulp.task('copyfonts', function() {
    gulp.src('src/font/**/*')
        .pipe(gulp.dest('dist/fonts'));
});
gulp.task('copy-img', function() {
    gulp.src('src/img/**/*')
        .pipe(gulp.dest('dist/img'));
});
gulp.task('fancy-img', function() {
    gulp.src('node_modules/fancybox/dist/img/**/*')
        .pipe(gulp.dest('dist/img'));
});

gulp.task('watch', function() {
    gulp.watch('src/scss/**/*.scss', ['sass']);
    gulp.watch('src/js/*.js', ['js']);
    gulp.watch('src/font/**/*', ['copyfonts']);
    gulp.watch('src/img/**/*', ['copy-img']);
});
