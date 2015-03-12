<?php namespace Fisharebest\Localization;

/**
 * Class LocaleEnNz
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleEnNz extends LocaleEn {
	/** {@inheritdoc} */
	public function territory() {
		return new TerritoryNz;
	}
}