# WePROTECT Global Alliance

WordPress website

## Required PHP extensions

`mbstring`, `zip`

## Installation

1. Install Node.Js modules. In project root run `npm install`
2. Install Composer packages. In project root run `composer install`
3. Access the site to install WordPress
4. Login to control panel. Go to: `Appearance` > `Activate "WePROTECT"`

##### NOTE
If theme is activated on clean WordPress install, a default set of posts & pages will be added to the database. Associated media assets (not provided in this repository) will also be added if placed in `~/data/assets`

No media assets will mean text-only posts & pages.

## Environment

##### Vagrant
Vagrant environment (CentOS 7, MySQL, PHP 7.1, Apache)- `~/puphpet/config.yaml` will need to be updated for your local environment paths.

##### Jenkins
A `~/build.xml` Apache Ant script is available to configure Jenkins CI deployment environments. See `~/build` for individual build stage scripts.

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