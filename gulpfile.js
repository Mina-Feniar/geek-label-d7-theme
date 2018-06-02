const gulp        = require('gulp');
const browserSync = require('browser-sync').create();
const sass        = require('gulp-sass');

// Compile Sass & Inject Into Browser
gulp.task('sass', function() {
    return gulp.src(['scss/style.scss'])
        .pipe(sass())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.stream());
});

// Watch Sass & Serve
gulp.task('serve', ['sass'], function() {
    browserSync.init({
        server: "./src"  
    });

    gulp.watch(['scss/*.scss', 'scss/**/*.scss'], ['sass']);
    gulp.watch("js/**.js").on('change',browserSync.reload);
});

// Default Task
gulp.task('default', ['serve']);