<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class B2C - Pro soukromé adresy
 * @package Shopeca\XML\Delivery\Geis
 */
class B2C extends Nette\Object {

	/** @var string */
	private $phone;

	/**
	 * @param $phone
	 */
	public function __construct($phone)
	{

		$this->phone = (string)$phone;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->phone;
	}

}
