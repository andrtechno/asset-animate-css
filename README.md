Asset animate css
========================

Animate CSS library for Yii2

[![Latest Stable Version](https://poser.pugx.org/panix/asset-animate-css/v/stable.svg)](https://packagist.org/packages/panix/asset-animate-css)
[![Total Downloads](https://poser.pugx.org/panix/asset-animate-css/downloads.svg)](https://packagist.org/packages/panix/asset-animate-css)
[![Latest Unstable Version](https://poser.pugx.org/panix/asset-animate-css/v/unstable.svg)](https://packagist.org/packages/panix/asset-animate-css)
[![License](https://poser.pugx.org/panix/asset-animate-css/license.svg)](https://packagist.org/packages/panix/asset-animate-css)

Introduction
------------
Even though we already created an extension to display maps that are away from Google's policies and works with
[LeafLetJs](http://leafletjs.com/ "http://leafletjs.com/") library, we still received requests to have

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require "panix/asset-animate-css" "*"
```
or add

```json
"panix/asset-animate-css" : "*"
```

to the require section of your application's `composer.json` file.

## Usage

```php
AnimateCssAsset::register($view);
```
