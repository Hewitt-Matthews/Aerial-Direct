var gulpfile = require('gulp');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var postcss = require('postcss');
var customProperties = require('postcss-custom-properties');
var fs = require('fs');
var autoprefixer = require('autoprefixer');
var paths = {
    src: 'assets',
    distCSS: 'assets/css/',
    distJS: 'assets/js/',
    srcCSS: 'assets/_css/site.css',
    srcJS: 'assets/_js/*.js',
};
cssDevelopment = function(){
    return gulpfile.src(paths.srcCSS)
        .pipe(concat('style.min.css'))
        .pipe(cleanCSS())
        .pipe(gulpfile.dest(paths.src + '/'));
};
exports.cssDevelopment = cssDevelopment;
cssPollyfill = function(){
    var css = fs.readFileSync(paths.src + '/_css/site.css', 'utf8')
    var output = postcss().use(customProperties({
        preserve: true,
    })).process(css).css;
    return postcss([autoprefixer]).process(output).then(result => {
        return fs.writeFile(paths.distCSS + '/all.css', result.css, function () {
            return true;
        });
    });
};
exports.cssPollyfill = cssPollyfill;
jsDevelopment = function(){
    return gulpfile.src(paths.srcJS)
        .pipe(concat('ui.min.js'))
        .pipe(gulpfile.dest(paths.distJS + '/'));
};
exports.jsDevelopment = jsDevelopment;
exports.copyDevelopment = gulpfile.series([cssDevelopment, cssPollyfill, jsDevelopment]);
watchFiles = function(){
    gulpfile.watch(paths.srcJS, jsDevelopment);
    gulpfile.watch(paths.srcCSS, exports.copyDevelopment);
};
exports.watchFiles = watchFiles;