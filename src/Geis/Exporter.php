<?php
namespace Shopeca\XML\Delivery\Geis;

use Shopeca\XML\Generators\BaseGenerator;

abstract class Exporter extends BaseGenerator {

	/**
	 * @param $name
	 * @return string
	 */
	protected function getTemplate($name)
	{
		$reflection = new \ReflectionClass(__CLASS__);
		return dirname($reflection->getFileName()) . '/latte/' . $name . '.latte';
	}

}