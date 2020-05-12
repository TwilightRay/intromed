const browserSync   = require('browser-sync').create(), // Создаем локальный сервер
      del           = require('del'), // Подключаем библиотеку для удаления файлов
      gulp          = require('gulp'), // Подключаем Gulp
      autoprefixer  = require('gulp-autoprefixer'), // Подключаем библиотеку для автоматического добавления префиксов
      cssnano       = require('gulp-cssnano'), // Подключаем пакет для минификации CSS
      imagemin      = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
      rename        = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
      sass          = require('gulp-sass'), // Подключаем Sass пакет
      pngquant      = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
      webpack       = require('webpack'), // Подключаем Webpack
      webpackConfig = require('./webpack.config.js'), // Указываем путь конфига
      webpackStream = require('webpack-stream'), // Подключаем webpack-stream
      rigger        = require('gulp-rigger');

const paths = {
  root: './public',
  src: './src',
  templates: {
    src: './src/*.php'
  },
  pages: {
    src: './src/pages/**/*.php',
    dest: './public/pages'
  },
  styles: {
    common: './src/assets/css/*.css',
    src: './src/assets/css/**/*.css',
    dest: './public/assets/css'
  },
  scripts: {
    main: './src/assets/js/*.js',
    src: './src/assets/js/**/*.js',
    dest: './public/assets/js'
  },
  images: {
    src: './src/assets/img/**/*.*',
    dest: './public/assets/img'
  },
  fonts: {
    src: './src/assets/fonts/**/*.ttf',
    dest: './public/assets/fonts'
  },
  php: {
    src: './src/assets/php/*.php',
    dest: './public/assets/php'
  }
};

gulp.task('static', function () { // Создаём таск
  return gulp.src('./src/assets/static/**/*.*') // Берем источник
    .pipe(gulp.dest('./public/assets/static')) // Выгружаем сборку
});

gulp.task('rigger', async function () {
  gulp.src('./src/**/*.php')
    .pipe(rigger())
    .pipe(gulp.dest('./public'))
});

gulp.task('del', function () { // Создаем таск
  return del(paths.root) // Удаляем папку dist
});

gulp.task('templates', function () { // Создаём таск
  return gulp.src(paths.templates.src) // Берем источник
    .pipe(gulp.dest(paths.root)) // Выгружаем сборку
});

gulp.task('pages', function () {
  return gulp.src(paths.pages.src)
    .pipe(gulp.dest(paths.pages.dest)) // Выгружаем сборку
});

gulp.task('styles', function () { // Создаем таск
  return gulp.src(paths.styles.common) // Берем источник
    .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
    .pipe(cssnano()) // Сжимаем наш CSS
    .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
    .pipe(gulp.dest(paths.styles.dest)) // Выгружаем минифицированный CSS
});

gulp.task('scripts', function () { // Создаем таск
  return gulp.src(paths.scripts.main) // Берем источник
    // .pipe(webpackStream(webpackConfig, webpack)) // Вызываем webpack-stream
    .pipe(gulp.dest(paths.scripts.dest)) // Выгружаем сборку
});

gulp.task('images', function () { // Создаем таск
  return gulp.src(paths.images.src) // Берем источник
    .pipe(imagemin({ // Сжимаем изображения
      progressive: true,
      interlaced: true,
      svgoPlugins: [{removeViewBox: false}],
      use: [pngquant()]
    }))
    .pipe(gulp.dest(paths.images.dest)) // Выгружаем сборку
});

gulp.task('fonts', function () { // Создаем таск
  return gulp.src(paths.fonts.src) // Берем источник
  .pipe(gulp.dest(paths.fonts.dest)) // Выгружаем сборку
});

gulp.task('php', function () {
  return gulp.src(paths.php.src)
    .pipe(gulp.dest(paths.php.dest))
});

gulp.task('watch', function () {
  gulp.watch('src/**/*.php', gulp.parallel('rigger'));
  gulp.watch(paths.templates.src, gulp.parallel('templates')); // Наблюдаем за index
  gulp.watch(paths.pages.src, gulp.parallel('pages')); // Наблюдаем за php файлами
  gulp.watch(paths.styles.src, gulp.parallel('styles')); // Наблюдаем за SASS файлами
  gulp.watch(paths.scripts.src, gulp.parallel('scripts')); // Наблюдаем за JS файлами
  gulp.watch(paths.images.src, gulp.parallel('images')); // Наблюдаем за images
  gulp.watch(paths.fonts.src, gulp.parallel('fonts')); // Наблюдаем за fonts
  gulp.watch(paths.php.src, gulp.parallel('php')); // Наблюдаем за php
  gulp.watch('./src/assets/static/**/*.*', gulp.parallel('static'));
});

gulp.task('browser-sync', function () { // Создаем таск browser-sync
  browserSync.init({ // Выполняем browser-sync
    proxy: 'intromed',
    notify: false, // Отключаем уведомления
  });
  browserSync.watch(paths.src + '/**/*.*', browserSync.reload); // Перезагрузка при изменении
});

gulp.task('default', gulp.series('del', gulp.parallel('static' , 'rigger', 'templates', 'pages', 'styles', 'scripts', 'images', 'fonts', 'php'), gulp.parallel('watch', 'browser-sync')));
