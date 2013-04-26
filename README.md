CodeIgniter Chrome Logger
=========================

A CodeIgniter Chrome Logger helper.

Installation
------------

1. Install the [Chrome Logger extension](https://chrome.google.com/webstore/detail/chromephp/noaneddfkdjfnfdakjjmocngnfkfehhd) for Google Chrome
2. Download the ChromePhp.php file from https://github.com/ccampbell/chromephp and put it in your `application/third_party` folder.
3. Download the chrome_logger_helper.php file from this repo to `application/helpers`.

Usage
-----

To use the function simply do:

```php
chrome_log($object);
```

You can also pass in the type of log like:

```php
chrome_log($object, 'warn');
```

Credits
-------

The CodeIgniter Chrome Logger helper was created by [Gilbert Pellegrom](http://gilbert.pellegrom.me) from [Dev7studios](http://dev7studios.com). Released under the MIT license.