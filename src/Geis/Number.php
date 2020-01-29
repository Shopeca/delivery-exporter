<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;
use Shopeca\XML\Delivery\UpdatableTrait;

/**
 * Class Number
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property string $packRowNumber
 */
class Number
{

	use SmartObject;
	use UpdatableTrait;

	/** @var string */
	private $packRowNumber; // Item number

	/**
	 * @return string
	 */
	public function getPackRowNumber () {
		return $this->packRowNumber;
	}

	/**
	 * @param string $packRowNumber
	 * @return Number
	 */
	public function setPackRowNumber ( $packRowNumber ) {
		$this->packRowNumber = $packRowNumber;
		return $this;
	}

}
