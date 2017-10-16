# WePROTECT Global Alliance

WordPress website

## Vendors

1. Install Node.Js. In project root run `npm install`
2. Install Composer. In project root run `composer install`

## Installation

1. Access the site to install WordPress
2. Login to control panel. Go to: `Appearance` > `Activate "WePROTECT"`

##### NOTE
If theme is activated on clean WordPress install, a default set of posts & pages will be added to the database. Associated media assets (not provided in this repository) will also be added if placed in `~/data/assets`

No media assets will mean text-only posts & pages.

## Development

##### TDD
Using PHPUnit with `npm run test`

##### Selenium
Using Selenium (requires Selenium Server installed in your environment) and the PHP-based Facebook WebDriver `npm run btest`

##### SCSS
Webpack is used to transpile the themes SCSS `~/src/themes/wep/sass/style.scss`, and combine 
libraries to `~/src/themes/wep/style.css` using `npm run watch`

##### JS
Webpack is used to transpile the themes JS `~/src/themes/wep/js/theme.js`, and combine 
libraries to `~/src/themes/wep/js/scripts.min.js` using `npm run watch`