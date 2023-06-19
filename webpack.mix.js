const mix = require("laravel-mix");
require("laravel-mix-compress");
require("laravel-mix-blade-reload");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js")
    .vue()
    .js("resources/js/dropdown.js", "public/js/dropdown.js")
    .js("node_modules/select2/dist/js/select2.min.js", "public/js/select2.js")
    .bladeReload()
    .postCss("resources/css/mdi.css", "public/css")
    .postCss(
        "node_modules/select2/dist/css/select2.min.css",
        "public/css/select2.css"
    )
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
    .version();
mix.compress({
    productionOnly: true,
    minRatio: 1,
});
