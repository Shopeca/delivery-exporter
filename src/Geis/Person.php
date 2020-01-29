<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class Person
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property string $name
 * @property string $street
 * @property string $streetNumOri
 * @property string $streetNumDesc
 * @property string $city
 * @property string $zipCode
 * @property string $country
 * @property string $contactName
 * @property string $contactEmail
 * @property string $contactPhone
 */
class Person
{

	use SmartObject;

	/** @var string @required */
	protected $name;

	/** @var string @required */
	protected $street;

	/** @var string */
	protected $streetNumOri;

	/** @var string */
	protected $streetNumDesc;

	/** @var string @required */
	protected $city;

	/** @var string @required */
	protected $zipCode;

	/** @var string @required */
	protected $country; // ISO 3166-1 alpha-2

	/** @var string */
	protected $contactName;

	/** @var string */
	protected $contactEmail;

	/** @var string */
	protected $contactPhone;

	/**
	 * @return string
	 */
	public function getName () {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return Person
	 */
	public function setName ( $name ) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreet () {
		return $this->street;
	}

	/**
	 * @param string $street
	 * @return Person
	 */
	public function setStreet ( $street ) {
		$this->street = $street;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreetNumOri () {
		return $this->streetNumOri;
	}

	/**
	 * @param string $streetNumOri
	 * @return Person
	 */
	public function setStreetNumOri ( $streetNumOri ) {
		$this->streetNumOri = $streetNumOri;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getStreetNumDesc () {
		return $this->streetNumDesc;
	}

	/**
	 * @param string $streetNumDesc
	 * @return Person
	 */
	public function setStreetNumDesc ( $streetNumDesc ) {
		$this->streetNumDesc = $streetNumDesc;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity () {
		return $this->city;
	}

	/**
	 * @param string $city
	 * @return Person
	 */
	public function setCity ( $city ) {
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getZipCode () {
		return $this->zipCode;
	}

	/**
	 * @param string $zipCode
	 * @return Person
	 */
	public function setZipCode ( $zipCode ) {
		$this->zipCode = $zipCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry () {
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return Person
	 */
	public function setCountry ( $country ) {
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContactName () {
		return $this->contactName;
	}

	/**
	 * @param string $contactName
	 * @return Person
	 */
	public function setContactName ( $contactName ) {
		$this->contactName = $contactName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContactEmail () {
		return $this->contactEmail;
	}

	/**
	 * @param string $contactEmail
	 * @return Person
	 */
	public function setContactEmail ( $contactEmail ) {
		$this->contactEmail = $contactEmail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContactPhone () {
		return $this->contactPhone;
	}

	/**
	 * @param string $contactPhone
	 * @return Person
	 */
	public function setContactPhone ( $contactPhone ) {
		$this->contactPhone = $contactPhone;
		return $this;
	}

}
