# b4st – A Bootstrap 4 Starter Theme, for WordPress

*Version 2.3*

[https://github.com/SimonPadbury/b4st](https://github.com/SimonPadbury/b4st)

------------------

**b4st is a simple WordPress starter theme loaded with Bootstrap 4.**

Although b4st was originally intended as a simple starter theme (hence the name b4st), several people wanted child theme capability so with v2.0 I have made functions 'pluggable'. (It can still be used as a starter theme.)

## Features of b4st

* Simple, intuitive, clean code.

* Theme CSS and JS, functions and loops are organized into different folders.

* **Bootstrap 4.1.1** (served by cdnjs.com CDN) CSS and JS enqueued.

* **Popper 1.14.3** (served by cdnjs.com CDN) JS enqueued. Popper is needed by Bootstrap popovers, tooltips and collapsed navbar "hamburger" action.

* **jQuery 3.3.1** enqueued, (served by cdnjs.com CDN),

* **Font Awesome 5.0.13** (JS served by use.fontawesome.com CDN) enqueued. CSS pseudo elements enabled by a tiny config JS.

* **Modernizr 2.8.3** (served by cdnjs.com CDN) enqueued.

* **Navbar with dropdowns (child menus)** – a [custom walker nav menu class](https://github.com/SimonPadbury/b4st/blob/master/functions/navbar.php) has been built to handle the dropdowns.

* Sidebar-widget-area is optional. If no widgets, then the sidebar will not be shown (main column automatically becomes full width).

* A starter CSS theme – `/theme/css/b4st.css`, enqueued. (Note: do not put your styles in `styles.css`, because that is not enqueued.)

* WordPress menu and WordPress search form in the Bootstrap 4 `.navbar` (Note: Bootstrap 4 navbar dropdowns supports only two levels of menu links (no sub-sub menus).

* Custom comments and response form

* Bootstrap pagination for:

  * blog index and blog category pages

  * Bootstrap pagination for posts/pages if split over a series of 'pages'

* **Visual editor stylesheet** – into which the same Bootstrap 4 and starter CSS theme are preloaded by `@import`, so that what you see in the visual editor is (mostly!) what you get at the front end (WYSI(M!)WYG). E.g. you will see the theme's typography in the WordPress Post/Page editor, and you can use Bootstrap CSS in the editor – but its width will not be the same as your article column width in the front end.

* Child theme friendly (functions are pluggable).

* [UNLICENCE](http://unlicense.org) (open source).

---

## b4st [Releases](https://github.com/SimonPadbury/b4st/releases/)

Significant updates and milestones will be noted here: https://github.com/SimonPadbury/b4st/releases/

## b4st [Wiki](https://github.com/SimonPadbury/b4st/wiki)

This is the place to find some answers: https://github.com/SimonPadbury/b4st/wiki.

If you don't find what you want, please open an Issue.

If you want want to see something in `b4st` and you can do it yourself, please feel at liberty to add it as a Pull Request. But remember that this is only meant to be a _starter_ theme – I don't want to add a load of stuff that most people will delete because they don't need it. There are other ways to expand the b4st project – e.g. via the wiki.

---

## Meet b4st's younger brother, m1st (Materiallize CSS starter theme for WordPress)

[https://github.com/SimonPadbury/m1st](https://github.com/SimonPadbury/m1st)


## Looking for something more powerful? Try [Progenitor](https://github.com/Progenitor-Theme/)

Project: https://github.com/Progenitor-Theme/progenitor.

Progenitor started as b4st but it has been developed to become somemething totally different. Progenitor is intended as a parent theme with pluggable functions, and hooks everywhere:

* **Build hooks** – so child themes can override or remove Progenitor components
* **Action hooks** – so child themes can add more comonents
* **CSS class hooks** – so child themes can change the Bootstrap classes used by Progenitor, and add more classes

Bootstrap 4. Font Awesome 5. WooCommerce ready. Multilingual support will be included -- please help by adding your language.

Start your Progenitor projects from the *projenitor-child-starter* – https://github.com/Progenitor-Theme/progenitor-child-starter.

---

## Looking for a website Style Guide starter, building upon Bootstrap 4? Try [Atomic Boot Pug](https://github.com/SimonPadbury/Atomic-Boot-Pug)

Inspired by Brad Frost's [Atomic Design](http://atomicdesign.bradfrost.com/), Atomic Boot Pug is comprised of a set of Bootstrap 4 docs demo snippets (tranformed into [Pug](https://pugjs.org/api/getting-started.html) mixins) reorganized into a starter styleguide.

Just a little something to help you kick off your next project. :-)
