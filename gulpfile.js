const { watch, src, dest, series, parallel } = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

function cssTask() {
  return src('./theme/scss/b4st.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' })).on('error', sass.logError)
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write('.'))
    .pipe(dest('./theme/css'))
}

function watchFiles() {
  watch('./theme/scss/**/*.scss', parallel(cssTask));
};

exports.default = parallel(cssTask, watchFiles);