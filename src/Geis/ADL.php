<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class ADL - Avízo naskenované doručovací listiny
 * @package Shopeca\XML\Delivery\Geis
 */
class ADL
{

	use SmartObject;

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
