<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette;
use Nette\SmartObject;

/**
 * Class AOZ - Avízo poškozené zásilky
 * @package Shopeca\XML\Delivery\Geis
 *
 * @property string $phoneOrEmail
 */
class AOZ
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
