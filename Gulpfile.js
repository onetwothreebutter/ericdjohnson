var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var gulpRename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sassdoc = require('sassdoc');

var input = './src/**/*.sass';
var output = './src/';

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

gulp.task('sass', function () {
  return gulp
    // Find all `.scss` files from the `stylesheets/` folder
    .src(input)
    //init sourcemaps
    .pipe(sourcemaps.init())
    // Run Sass on those files
    .pipe(sass(sassOptions).on('error', sass.logError))
    //autoprefix
    .pipe(autoprefixer())
    // Write the resulting CSS in the output folder
    .pipe(changeSassDirToCss())
    .pipe(gulp.dest(output));
});

function changeSassDirToCss () {
    return gulpRename(function (path) {
        path.dirname = path.dirname.replace('sass', 'css')
    });
}


var sassdocOptions = {
  dest: './dist/sassdoc'
};

//sassdoc takes longer, so split into own task
gulp.task('sassdoc', function () {
  return gulp
    .src(input)
    .pipe(sassdoc(sassdocOptions))
    .resume();
});


gulp.task('watch', function() {
  return gulp
    // Watch the input folder for change,
    // and run `sass` task when something happens
    .watch(input, ['sass'])
    // When there is a change,
    // log a message in the console
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});

gulp.task('default', ['sass', 'watch' /*, possible other tasks... */]);