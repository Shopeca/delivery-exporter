<?php
namespace Shopeca\XML\Delivery\Geis;

use Shopeca\XML\Generators\BaseItem;

class Item extends BaseItem {

	use Updatable;

	CONST
		DELIVERY_TYPE_PARCEL = 0,
		DELIVERY_TYPE_CARGO = 1,
		DOCUMENT_TYPE_EXPEDITION = 0,
		DOCUMENT_TYPE_ORDER = 1,
		PACKAGE_PICK_UP_TYPE_OWN = 1,
		PACKAGE_PICK_UP_TYPE_GEIS = 2;

	/** @var int @required */
	private $deliveryType;

	/** @var int @required */
	private $documentType;

	/** @var string */
	private $number;

	/** @var string */
	private $customerReference;

	/** @var string */
	private $documentNumber;

	/** @var string */
	private $dpCode; // Delivery place code (VM-XXXX / VMXXXX / XXXX)

	/** @var string */
	private $notFillRecDp; // Do not fill delivery address (for DP only)

	/** @var string */
	private $crossDockName; // for CD only

	/** @var \DateTime */
	private $deliveryToDc; // for CD only

	/** @var string */
	private $carNumber; // own delivery and for CD only

	/** @var string */
	private $packagePickUpType; // for CD only

	/** @var Person @required */
	protected $sender;

	/** @var bool @required */
	private $usePrintSend;

	/** @var Person */
	protected $printSend;

	/** @var Person */
	protected $rec;

	/** @var string */
	private $recNote;

	/** @var string */
	private $deliveryNote;

	/** @var string @require */
	private $addrCode;

	/** @var string */
	private $pasName;

	/** @var \DateTime @require */
	private $pickUpDate;

	/** @var string */
	private $pickUpMinutesFrom;

	/** @var string */
	private $pickUpMinutesTo;

	/** @var string */
	private $routingCodeInput;

	/** @var string */
	private $routingCodeOutput;

	/** @var string */
	private $depIdIn;

	/** @var string */
	private $depIdOut;

	/** @var string */
	private $backInfoEmail;

	/** @var Services */
	private $services;

	/** @var Row[] */
	private $rows;

	/**
	 * @return int
	 */
	public function getDeliveryType () {
		return $this->deliveryType;
	}

