<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Nette;
use Nette\SmartObject;

/**
 * Class Person
 * @package Shopeca\XML\Delivery\Toptrans
 */
class Person
{

	use SmartObject;

	/** @var Address */
	private $address;

	/** @var string */
	private $name;

	/** @var string */
	private $registrationCode;

	/** @var string */
	private $vatCode;

	/** @var string */
	private $firstName;

	/** @var string */
	private $lastName;

	/** @var string */
	private $phone;

	/** @var string */
	private $email;

	/**
	 * @return Address
	 */
	public function getAddress () {
		return $this->address;
	}

	/**
	 * @param Address $address
	 * @return Person
	 */
	public function setAddress ($address) {
		$this->address = $address;
		return $this;
	}

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
	public function setName ($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRegistrationCode () {
		return $this->registrationCode;
	}

	/**
	 * @param string $registrationCode
	 * @return Person
	 */
	public function setRegistrationCode ($registrationCode) {
		$this->registrationCode = $registrationCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVatCode () {
		return $this->vatCode;
	}

	/**
	 * @param string $vatCode
	 * @return Person
	 */
	public function setVatCode ($vatCode) {
		$this->vatCode = $vatCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFirstName () {
		return $this->firstName;
	}

	/**
	 * @param string $firstName
	 * @return Person
	 */
	public function setFirstName ($firstName) {
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastName () {
		return $this->lastName;
	}

	/**
	 * @param string $lastName
	 * @return Person
	 */
	public function setLastName ($lastName) {
		$this->lastName = $lastName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhone () {
		return $this->phone;
	}

	/**
	 * @param string $phone
	 * @return Person
	 */
	public function setPhone ($phone) {
		$this->phone = $phone;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail () {
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return Person
	 */
	public function setEmail ($email) {
		$this->email = $email;
		return $this;
	}

}
