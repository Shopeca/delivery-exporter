<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class Number
 * @package Shopeca\XML\Delivery\Geis
 */
class Number extends Nette\Object {

	/** @var string */
	private $packRowNumber; // Item number

	/** @var string|DateTime */
	private $created;

	/** @var string */
	private $createdByName;

	/** @var string|DateTime */
	private $changed;

	/** @var string */
	private $changedByName;

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

	/**
	 * @return DateTime|string
	 */
	public function getCreated () {
		return $this->created;
	}

	/**
	 * @param DateTime|string $created
	 * @return Number
	 */
	public function setCreated ( $created ) {
		$this->created = $created;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCreatedByName () {
		return $this->createdByName;
	}

	/**
	 * @param string $createdByName
	 * @return Number
	 */
	public function setCreatedByName ( $createdByName ) {
		$this->createdByName = $createdByName;
		return $this;
	}

	/**
	 * @return DateTime|string
	 */
	public function getChanged () {
		return $this->changed;
	}

	/**
	 * @param DateTime|string $changed
	 * @return Number
	 */
	public function setChanged ( $changed ) {
		$this->changed = $changed;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChangedByName () {
		return $this->changedByName;
	}

	/**
	 * @param string $changedByName
	 * @return Number
	 */
	public function setChangedByName ( $changedByName ) {
		$this->changedByName = $changedByName;
		return $this;
	}

}
