<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class Services
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property ADL $ADL
 * @property ADZ $ADZ
 * @property AOZ $AOZ
 * @property APZ $APZ
 * @property B2C $B2C
 * @property COD $COD
 * @property bool $D12
 * @property bool $exWorks
 * @property bool $gar
 * @property Insurance $poj
 * @property bool $sms
 * @property bool $ema
 * @property string $tel
 * @property bool $pbc
 */
class Services
{

	use SmartObject;

	/** @var ADL */
	private $ADL;

	/** @var ADZ */
	private $ADZ;

	/** @var AOZ */
	private $AOZ;

	/** @var APZ */
	private $APZ;

	/** @var B2C */
	private $B2C;

	/** @var COD */
	private $COD;

	/** @var bool */
	private $D12; // Delivery till 12 AM

	/** @var bool */
	private $exWorks; // Ex Works

	/** @var bool */
	private $gar; // Guaranteed delivery

	/** @var Insurance */
	private $poj;

	/** @var bool */
	private $sms; // Notify the recipient by SMS

	/** @var bool */
	private $ema; // Notify the recipient by email

	/** @var string */
	private $tel; // Notify the recipient by phone

	/** @var bool */
	private $pbc;  // Can pay by card

	/**
	 * @return ADL
	 */
	public function getADL () {
		return $this->ADL;
	}

	/**
	 * @param ADL $ADL
	 * @return Services
	 */
	public function setADL ( $ADL ) {
		$this->ADL = $ADL;
		return $this;
	}

	/**
	 * @return ADZ
	 */
	public function getADZ () {
		return $this->ADZ;
	}

	/**
	 * @param ADZ $ADZ
	 * @return Services
	 */
	public function setADZ ( $ADZ ) {
		$this->ADZ = $ADZ;
		return $this;
	}

	/**
	 * @return AOZ
	 */
	public function getAOZ () {
		return $this->AOZ;
	}

	/**
	 * @param AOZ $AOZ
	 * @return Services
	 */
	public function setAOZ ( $AOZ ) {
		$this->AOZ = $AOZ;
		return $this;
	}

	/**
	 * @return APZ
	 */
	public function getAPZ () {
		return $this->APZ;
	}

	/**
	 * @param APZ $APZ
	 * @return Services
	 */
	public function setAPZ ( $APZ ) {
		$this->APZ = $APZ;
		return $this;
	}

	/**
	 * @return B2C
	 */
	public function getB2C () {
		return $this->B2C;
	}

	/**
	 * @param B2C $B2C
	 * @return Services
	 */
	public function setB2C ( $B2C ) {
		$this->B2C = $B2C;
		return $this;
	}

	/**
	 * @return COD
	 */
	public function getCOD () {
		return $this->COD;
	}

	/**
	 * @param COD $COD
	 * @return Services
	 */
	public function setCOD ( $COD ) {
		$this->COD = $COD;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isD12 () {
		return $this->D12;
	}

	/**
	 * @param boolean $D12
	 * @return Services
	 */
	public function setD12 ( $D12 ) {
		$this->D12 = $D12;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isExWorks () {
		return $this->exWorks;
	}

	/**
	 * @param boolean $exWorks
	 * @return Services
	 */
	public function setExWorks ( $exWorks ) {
		$this->exWorks = $exWorks;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isGar () {
		return $this->gar;
	}

	/**
	 * @param boolean $gar
	 * @return Services
	 */
	public function setGar ( $gar ) {
		$this->gar = $gar;
		return $this;
	}

	/**
	 * @return Insurance
	 */
	public function getPoj () {
		return $this->poj;
	}

	/**
	 * @param Insurance $poj
	 * @return Services
	 */
	public function setPoj ( Insurance $poj ) {
		$this->poj = $poj;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isSms () {
		return $this->sms;
	}

	/**
	 * @param boolean $sms
	 * @return Services
	 */
	public function setSms ( $sms ) {
		$this->sms = $sms;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isEma () {
		return $this->ema;
	}

	/**
	 * @param boolean $ema
	 * @return Services
	 */
	public function setEma ( $ema ) {
		$this->ema = $ema;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTel () {
		return $this->tel;
	}

	/**
	 * @param string $tel
	 * @return Services
	 */
	public function setTel ( $tel ) {
		$this->tel = $tel;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isPbc () {
		return $this->pbc;
	}

	/**
	 * @param boolean $pbc
	 * @return Services
	 */
	public function setPbc ( $pbc ) {
		$this->pbc = $pbc;
		return $this;
	}

}
