# <p align="center"><a href="#" target="_blank"><img src="https://images.g2crowd.com/uploads/product/image/large_detail/large_detail_1fa90d1c07e091dc10fe667b0b97cc2b/ckeditor-4.png"></a></p>

<p align="center">
  <a href="https://github.com/dev-techguy/laravel-ckeditor/issues">
  <img src="https://img.shields.io/github/issues/dev-techguy/laravel-ckeditor">
  </a>
  <a href="https://github.com/dev-techguy/laravel-ckeditor/network/members">
  <img src="https://img.shields.io/github/forks/dev-techguy/laravel-ckeditor">
  </a>
  <a href="https://github.com/dev-techguy/laravel-ckeditor/stargazers">
  <img src="https://img.shields.io/github/stars/dev-techguy/laravel-ckeditor">
  </a>
    <a href="https://packagist.org/packages/techguy/laravel-ckeditor">
    <img src="https://poser.pugx.org/techguy/laravel-ckeditor/v/stable">
    </a>
    <a href="https://packagist.org/packages/techguy/laravel-ckeditor">
    <img src="https://poser.pugx.org/techguy/laravel-ckeditor/downloads">
    </a>
  <br><br>
</p>

CKEditor Package
=====================

## Note

**This is NOT the official CKEDITOR package.**

[CKEDITOR officially has its own composer package since 2014](https://ckeditor.com/blog/CKEditor-Supports-Bower-and-Composer/). Instead of using this package, we recommend you follow [the official CKEditor installation instructions with package managers](https://docs.ckeditor.com/ckeditor4/latest/guide/dev_package_managers.html#composer)

## Installation
### Set up package

```
composer require techguy/laravel-ckeditor
```

### Add ServiceProvider

Edit config/app.php, add the following file to `Application Service Providers` section. *Use this for laravel 5.5 and below*
```
Unisharp\Ckeditor\ServiceProvider::class,
```
### Publish the resources
```
php artisan vendor:publish --tag=ckeditor
```
## Usage

Default way (initiate by name or id) :

```javascript
    <script; src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
```

Or if you want to initiate by jQuery selector :

```javascript
    <script; src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script; src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
```

## File Uploader Integration

 Instead of using KCFinder, we recommend [laravel-filemanager](https://github.com/UniSharp/laravel-filemanager) for the file uploader integration for better laravel user access control and specific per user folders.
