<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class COD - Cash on delivery
 * @package Shopeca\XML\Delivery\Geis
 */
class COD extends Nette\Object {

	/** @var float */
	private $value;

	/** @var string */
	private $valueCur; // Currency ISO 4217

	/** @var int */
	private $varCode;

	/**
	 * @param $value
	 * @param $valueCur
	 * @param $varCode
	 */
	public function __construct($value, $valueCur, $varCode)
	{
		$this->value = (float)$value;
		$this->valueCur = (float)$valueCur;
		$this->varCode = (int)$varCode;
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

	/**
	 * @return int
	 */
	public function getVarCode () {
		return $this->varCode;
	}

}
