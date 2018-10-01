<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Nette;

/**
 * Adr - nebezpečné látky
 * @package Shopeca\XML\Delivery\Toptrans
 */
class Adr extends Nette\Object {

	/**
	 * ADR UN - číselník
	 * @var int
	 */
	private $un;

	/** @var float */
	private $count;

	/** @var float */
	private $kg;

	/** @var bool */
	private $environmentDanger = false;

	/**
	 * @return int
	 */
	public function getUn () {
		return $this->un;
	}

	/**
	 * @param int $un
	 * @return Adr
	 */
	public function setUn ($un) {
		$this->un = $un;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getCount () {
		return $this->count;
	}

	/**
	 * @param float $count
	 * @return Adr
	 */
	public function setCount ($count) {
		$this->count = $count;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getKg () {
		return $this->kg;
	}

	/**
	 * @param float $kg
	 * @return Adr
	 */
	public function setKg ($kg) {
		$this->kg = $kg;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEnvironmentDanger () {
		return $this->environmentDanger;
	}

	/**
	 * @param bool $environmentDanger
	 * @return Adr
	 */
	public function setEnvironmentDanger ($environmentDanger) {
		$this->environmentDanger = $environmentDanger;
		return $this;
	}

}
