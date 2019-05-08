var gulp = require("gulp");
var sass = require("gulp-sass");
var cssnano = require("gulp-cssnano");
var bourbon = require("bourbon").includePaths;
var responsive = require('gulp-responsive');

sass.compiler = require('node-sass');

var paths = {
    styles: {
        src: ["scss/**/*.scss"],
        dest: "./css"
    },
    images: {
        src: ["img/**/*.{png,jpg}"],
        dest: "./img",  
    }
};

var images = {
    sizes: [
        // {
        //     size: '-thumb',
        //     val: 150,
        // },
        {
            size: '-xs',
            val: 576,
        },
        // {
        //     size: '-sm',
        //     val: 768,
        // },
        // ,{
        //     size: '-md',
        //     val: 992,
        // },{
        //     size: '-lg',
        //     val: 1200,
        // },
        {
            size: '-xl',
            val: 1900,
        }
    ]
}

function img() {
    let imgSizes = [];
    images.sizes.forEach(element => {
        imgSizes.push(
            {
                width: element.val, 
                rename: {
                    suffix: element.size,
                    extname: '.jpg'
                }
        });
        imgSizes.push(
            {
                width: element.val, 
                rename: {
                    suffix: element.size,
                    extname: '.webp'
                }
        });
    });

    return gulp.src(paths.images.src)
    .pipe(responsive({
      '*': imgSizes
    },{
        errorOnEnlargement: false
    }))
    .pipe(gulp.dest(paths.images.dest));
}

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
exports.img = img;

function watch() {
    style();
    gulp.watch(paths.styles.src, style);
}

exports.watch = watch