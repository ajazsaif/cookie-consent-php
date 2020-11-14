# cookie-consent-php
PHP Cookie Consent Widget

### Installation

```
composer require ajaz/cookie-consent-php
```
<p align="center">
    <a href="https://github.com/ajazsaif/cookie-consent-php" target="_blank">
        <img src="https://github.com/ajazsaif/cookie-consent-php/blob/master/cookie-consent.png" width="600" alt="ajaz/cookie-consent-php" />
    </a>
</p>

### How to use (Below PHP code should be apply in Head section)

```php
use Ajaz\CookieConsent\Widget;
use Ajaz\CookieConsent\Config;

require 'vendor/autoload.php';

<?php echo Widget::run([
	'websiteName'=>'Your website name',
	'noticeBannerType'=> Widget::INTERSTITIAL_NOTICE_BANNER,
	'consentType'=> Widget::EXPRESS,
	'palette'=> Widget::DARK_SKIN,
	'cookiesPolicyUrl'=> 'http://www.example.com/cookie-policy',
]); ?>

```

## Configuration Options

<table>
    <thead>
        <tr>
            <th>option</th>
            <th>description</th>
            <th>default</th>
            <th>type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>websiteName</td>
            <td>Your website name</td>
            <td>Required</td>
            <td> STRING </td>
        </tr>
        <tr>
            <td>noticeBannerType</td>
            <td>Define the cookie consent popup style Options Widget::INTERSTITIAL_NOTICE_BANNER, Widget::SIMPLE_NOTICE_BANNER, Widget::HEADLINE_NOTICE_BANNER, Widget::STANDALONE_NOTICE_BANNER</td>
            <td>Widget::INTERSTITIAL_NOTICE_BANNER</td>
            <td> STRING </td>
        </tr>
        <tr>
            <td>consentType</td>
            <td>Defines the cookie consent popup text style</td>
            <td>Widget::EXPRESS</td>
            <td> STRING </td>
        </tr>
        <tr>
            <td>palette</td>
            <td>Cookie consent popup theme style by default dark skin for light skin Widget::LIGHT_SKIN</td>
            <td>Widget::DARK_SKIN</td>
            <td>STRING</td>
        </tr>
        <tr>
            <td>language</td>
            <td>Cookie consent popup default language pass language code example en,fr</td>
            <td>Widget::LANG_EN</td>
            <td> STRING </td>
        </tr>
        <tr>
            <td>cookiesPolicyUrl</td>
            <td>Your website cookie policy page url</td>
            <td>Required</td>
            <td> STRING </td>
        </tr>
    </tbody>
</table>

## Worth knowing

Widgets throws an `InvalidArgumentException` if you define an invalid property in Widget::run() method
