<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Nette;

/**
 * @package Shopeca\XML\Delivery\Toptrans
 */
class CashOnDelivery extends Nette\Object {

	const TYPE_INLAND = 1;
	const TYPE_FOLDOUT = 2;
	const TYPE_FOREIGN_CZK = 3;
	const TYPE_FOREIGN_EUR = 5;

	/** @var int */
	private $type = self::TYPE_INLAND;

	/** @var float */
	private $price;

	/** @var string */
	private $priceCurId;

	/** @var string */
	private $account1;

	/** @var string */
	private $account2;

	/** @var string */
	private $bank;

	/**
	 * @return int
	 */
	public function getType () {
		return $this->type;
	}

	/**
	 * @param int $type
	 * @return CashOnDelivery
	 */
	public function setType ($type) {
		$this->type = $type;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPrice () {
		return $this->price;
	}

	/**
	 * @param float $price
	 * @return CashOnDelivery
	 */
	public function setPrice ($price) {
		$this->price = $price;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPriceCurId () {
		return $this->priceCurId;
	}

	/**
	 * @param string $priceCurId
	 * @return CashOnDelivery
	 */
	public function setPriceCurId ($priceCurId) {
		$this->priceCurId = $priceCurId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAccount1 () {
		return $this->account1;
	}

	/**
	 * @param string $account1
	 * @return CashOnDelivery
	 */
	public function setAccount1 ($account1) {
		$this->account1 = $account1;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAccount2 () {
		return $this->account2;
	}

	/**
	 * @param string $account2
	 * @return CashOnDelivery
	 */
	public function setAccount2 ($account2) {
		$this->account2 = $account2;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBank () {
		return $this->bank;
	}

	/**
	 * @param string $bank
	 * @return CashOnDelivery
	 */
	public function setBank ($bank) {
		$this->bank = $bank;
		return $this;
	}

}
