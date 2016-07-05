<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;

/**
 * Class ADL - Avízo naskenované doručovací listiny
 * @package Shopeca\XML\Delivery\Geis
 */
class ADL extends Nette\Object {

	/** @var string */
	private $email;

	/**
	 * @param $email
	 */
	public function __construct($email)
	{

		$this->email = (string)$email;
	}

	/**
	 * @return string
	 */
	public function getEmail()
	{
		return $this->email;
	}

}
