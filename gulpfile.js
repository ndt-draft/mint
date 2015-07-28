var gulp = require('gulp'),
	less = require('gulp-less'),
	watch = require('gulp-watch'),
	util = require('gulp-util');

// less task
gulp.task('less', function () {
  return gulp.src('./assets/less/main.less')
    .pipe(less()).on('error', function (err) {
    	util.log(err);
    	this.emit('end');
    })
    .pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', function () {
	watch('./assets/less/**/*.less', function () {
		gulp.start('less');
	});
});