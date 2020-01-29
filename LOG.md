# Log

## Changes for 29 January 2020 -- version 3.0

* Adding SCSS preprocessing (and sourcemaps) using Gulp-Sass.

* Updated Bootstrap and Font Awesome to latest versions.

* Bootstrap now enqueued from CDN [https://stackpath.bootstrapcdn.com](https://stackpath.bootstrapcdn.com) instead of Cloudflare CDN.

* Added [Dimox Breadcrumbs](http://dimox.net/wordpress-breadcrumbs-without-a-plugin/) – and modified to use Bootstrap CSS classes.

* Added the `archive.php` template.

* `index-pagination.php` retired, in favor of a simpler pagination for homepage, category, archive, author. (For some reason, `index-pagination.php` could no longer find and replace the current page `<span>` with a Bootstrap styled `<span>`).

* Simplified the split single post pagination be removing skip-to-first, prev, next and skip-to-last options.

* Added a [CSS lock](https://fvsch.com/css-locks/) to `.entry-content`

* A few other minor changes.

---

Log was not kept before 2020.