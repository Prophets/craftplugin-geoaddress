<?php

namespace Prophets\GeoAddress\models;

use Craft;
use craft\base\Model;

/**
 * Class GeoAddressSettingsModel
 *
 * @package Prophets\GeoAddress\models
 */
class GeoAddressSettingsModel extends Model
{
	/**
	 * @var string
	 */
	public $googleApiKey;

	public $geocoderService;

	/**
	 * @return array
	 */
	public function rules()
	{
		return [
			['googleApiKey', 'string'],
            ['geocoderService', 'string'],
		];
	}
}
