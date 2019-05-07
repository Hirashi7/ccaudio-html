var gulp = require("gulp");
var sass = require("gulp-sass");
var cssnano = require("gulp-cssnano");
var bourbon = require("bourbon").includePaths;

sass.compiler = require('node-sass');

var paths = {
    styles: {
        src: ["scss/**/*.scss"],
        dest: "./css"
    }
};

var supported = [
    'last 2 versions',
    'safari >= 8',
    'ie >= 9',
    'ff >= 20',
    'ios 6',
    'android 4'
];

function style() {
    return gulp
        .src(paths.styles.src)
        .pipe(sass({
            includePaths: [bourbon]
        }))
        .on("error", sass.logError)
        .pipe(cssnano({
            autoprefixer: {
                browsers: supported,
                add: true
            }
        }))
        .pipe(gulp.dest(paths.styles.dest));
}

exports.style = style;

function watch() {
    style();




    gulp.watch(paths.styles.src, style);
}

exports.watch = watch