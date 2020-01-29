<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;
use Shopeca\XML\Delivery\UpdatableTrait;

/**
 * Class Row
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property string $note
 * @property string $lPacType
 * @property int $count
 * @property float $weight
 * @property float $length
 * @property float $width
 * @property string $volume
 * @property Number[] $numbers
 */
class Row
{

	use SmartObject;
	use UpdatableTrait;

	/** @var string */
	private $note;

	/** @var string */
	private $lPacType; // \Shopeca\XML\Delivery\Geis\PackageType type for cargo only

	/** @var int @required */
	private $count;

	/** @var float @required */
	private $weight;

	/** @var float */
	private $length;

	/** @var float */
	private $width;

	/** @var string */
	private $volume; // For cargo only

	/** @var Number[] */
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
	 * @return float
	 */
	public function getWeight () {
		return $this->weight;
	}

	/**
	 * @param float $weight
	 * @return Row
	 */
	public function setWeight ( $weight ) {
		$this->weight = $weight;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getLength () {
		return $this->length;
	}

	/**
	 * @param float $length
	 * @return Row
	 */
	public function setLength ( $length ) {
		$this->length = $length;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getWidth () {
		return $this->width;
	}

	/**
	 * @param float $width
	 * @return Row
	 */
	public function setWidth ( $width ) {
		$this->width = $width;
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
	 * @return Number[]
	 */
	public function getNumbers () {
		return $this->numbers;
	}

	/**
	 * @param Number $number
	 * @return $this
	 */
	public function addNumber ( Number $number ) {
		$this->numbers[] = $number;
		return $this;
	}

}
