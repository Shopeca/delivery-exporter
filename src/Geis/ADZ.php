<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class ADZ - Avízo doručené zásilky
 * @package Shopeca\XML\Delivery\Geis
 */
class ADZ
{

	use SmartObject;

	/** @var string */
	private $phoneOrEmail;

	/**
	 * @param $phoneOrEmail
	 */
	public function __construct($phoneOrEmail)
	{

		$this->phoneOrEmail = (string)$phoneOrEmail;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->phoneOrEmail;
	}

}
