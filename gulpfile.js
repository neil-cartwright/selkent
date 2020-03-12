var gulp = require('gulp'),
	watch = require('gulp-watch'),
	browserSync = require('browser-sync').create(),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', function(){
	return gulp.src('./sass/**/*.scss')
		.pipe(autoprefixer())
		.pipe(sass().on('error', sass.logError))
		.pipe(gulp.dest('css'))
		.pipe(browserSync.stream());
});

gulp.task('watch', function() {
	browserSync.init({
		browser: "chrome",
		proxy: "localhost/sitepages/selkent_2017"
	});

	watch('./**/*.php', function() {
		browserSync.reload();
	});

	watch('./**/*.scss', function() {
		gulp.start('sass');
	});
});
