<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class APZ - Avízo problémové zásilky
 * @package Shopeca\XML\Delivery\Geis
 */
class APZ extends Nette\Object {

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
