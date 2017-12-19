

// Núcleo do Gulp
var gulp = require('gulp');

var minify = require('gulp-minify');
// Verifica alterações em tempo real, caso haja, compacta novamente todo o projeto
var watch = require('gulp-watch');

// Minifica o CSS
var cssmin = require("gulp-cssmin");

// Agrupa todos arquivos em UM
var concat = require("gulp-concat");
var sass = require('gulp-sass');

// Remove comentários CSS
var stripCssComments = require('gulp-strip-css-comments');


var css = [
'./scss/*.scss'
];
var js = [
'./js/main.js'
];

const autoprefixer = require('gulp-autoprefixer');

gulp.task('minify-css', function(){
    gulp.src(css)
    .pipe(concat('style.min.css'))
    .pipe(stripCssComments({all: true}))
    .pipe(cssmin())
    .pipe(gulp.dest('../public/css/'));
});


gulp.task('global', () =>
    gulp.src(css)
    .pipe(concat('style.min.css'))
    .pipe(sass({
      outputStyle: 'compressed',
      includePaths: ['node_modules/susy/sass']
  }).on('error', sass.logError))
    .pipe(stripCssComments({all: true}))
    .pipe(cssmin())
    .pipe(gulp.dest('../public/css/'))
    );


gulp.task('compress', function() {
  gulp.src('codes/js/main.js')
  .pipe(minify({
    ext:{
        src:'-debug.js',
        min:'.js'
    },
    exclude: ['tasks'],
    ignoreFiles: ['.combo.js', '-min.js']
}))
  .pipe(gulp.dest('../public/js/'))
});


// Cria a TASK de verificar em tempo real alterações, se detectar alguma alteração, será processado o comando relativo ao arquivo
gulp.task('watch', function() {
  gulp.watch(css, ['global','compress']);
});
