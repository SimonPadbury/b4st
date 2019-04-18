# b4st – A Bootstrap 4 Starter Theme, for WordPress

*Version 2.7.1*

[https://github.com/SimonPadbury/b4st](https://github.com/SimonPadbury/b4st)

------------------

**b4st is a simple, Gutenberg-compatible WordPress starter theme loaded with Bootstrap 4 and Font Awesome 5.**

## Basic features

* [UNLICENCE](http://unlicense.org) (open source).

* Simple, intuitive, clean code. Theme CSS and JS, functions and loops are organized into different folders.

* A starter CSS theme – `/theme/css/b4st.css`, enqueued. (Note: do not put your styles in `styles.css`, because that is not enqueued.)

* `Sidebar-widget-area` is optional. If no widgets are dropped into the sidebar, then the sidebar will not be shown on the frontend (and so the main column is automatically the full width of the Bootstrap `.container`).

## Dependencies

* jQuery and Modernizr – enqueued (served from the WordPress core).

* Bootstrap 4.3.1 CSS – enqueued (served by `cdnjs.com` CDN).

* Bootstrap 4.3.1 and Popper 1.14.7 bundle JS – enqueued (served by `cdnjs.com` CDN). Popper is needed by Bootstrap popovers, tooltips and collapsed navbar “hamburger” action.

* Font Awesome 5.8.1 – enqueued (CSS served by `use.fontawesome.com` CDN).

## Bootstrap Integration

* Bootstrap navbar with WordPress menu and search.
	* Navbar dropdowns (child menus) are handled by a [custom walker nav menu class](https://github.com/SimonPadbury/b4st/blob/master/functions/navbar.php).

* Bootstrap customized comments and feedback response form.

* Bootstrap pagination for:
  * blog index and blog category pages
  * Bootstrap pagination for posts/pages if split over a series of 'pages'

## Gutenberg Compatibility

* Gutenberg editor stylesheet – into which has been copy-pasted the typography styles from Bootstrap 4’s _Reboot_ CSS (see [http://getbootstrap.com/docs/4.3.1/content/reboot/](http://getbootstrap.com/docs/4.1/content/reboot/)).
  * Note: Blog post and page content in theme’s frontend are controlled by Bootstrap’s columnar grid layout – not by the Gutenberg editor CSS. This means that _b4st does not support Gutenberg’s extra-wide image blocks_.

## Child-Theme Friendly

* Many functions are pluggable.
  * Note: Although b4st was originally intended as a simple starter theme (hence the name **b4st**), several developers wanted child theme capability. So the functions have been made ‘pluggable’. (However, b4st can still be used as a starter theme.)

* Theme [hooks](/functions/hooks.php) – paired _before_ and _after_ the navbar, post/page main, (optional sidebar) and footer. Parent theme hooks are able to recieve [actions](https://developer.wordpress.org/plugins/hooks/actions/) from a child theme.

* Also, the navbar brand, navbar search form and sub-footer “bottomline” are inserted using pluggable hooks. So, a child theme can override these.

* _Documentation on b4st theme hooks can be found in the [wiki](https://github.com/SimonPadbury/b4st/wiki/b4st-Theme-Hooks)._

