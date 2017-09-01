// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('themes/dyna_theme/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('themes/dyna_theme/css'))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('themes/dyna_theme/scss/*.scss', ['sass']);
})