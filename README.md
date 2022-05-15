# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![Total Downloads](https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download and install [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Download and install [Git](https://git-scm.com/downloads).
3. Download and install [WAMPP](https://www.wampserver.com/en/) or [XAMPP](https://www.apachefriends.org/download.html) and configure them. CakePHP projects may had a particulars configurations.
4. Clone the project with git command git clone "https://github.com/alvesil/crudcakephp".
5. Run "composer install" inside cloned path.
6. Create a database called "teste" in your XAMPP or WAMPP(PhpMyAdmin). And import the file "teste.sql".
7. Go to <Cloned PATH>/config/app_local.php
8. Change the lines 
    p.46 'username' => 'root' ## may depend of your WAMPP or XAMPP configurations
    p.47 'password' => '' ## may depend of your WAMPP or XAMPP configurations
    p.48 'database' => 'teste'

Then visit "http://localhost/crudcakephp" to see the login page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
