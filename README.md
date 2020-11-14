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
