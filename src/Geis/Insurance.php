<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class Insurance
 * @package Shopeca\XML\Delivery\Geis
 */
class Insurance extends Nette\Object {

	/** @var float */
	private $value;

	/** @var string */
	private $valueCur; // Currency ISO 4217

	/**
	 * @param $value
	 * @param $valueCur
	 */
	public function __construct($value, $valueCur)
	{
		$this->value = (float)$value;
		$this->varCode = (float)$varCode;
	}

	/**
	 * @return float
	 */
	public function getValue () {
		return $this->value;
	}

	/**
	 * @return string
	 */
	public function getValueCur () {
		return $this->valueCur;
	}

}
