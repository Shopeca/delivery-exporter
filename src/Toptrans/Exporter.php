<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Shopeca\XML\Generators\BaseGenerator;

class Exporter extends BaseGenerator {

	/**
	 * @param $name
	 * @return string
	 */
	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

	public function generate () {
		// Here might go some processing before the file is created
	}

}