<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class Number
 * @package Shopeca\XML\Delivery\Geis
 */
class Number extends Nette\Object {

	use Updatable;

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
