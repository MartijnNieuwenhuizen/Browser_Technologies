var gulp = require('gulp');
var browserSync = require('browser-sync');

gulp.task('sync', function() {
   
    browserSync.init({
        server: {
            startPath: '/',
            open: true
        }, 
        tunnel: "zodan"
    });

});