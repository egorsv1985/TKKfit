const gulp = require("gulp");
const browserSync = require("browser-sync").create();
const fileInclude = require("gulp-file-include");
const webphtml = require("gulp-webp-html-nosvg");
const del = require("del");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const changed = require("gulp-changed");
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const webpCss = require("gulp-webp-css");
const combineMediaQueries = require("postcss-combine-media-query");
const concat = require("gulp-concat");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const webp = require("gulp-webp");
const imagemin = require("gulp-imagemin");
const replace = require("gulp-replace");
const gulpIf = require("gulp-if");

const paths = {
  src: {
    html: "./src/html/**/*.html",
    index: "./src/html/index.html",
    scss: "./src/scss/**/*.scss",
    template: "./src/scss/template_styles.scss",
    images: "./src/img/**/*",
    files: ["./src/files/**/*", "./src/favicons/**/*"],
    js: "./src/js/**/*.js",
  },
  dest: {
    dev: "./docs/",
  },
};

const fileIncludeSettings = {
  prefix: "@@",
  basepath: "@file",
};

const serverOptions = {
  server: {
    baseDir: "docs/",
  },
};

const plumberNotify = (title) => {
  return {
    errorHandler: notify.onError({
      title: title,
      message: function (error) {
        return `Error in ${error.relativePath}: ${error.message}`;
      },
      sound: false,
    }),
  };
};
const sassOptions = {
  includePaths: ["./node_modules"],
};

gulp.task("clean", function () {
  return del("docs");
});

gulp.task("server", function () {
  browserSync.init(serverOptions);

  gulp.watch(paths.src.html).on("change", gulp.parallel("html"));
  gulp.watch(paths.src.scss, gulp.parallel("styles"));
});

gulp.task("watch", function () {
  gulp.watch(paths.src.html).on("change", gulp.parallel("html"));
  gulp.watch(paths.src.scss, gulp.parallel("styles"));
  gulp.watch(paths.src.js, gulp.parallel("scripts"));
});

gulp.task("html", function () {
  return gulp
    .src(paths.src.index)
    .pipe(plumber(plumberNotify("HTML")))
    .pipe(fileInclude(fileIncludeSettings))
    .pipe(webphtml())
    .pipe(replace(/@img\//g, "/images/"))
    .pipe(gulp.dest(paths.dest.dev))
    .pipe(browserSync.stream());
});

gulp.task("styles", function () {
  return gulp
    .src(paths.src.template)
    .pipe(plumber(plumberNotify("Styles")))
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass(sassOptions))
    .pipe(webpCss())
    .pipe(postcss([autoprefixer(), combineMediaQueries()]))
    .pipe(replace(/@img\//g, "../images/"))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.dest.dev + "css"))
    .pipe(browserSync.stream());
});

gulp.task("images", function () {
  return gulp
    .src(paths.src.images)
    .pipe(changed(paths.dest.dev + "images"))
    .pipe(webp())
    .pipe(gulp.dest(paths.dest.dev + "images"))
    .pipe(gulp.src(paths.src.images, { base: "./src/img" }))
    .pipe(imagemin({ verbose: true }))
    .pipe(gulp.dest(paths.dest.dev + "images"))
    .pipe(browserSync.stream());
});

gulp.task("scripts", function () {
  return gulp
    .src(paths.src.js)
    .pipe(plumber(plumberNotify("Scripts")))
    .pipe(concat("app.js"))
    .pipe(gulp.dest(paths.dest.dev + "js"))
    .pipe(browserSync.stream());
});

gulp.task("copyFiles", function () {
  return gulp.src(paths.src.files).pipe(gulp.dest(paths.dest.dev));
});

gulp.task(
  "default",
  gulp.series(
    "clean",
    gulp.parallel(
      "watch",
      "server",
      "html",
      "styles",
      "images",
      "scripts",
      "copyFiles"
    )
  )
);
