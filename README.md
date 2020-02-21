# b4st – A Bootstrap 4 Starter Theme, for WordPress

*Version 3.01*

[https://github.com/SimonPadbury/b4st](https://github.com/SimonPadbury/b4st)

------------------

> b4st is a simple, Gutenberg-compatible WordPress starter theme loaded with Bootstrap 4 and Font Awesome 5 — using Gulp for preprocessing its SCSS into CSS.

## Basic features

* [UNLICENCE](http://unlicense.org) (open source).

* Simple, intuitive, clean code. Theme CSS and JS, functions and loops are organized into different folders.

* A starter CSS theme – `/theme/css/b4st.css`, enqueued. (Note: do not put your styles in `styles.css`, because that is not enqueued.)

* `b4st.css` is generated from SCSS using Gulp and NodeJS packages. The SCSS files are also included.

* Sass (actually, SCSS) preprocessed to `b4st.css` by Gulp (or you can do your own thing).

* A starter JS script – `theme/css/b4st.js`, enqueued.

* Dimox breadcrumbs ([http://dimox.net/wordpress-breadcrumbs-without-a-plugin/](http://dimox.net/wordpress-breadcrumbs-without-a-plugin/)).

* A [CSS lock](https://fvsch.com/css-locks/) gradually enlarges the typographic font sizes from base 16px to 20px for larger viewports. This affects headers, paragraphs, lists, tables, etc. but not buttons and forms.

## Dependencies

* WordPress.

* Served from a CDN:
    * Modernizr 2.8.3
    * jQuery 3.4.1 (full, not slim version)
    * Popper 1.14.7 (needed by Bootstrap popovers, tooltips and collapsed navbar “hamburger” action)
    * Bootstrap 4.4.1 CSS
    * Bootstrap 4.4.1 JS
    * Font Awesome 5.11.2

* **Optional (if you want to Gulp-Sass for preprocessing the SCSS files):**
    * NodeJS
    * Gulp-CLI – installed globally
    * Node packages for the following devDependencies:
        * autoprefixer
        * cssnano
        * gulp
        * gulp-postcss
        * gulp-sass
        * gulp-sourcemaps

## Bootstrap Integration

* Bootstrap navbar with WordPress menu and search.
	* Navbar dropdowns (child menus) are handled by a [custom walker nav menu class](https://github.com/SimonPadbury/b4st/blob/master/functions/navbar.php).

* Bootstrap customized comments and feedback response form.

## Gutenberg Compatibility

* Gutenberg editor stylesheet – into which has been copy-pasted the typography styles from Bootstrap 4’s _Reboot_ CSS (see [http://getbootstrap.com/docs/4.3.1/content/reboot/](http://getbootstrap.com/docs/4.1/content/reboot/)).

* <mark>Since v.3.0, b4st (this theme) has adopted a narrow single-column layout, so that it can make use of Gutenberg’s extra-wide and full width blocks.</mark> In the front-end CSS, these are handled by a variation on Andy Bell’s [full bleed](https://hankchizljaw.com/wrote/creating-a-full-bleed-css-utility/) utility.
    * **Optional:** If you wish to revert the font-end templates to a two-column (main content plus sidebar) layout, these are still available in the templates but commented out. However, you will also need to remove (or comment out) support for Gutenberg’s extra-wide and full-width comment blocks from the functions, and modify the CSS a little bit.

## Child-Theme Friendly

b4st was not originally designed for child theming — it is a starter theme modifying directly. Most people still use it that way. But as child theme-friendliness has been asked for, here it is:

* Many functions are pluggable.

* Theme [hooks](/functions/hooks.php) – paired _before_ and _after_ the navbar, post/page main, (optional sidebar) and footer. Parent theme hooks are able to recieve [actions](https://developer.wordpress.org/plugins/hooks/actions/) from a child theme.

* Also, the navbar brand, navbar search form and sub-footer “bottomline” are inserted using pluggable hooks. So, a child theme can override these.

* _Documentation on b4st theme hooks can be found in the [wiki](https://github.com/SimonPadbury/b4st/wiki/b4st-Theme-Hooks)._

## Using the Gulp Task-Runner to Preprocess SCSS into CSS

Since v.3.0, in the `theme/` folder there is a `scss/` folder containing all the SCSS files that have been used to create the file `theme/css/b4st.css`.

You can (beautify and) edit that file directly — or you can preprocess the SCSS files using whatever you prefer to use.

In order to use Gulp, you need to:

1. Install [NodeJS](https://nodejs.org/).

2. Install [Gulp-CLI](https://gulpjs.com/docs/en/getting-started/quick-start) globally, using your terminal:

```
npm install --global gulp-cli
```

3. In b4st there are already these files that you need: `gulpfile.js`, `package.json` and `package-lock.json`. Therefore what you need next are the Node packages. To get these, you need to `cd` to the b4st theme’s root folder and do an `npm install` in your terminal:

```
npm install
```

4. A few minutes later, with all the `node_modules/` installed as local dev dependencies (as you can see from the 'package.json` these are: autoprefixer, cssnano, gulp, gulp-postcss, gulp-sass, and gulp-sourcemaps), you should simply be able to run gulp by typing this in your terminal:

```
gulp
```

That’s it.

You can stop it by typing `ctrl+C` (hold the **control** key down and press the **c** key).

5. So, in development, you could have WordPress running on a local server (e.g. BitNami-WordPress, AMPPS, Local by Flywheel, or MAMP + WordPress), and this Gulp setup watching and processing your SCSS into CSS.
    * You may sometimes need to purge your browser cache at the start of a dev/design session, so that it reloads your newer stylesheet.

---

See the [LOG.md](/LOG.md)

See the [b4st Wiki](https://github.com/SimonPadbury/b4st/wiki).
