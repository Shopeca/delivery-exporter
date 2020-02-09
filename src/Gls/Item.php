<?php
namespace Shopeca\XML\Delivery\Gls;

use Shopeca\XML\Generators\BaseItem;

/**
 * @property string $name
 * @property string $address
 * @property string $town
 * @property string $post
 * @property string $country
 * @property float $cashOnDelivery
 * @property string $variableSymbol
 * @property string $phone
 * @property string $mail
 */
class Item extends BaseItem {

	/** @var string */
	private $name;

	/** @var string */
	private $address;

	/** @var string */
	private $town;

	/** @var string */
	private $post;

	/** @var string */
	private $country;

	/** @var float */
	private $cashOnDelivery = 0;

	/** @var string */
	private $variableSymbol;

	/** @var string */
	private $phone;

	/** @var string */
	private $mail;

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return Item
	 */
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param string $address
	 * @return Item
	 */
	public function setAddress($address)
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTown()
	{
		return $this->town;
	}

	/**
	 * @param string $town
	 * @return Item
	 */
	public function setTown($town)
	{
		$this->town = $town;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPost()
	{
		return $this->post;
	}

	/**
	 * @param string $post
	 * @return Item
	 */
	public function setPost($post)
	{
		$this->post = $post;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 * @return Item
	 */
	public function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getCashOnDelivery()
	{
		return $this->cashOnDelivery;
	}

	/**
	 * @param float $cashOnDelivery
	 * @return Item
	 */
	public function setCashOnDelivery($cashOnDelivery)
	{
		$this->cashOnDelivery = $cashOnDelivery;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVariableSymbol()
	{
		return $this->variableSymbol;
	}

	/**
	 * @param string $variableSymbol
	 * @return Item
	 */
	public function setVariableSymbol($variableSymbol)
	{
		$this->variableSymbol = $variableSymbol;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param string $phone
	 * @return Item
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMail()
	{
		return $this->mail;
	}

	/**
	 * @param string $mail
	 * @return Item
	 */
	public function setMail($mail)
	{
		$this->mail = $mail;
		return $this;
	}

}
