<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Nette;
use Nette\SmartObject;

/**
 * Class Address
 * @package Shopeca\XML\Delivery\Toptrans
 *
 * @property string $country
 * @property string $region
 * @property string $city
 * @property string $cityPart
 * @property string $street
 * @property string $houseNum
 * @property string $zip
 */
class Address
{

	use SmartObject;

	/** @var string */
	private $country;

	/** @var string */
	private $region;

	/** @var string */
	private $city;

	/** @var string */
	private $cityPart;

	/** @var string */
	private $street;

	/** @var string */
	private $houseNum;

	/** @var string */
	private $zip;

	/**
	 * @return string
	 */
	public function getCountry () {
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return Address
	 */
	public function setCountry ($country) {
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRegion () {
		return $this->region;
	}

	/**
	 * @param string $region
	 * @return Address
	 */
	public function setRegion ($region) {
		$this->region = $region;
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
	 * @return Address
	 */
	public function setCity ($city) {
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCityPart () {
		return $this->cityPart;
	}

	/**
	 * @param string $cityPart
	 * @return Address
	 */
	public function setCityPart ($cityPart) {
		$this->cityPart = $cityPart;
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
	 * @return Address
	 */
	public function setStreet ($street) {
		$this->street = $street;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHouseNum () {
		return $this->houseNum;
	}

	/**
	 * @param string $houseNum
	 * @return Address
	 */
	public function setHouseNum ($houseNum) {
		$this->houseNum = $houseNum;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getZip () {
		return $this->zip;
	}

	/**
	 * @param string $zip
	 * @return Address
	 */
	public function setZip ($zip) {
		$this->zip = $zip;
		return $this;
	}

}
