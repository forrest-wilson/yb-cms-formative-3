const gulp = require("gulp");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");

gulp.task("sass", () => {
    return gulp.src("./assets/stylesheets/sass/style.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer({
            browsers: ["last 2 versions"],
            cascade: false
        }))
        .pipe(sourcemaps.write(""))
        .pipe(gulp.dest("./assets/stylesheets/css/"));
});

gulp.task("default", ["sass"], cb => {
    gulp.watch("./assets/stylesheets/sass/**/*.scss", ["sass"], cb);
});