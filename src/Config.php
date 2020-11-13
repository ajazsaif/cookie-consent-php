<?php

namespace Ajaz\CookieConsent;

/**
 * Cookie Consent Configuration class
 * @author Ajaz Alam <ajazsaim@gmail.com>
 */


class Config
{
	
	/**
     * @var array
     */
	protected $attributes = [];

	/**
     * @param array $params
     * @return void
     */

	public function __construct($params = [])
	{
		//configuration goes here
		$this->attributes = $params;
	}

	/**
     * Convert array into JSon
     * @param array $params
     * @return string
     */

	public function toJson(array $params)
	{
		return json_encode($params);
	}

	/**
     * Render cookie consent script plugin
     * @return string
     */

	public function render()
	{
		$json = $this->toJson($this->attributes);
		//register js code
		$js = "<script type='text/javascript' src='//www.cookieconsent.com/releases/3.1.0/cookie-consent.js'></script>";
		$js .= "<script type='text/javascript'> document.addEventListener('DOMContentLoaded', function () {
					cookieconsent.run({$json});
				}); </script>";

		return $js;
	}
}