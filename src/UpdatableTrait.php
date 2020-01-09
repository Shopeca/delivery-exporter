<?php
namespace Shopeca\XML\Delivery;

/**
 * Trait UpdatableTrait
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property \DateTime $created
 * @property string $createdByName
 * @property \DateTime $changed
 * @property string $changedByName
 */
trait UpdatableTrait {

	/** @var \DateTime */
	protected $created;

	/** @var string */
	protected $createdByName;

	/** @var \DateTime */
	protected $changed;

	/** @var string */
	protected $changedByName;

	/**
	 * @return \DateTime
	 */
	public function getCreated () {
		return $this->created;
	}

	/**
	 * @param \DateTime|string $created
	 * @return Item
	 */
	public function setCreated ( $created ) {
		$this->created = $created instanceof \DateTime ? $created : new \DateTime($created);
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
	 * @return Item
	 */
	public function setCreatedByName ( $createdByName ) {
		$this->createdByName = $createdByName;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getChanged () {
		return $this->changed;
	}

	/**
	 * @param \DateTime|string $changed
	 * @return Item
	 */
	public function setChanged ( $changed ) {
		$this->changed = $changed instanceof \DateTime ? $changed : new \DateTime($changed);
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
	 * @return Item
	 */
	public function setChangedByName ( $changedByName ) {
		$this->changedByName = $changedByName;
		return $this;
	}

}
