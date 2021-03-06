<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class Insurance
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property int $value
 * @property string $valueCur
 */
class Insurance
{

	use SmartObject;

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
		$this->valueCur = (float)$valueCur;
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