	/**
	 * @param int $deliveryType
	 * @return Item
	 */
	public function setDeliveryType ( $deliveryType ) {
		$this->deliveryType = $deliveryType;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDocumentType () {
		return $this->documentType;
	}

	/**
	 * @param int $documentType
	 * @return Item
	 */
	public function setDocumentType ( $documentType ) {
		$this->documentType = $documentType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNumber () {
		return $this->number;
	}

	/**
	 * @param string $number
	 * @return Item
	 */
	public function setNumber ( $number ) {
		$this->number = $number;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCustomerReference () {
		return $this->customerReference;
	}

	/**
	 * @param string $customerReference
	 * @return Item
	 */
	public function setCustomerReference ( $customerReference ) {
		$this->customerReference = $customerReference;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDocumentNumber () {
		return $this->documentNumber;
	}

	/**
	 * @param string $documentNumber
	 * @return Item
	 */
	public function setDocumentNumber ( $documentNumber ) {
		$this->documentNumber = $documentNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDpCode () {
		return $this->dpCode;
	}

	/**
	 * @param string $dpCode
	 * @return Item
	 */
	public function setDpCode ( $dpCode ) {
		$this->dpCode = $dpCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNotFillRecDp () {
		return $this->notFillRecDp;
	}

	/**
	 * @param string $notFillRecDp
	 * @return Item
	 */
	public function setNotFillRecDp ( $notFillRecDp ) {
		$this->notFillRecDp = $notFillRecDp;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCrossDockName () {
		return $this->crossDockName;
	}

	/**
	 * @param string $crossDockName
	 * @return Item
	 */
	public function setCrossDockName ( $crossDockName ) {
		$this->crossDockName = $crossDockName;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getDeliveryToDc () {
		return $this->deliveryToDc;
	}

	/**
	 * @param \DateTime|string $deliveryToDc
	 * @return Item
	 */
	public function setDeliveryToDc ( $deliveryToDc ) {
		$this->deliveryToDc = $deliveryToDc instanceof \DateTime ? $deliveryToDc : new \DateTime($deliveryToDc);
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCarNumber () {
		return $this->carNumber;
	}

	/**
	 * @param string $carNumber
	 * @return Item
	 */
	public function setCarNumber ( $carNumber ) {
		$this->carNumber = $carNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPackagePickUpType () {
		return $this->packagePickUpType;
	}

	/**
	 * @param string $packagePickUpType
	 * @return Item
	 */
	public function setPackagePickUpType ( $packagePickUpType ) {
		$this->packagePickUpType = $packagePickUpType;
		return $this;
	}

	/**
	 * @return Person
	 */
	public function getSender () {
		return $this->sender;
	}

	/**
	 * @param Person $person
	 * @return Item
	 */
	public function setSender ( Person $person ) {
		$this->sender = $person;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isUsePrintSend () {
		return $this->printSend instanceof Person;
	}

	/**
	 * @return Person
	 */
	public function getPrintSend () {
		return $this->printSend;
	}

	/**
	 * @param Person $person
	 * @return Item
	 */
	public function setPrintSend ( Person $person ) {
		$this->printSend = $person;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isUseRec () {
		return $this->rec instanceof Person;
	}

	/**
	 * @return Person
	 */
	public function getRec () {
		return $this->rec;
	}

	/**
	 * @param Person $person
	 * @return Item
	 */
	public function setRec ( Person $person ) {
		$this->rec = $person;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecNote () {
		return $this->recNote;
	}

	/**
	 * @param string $recNote
	 * @return Item
	 */
	public function setRecNote ( $recNote ) {
		$this->recNote = $recNote;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDeliveryNote () {
		return $this->deliveryNote;
	}

	/**
	 * @param string $deliveryNote
	 * @return Item
	 */
	public function setDeliveryNote ( $deliveryNote ) {
		$this->deliveryNote = $deliveryNote;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddrCode () {
		return $this->addrCode;
	}

	/**
	 * @param string $addrCode
	 * @return Item
	 */
	public function setAddrCode ( $addrCode ) {
		$this->addrCode = $addrCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPasName () {
		return $this->pasName;
	}

	/**
	 * @param string $pasName
	 * @return Item
	 */
	public function setPasName ( $pasName ) {
		$this->pasName = $pasName;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getPickUpDate () {
		return $this->pickUpDate;
	}

	/**
	 * @param \DateTime|string $pickUpDate
	 * @return Item
	 */
	public function setPickUpDate ( $pickUpDate ) {
		$this->pickUpDate = $pickUpDate instanceof \DateTime ? $pickUpDate : new \DateTime($pickUpDate);
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickUpMinutesFrom () {
		return $this->pickUpMinutesFrom;
	}

	/**
	 * @param string $pickUpMinutesFrom
	 * @return Item
	 */
	public function setPickUpMinutesFrom ( $pickUpMinutesFrom ) {
		$this->pickUpMinutesFrom = $pickUpMinutesFrom;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPickUpMinutesTo () {
		return $this->pickUpMinutesTo;
	}

	/**
	 * @param string $pickUpMinutesTo
	 * @return Item
	 */
	public function setPickUpMinutesTo ( $pickUpMinutesTo ) {
		$this->pickUpMinutesTo = $pickUpMinutesTo;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRoutingCodeInput () {
		return $this->routingCodeInput;
	}

	/**
	 * @param string $routingCodeInput
	 * @return Item
	 */
	public function setRoutingCodeInput ( $routingCodeInput ) {
		$this->routingCodeInput = $routingCodeInput;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRoutingCodeOutput () {
		return $this->routingCodeOutput;
	}

	/**
	 * @param string $routingCodeOutput
	 * @return Item
	 */
	public function setRoutingCodeOutput ( $routingCodeOutput ) {
		$this->routingCodeOutput = $routingCodeOutput;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDepIdIn () {
		return $this->depIdIn;
	}

	/**
	 * @param string $depIdIn
	 * @return Item
	 */
	public function setDepIdIn ( $depIdIn ) {
		$this->depIdIn = $depIdIn;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDepIdOut () {
		return $this->depIdOut;
	}

	/**
	 * @param string $depIdOut
	 * @return Item
	 */
	public function setDepIdOut ( $depIdOut ) {
		$this->depIdOut = $depIdOut;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBackInfoEmail () {
		return $this->backInfoEmail;
	}

	/**
	 * @param string $backInfoEmail
	 * @return Item
	 */
	public function setBackInfoEmail ( $backInfoEmail ) {
		$this->backInfoEmail = $backInfoEmail;
		return $this;
	}

	/**
	 * @return Services
	 */
	public function getServices () {
		return $this->services;
	}

	/**
	 * @param Services $services
	 * @return Item
	 */
	public function setServices ( $services ) {
		$this->services = $services;
		return $this;
	}

	/**
	 * @return Row[]
	 */
	public function getRows () {
		return $this->rows;
	}

	/**
	 * @param Row $row
	 * @return Item
	 */
	public function addRow (Row $row) {
		$this->rows[] = $row;
		return $this;
	}

}
