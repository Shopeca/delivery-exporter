<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class Row
 * @package Shopeca\XML\Delivery\Geis
 */
class Row extends Nette\Object {

	use Updatable;

	/** @var string */
	private $note;

	/** @var string */
	private $lPacType; // \Shopeca\XML\Delivery\Geis\PackageType type for cargo only

	/** @var int @required */
	private $count;

	/** @var int @required */
	private $weight;

	/** @var string */
	private $volume; // For cargo only

	/** @var Numbers[] */
	private $numbers;

	/**
	 * @return string
	 */
	public function getNote () {
		return $this->note;
	}

	/**
	 * @param string $note
	 * @return Row
	 */
	public function setNote ( $note ) {
		$this->note = $note;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLPacType () {
		return $this->lPacType;
	}

	/**
	 * @param string $lPacType
	 * @return Row
	 */
	public function setLPacType ( $lPacType ) {
		$this->lPacType = $lPacType;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCount () {
		return $this->count;
	}

	/**
	 * @param int $count
	 * @return Row
	 */
	public function setCount ( $count ) {
		$this->count = $count;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getWeight () {
		return $this->weight;
	}

	/**
	 * @param int $weight
	 * @return Row
	 */
	public function setWeight ( $weight ) {
		$this->weight = $weight;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVolume () {
		return $this->volume;
	}

	/**
	 * @param string $volume
	 * @return Row
	 */
	public function setVolume ( $volume ) {
		$this->volume = $volume;
		return $this;
	}

	/**
	 * @return Numbers[]
	 */
	public function getNumbers () {
		return $this->numbers;
	}

	/**
	 * @param Number[] $numbers
	 * @return Row
	 */
	public function addNumber ( Number $number ) {
		$this->numbers[] = $number;
		return $this;
	}

}
