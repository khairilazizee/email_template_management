const mix = require('laravel-mix');

// Process your existing app.js and app.css
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // Add any required PostCSS plugins here
    ]);

// Add CKEditor processing
mix.js('node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js', 'public/js')
    .copy('node_modules/@ckeditor/ckeditor5-source-editing/build/source-editing.js', 'public/js')
    .setPublicPath('public');
