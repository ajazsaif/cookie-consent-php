# cookie-consent-php
PHP Cookie Consent Widget

### Installation

```
composer require ajaz/cookie-consent-php
```

### How to use (Below PHP code should be apply in Head section)

```php
use Ajaz\CookieConsent\Widget;
use Ajaz\CookieConsent\Config;

require 'vendor/autoload.php';

<?php echo Widget::run([
	'websiteName'=>'Your website name',
	'noticeBannerType'=> Config::INTERSTITIAL_NOTICE_BANNER,
	'consentType'=> Config::EXPRESS,
	'palette'=> Config::DARK_SKIN,
	'cookiesPolicyUrl'=> 'http://www.example.com/cookie-policy',
]) ?>

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
            <td>Define the cookie consent popup style Options Config::INTERSTITIAL_NOTICE_BANNER, Config::SIMPLE_NOTICE_BANNER, Config::HEADLINE_NOTICE_BANNER, Config::STANDALONE_NOTICE_BANNER</td>
            <td>Config::INTERSTITIAL_NOTICE_BANNER</td>
            <td> STRING </td>
        </tr>
        <tr>
            <td>consentType</td>
            <td>Defines the cookie consent popup text style</td>
            <td>Config::EXPRESS</td>
            <td> STRING </td>
        </tr>
        <tr>
            <td>palette</td>
            <td>Cookie consent popup theme style by default dark skin for light skin Config::LIGHT_SKIN</td>
            <td>Config::DARK_SKIN</td>
            <td>STRING</td>
        </tr>
        <tr>
            <td>language</td>
            <td>Cookie consent popup default language pass language code example en,fr</td>
            <td>Config::LANG_EN</td>
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
