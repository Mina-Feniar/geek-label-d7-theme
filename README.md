# Geek Label Drupal 7 responsive theme
Version 1.0

##Contributors:
@Mina-Feniar

##Summary:
- Geek Label is a responsive theme extending Twitter [Bootstrap Framework] (sub-theme from [Bootstrap] theme).
- Uses HTML5, CSS3, SCSS, JavaScript, jQuery, Gulp, Bootstrap framework, and FontAwesome.

##Usage:
The theme is setup to use Gulp to compile SCSS files and minify CSS.
- Compile scss/style.scss to css/style.css (minified).

###Prerequisites:
- Download and enable Drupal 7 [Bootstrap] theme version 7.x-3.20

###Installation:
Install the dependencies (gulp, gulp-sass, browser-sync, font-awesome) 
$ npm install

###Run:
This will watch your sass files, compile them and run your dev server at http://localhost:3000 
$ npm start

##Features:
- Sub-theme from [Bootstrap] theme
- Preprocessors used: SCSS
- Integrated with [Fullpage.js] plugin to support having Fullscreen Scrolling


##Suggested Modules:
- [Paragraphs]
- [Ckeditor]
- [Webform]

## Overrides {#overrides}
The `./geek_label/scss/_default-variables.scss` file is generally where you will
spend the majority of your time providing any default variables that should be
used by the [Bootstrap Framework] instead of its own.

The `./geek_label/scss/overrides.scss` file contains various Drupal overrides to
properly integrate with the [Bootstrap Framework]. It may contain a few
enhancements, feel free to edit this file as you see fit.

The `./geek_label/scss/style.scss` file is the glue that combines:
`_default-variables.scss`, [Bootstrap Framework Source Files] and the
`overrides.scss` file together. Generally, you will not need to modify this
file unless you need to add or remove files to be imported. This is the file
that you should compile to `./geek_label/css/styles.css` (note the same file
name, using a different extension of course).

[Bootstrap]: https://www.drupal.org/project/bootstrap
[Bootstrap Framework]: https://getbootstrap.com/docs/3.3/
[Bootstrap Framework Source Files]: https://github.com/twbs/bootstrap-sass
[Paragraphs]: https://www.drupal.org/project/paragraphs
[Ckeditor]: https://www.drupal.org/project/ckeditor
[Fullpage.js]: https://alvarotrigo.com/fullPage/
[Webform]: https://www.drupal.org/project/webform
