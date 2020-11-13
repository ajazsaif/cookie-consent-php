<?php

namespace Ajaz\CookieConsent;

/**
 * Cookie Consent Popup form widget
 * @author Ajaz Alam <ajazsaim@gmail.com>
 */


class Widget
{
	
	/**
     * interstitial|simple|headline|standalone cookie consent banner type
     * @var string
     */
	const INTERSTITIAL_NOTICE_BANNER = 'interstitial';
	const SIMPLE_NOTICE_BANNER = 'simple';
	const HEADLINE_NOTICE_BANNER = 'headline';
	const STANDALONE_NOTICE_BANNER = 'standalone';

	/**
     * consentType constant default value
     * @var string
     */
	const EXPRESS = 'express';

	/**
     * skin color constant default value dark,light
     * @var string
     */
	const DARK_SKIN = 'dark';
	const LIGHT_SKIN = 'light';

	/**
     * default language enlish
     * @var string
     */
	const LANG_EN = 'en';

	/**
     * configuration cookie consent array
     * @var array
     */
	protected static $attributes = [];

	/**
     * @param array $params
     * @return void
     */

	public static function run($params = [])
	{
		//configuration goes here
		return self::init($params);
	}

	/**
     * Initize the configuration properties
     * @param array $params
     * @return string
     */

	protected static function init(array $params)
	{
		//validate the websiteName configuration params
		if(!isset($params['websiteName']))
		{
			throw new \InvalidArgumentException("websiteName paramter is required");
			
		}

		//validate the noticeBannerType configuration params
		if(!isset($params['noticeBannerType']))
		{
			$params['noticeBannerType'] = self::INTERSTITIAL_NOTICE_BANNER;
		}

		//validate the consentType configuration params
		if(!isset($params['consentType']))
		{
			$params['consentType'] = self::EXPRESS;
		}

		//validate the palette configuration for skin color
		if(!isset($params['palette']))
		{
			$params['palette'] = self::DARK_SKIN;
		}

		//validate the language configuration for cookie consent popup
		if(!isset($params['language']))
		{
			$params['language'] = self::LANG_EN;
		}

		//validate the cookiesPolicyUrl configuration for cookie consent popup
		if(!isset($params['cookiesPolicyUrl']))
		{
			throw new \InvalidArgumentException("cookiesPolicyUrl key is required, define your cookie policy url");
			
		}

		self::$attributes['notice_banner_type'] = $params['noticeBannerType'];
		self::$attributes['consent_type'] = $params['consentType'];
		self::$attributes['palette'] = $params['palette'];
		self::$attributes['language'] = $params['language'];
		self::$attributes['website_name'] = $params['websiteName'];
		self::$attributes['cookies_policy_url'] = $params['cookiesPolicyUrl'];
		
		//initilize Config class
		$config = new Config(self::$attributes);

		return $config->render();
	}
}