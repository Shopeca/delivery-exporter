<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class B2C - Pro soukromé adresy
 * @package Shopeca\XML\Delivery\Geis
 */
class B2C
{

	use SmartObject;

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
	public function getPhone()
	{
		return $this->phone;
	}

}
