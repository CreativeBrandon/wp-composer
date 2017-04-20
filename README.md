# Wordpress Composer Starter

## Prerequisites
* Php
* Composer
* Docker

## Install
`composer install`

## Bootstrap
`bootstrap.php` is requried at the top of `class-wp.php`(WordPress environment setup class).

## Config
Vars are set using dotenv in `bootstrap.php`. Make sure your env vars are set in `.env` and mapped to wp config in `wp-config.php`.

## Wordpress Packages
Uses [WordPress Packagist](https://wpackagist.org/) to manage plugins & themes as a composer repository.
Mirrors all WordPress plugins and add a composer.json file that requires composer-installers and sets their package type to wordpress-plugin. 
