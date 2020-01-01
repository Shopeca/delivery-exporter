<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Nette;
use Nette\SmartObject;

/**
 * @package Shopeca\XML\Delivery\Toptrans
 */
class Pack
{

	use SmartObject;

	/** @var int */
	private $quantity;

	/**
	 * ID obalu z číselníku
	 * @var int
	 */
	private $packId;

	/** @var string */
	private $description;

	/**
	 * @return int
	 */
	public function getQuantity () {
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 * @return Pack
	 */
	public function setQuantity ($quantity) {
		$this->quantity = $quantity;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPackId () {
		return $this->packId;
	}

	/**
	 * @param int $packId
	 * @return Pack
	 */
	public function setPackId ($packId) {
		$this->packId = $packId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription () {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return Pack
	 */
	public function setDescription ($description) {
		$this->description = $description;
		return $this;
	}

}
