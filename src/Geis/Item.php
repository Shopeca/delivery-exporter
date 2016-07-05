<?php
namespace Shopeca\XML\Delivery\Geis;

use Nette\Utils\DateTime;
use Shopeca\XML\Generators\BaseItem;

class Item extends BaseItem {

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

	/** @var string|DateTime */
	private $deliveryToDc; // for CD only

	/** @var string */
	private $carNumber; // own delivery and for CD only

	/** @var string */
	private $packagePickUpType; // for CD only

	// Sender
	/** @var string @required */
	private $sendName;

	/** @var string @required */
	private $sendStreet;

	/** @var string */
	private $sendStreetNumOri;

	/** @var string */
	private $sendStreetNumDesc;

	/** @var string @required */
	private $sendCity;

	/** @var string @required */
	private $sendZipCode;

	/** @var string @required */
	private $sendCountry; // ISO 3166-1 alpha-2

	/** @var string */
	private $sendContactName;

	/** @var string */
	private $sendContactEmail;

	/** @var string */
	private $sendContactPhone;

	/** @var bool @required */
	private $userPrintSend;

	/** @var string */
	private $printSendName;

	/** @var string */
	private $printSendStreet;

	/** @var string */
	private $printSendStreetNumOri;

	/** @var string */
	private $printSendStreetNumDesc;

	/** @var string */
	private $printSendCity;

	/** @var string */
	private $printSendZipCode;

	/** @var string */
	private $printSendCountry; // ISO 3166-1 alpha-2

	/** @var string */
	private $printSendContactPhone;

	/** @var string */
	private $recContactName;

	/** @var string @required */
	private $recName;

	/** @var string @required */
	private $recStreet;

	/** @var string */
	private $recStreetNumOri;

	/** @var string */
	private $recStreetNumDesc;

	/** @var string @required */
	private $recCity;

	/** @var string @required */
	private $recZipCode;

	/** @var string @required */
	private $recCountry; // ISO 3166-1 alpha-2

	/** @var string */
	private $recNote;

	/** @var string */
	private $deliveryNote;

	/** @var string @require */
	private $addrCode;

	/** @var string */
	private $recContactPhone;

	/** @var string */
	private $recContactEmail;

	/** @var string */
	private $pasName;

	/** @var string|DateTime @require */
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

	/** @var string|DateTime */
	private $created;

	/** @var string */
	private $createdByName;

	/** @var string|DateTime */
	private $changed;

	/** @var string */
	private $changedByName;

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
	 * @return DateTime|string
	 */
	public function getDeliveryToDc () {
		return $this->deliveryToDc;
	}

	/**
	 * @param DateTime|string $deliveryToDc
	 * @return Item
	 */
	public function setDeliveryToDc ( $deliveryToDc ) {
		$this->deliveryToDc = $deliveryToDc;
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
	 * @return string
	 */
	public function getSendName () {
		return $this->sendName;
	}

	/**
	 * @param string $sendName
	 * @return Item
	 */
	public function setSendName ( $sendName ) {
		$this->sendName = $sendName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendStreet () {
		return $this->sendStreet;
	}

	/**
	 * @param string $sendStreet
	 * @return Item
	 */
	public function setSendStreet ( $sendStreet ) {
		$this->sendStreet = $sendStreet;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendStreetNumOri () {
		return $this->sendStreetNumOri;
	}

	/**
	 * @param string $sendStreetNumOri
	 * @return Item
	 */
	public function setSendStreetNumOri ( $sendStreetNumOri ) {
		$this->sendStreetNumOri = $sendStreetNumOri;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendStreetNumDesc () {
		return $this->sendStreetNumDesc;
	}

	/**
	 * @param string $sendStreetNumDesc
	 * @return Item
	 */
	public function setSendStreetNumDesc ( $sendStreetNumDesc ) {
		$this->sendStreetNumDesc = $sendStreetNumDesc;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendCity () {
		return $this->sendCity;
	}

	/**
	 * @param string $sendCity
	 * @return Item
	 */
	public function setSendCity ( $sendCity ) {
		$this->sendCity = $sendCity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendZipCode () {
		return $this->sendZipCode;
	}

	/**
	 * @param string $sendZipCode
	 * @return Item
	 */
	public function setSendZipCode ( $sendZipCode ) {
		$this->sendZipCode = $sendZipCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendCountry () {
		return $this->sendCountry;
	}

	/**
	 * @param string $sendCountry
	 * @return Item
	 */
	public function setSendCountry ( $sendCountry ) {
		$this->sendCountry = $sendCountry;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendContactName () {
		return $this->sendContactName;
	}

	/**
	 * @param string $sendContactName
	 * @return Item
	 */
	public function setSendContactName ( $sendContactName ) {
		$this->sendContactName = $sendContactName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendContactEmail () {
		return $this->sendContactEmail;
	}

	/**
	 * @param string $sendContactEmail
	 * @return Item
	 */
	public function setSendContactEmail ( $sendContactEmail ) {
		$this->sendContactEmail = $sendContactEmail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendContactPhone () {
		return $this->sendContactPhone;
	}

	/**
	 * @param string $sendContactPhone
	 * @return Item
	 */
	public function setSendContactPhone ( $sendContactPhone ) {
		$this->sendContactPhone = $sendContactPhone;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isUserPrintSend () {
		return $this->userPrintSend;
	}

	/**
	 * @param boolean $userPrintSend
	 * @return Item
	 */
	public function setUserPrintSend ( $userPrintSend ) {
		$this->userPrintSend = $userPrintSend;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendName () {
		return $this->printSendName;
	}

	/**
	 * @param string $printSendName
	 * @return Item
	 */
	public function setPrintSendName ( $printSendName ) {
		$this->printSendName = $printSendName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendStreet () {
		return $this->printSendStreet;
	}

	/**
	 * @param string $printSendStreet
	 * @return Item
	 */
	public function setPrintSendStreet ( $printSendStreet ) {
		$this->printSendStreet = $printSendStreet;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendStreetNumOri () {
		return $this->printSendStreetNumOri;
	}

	/**
	 * @param string $printSendStreetNumOri
	 * @return Item
	 */
	public function setPrintSendStreetNumOri ( $printSendStreetNumOri ) {
		$this->printSendStreetNumOri = $printSendStreetNumOri;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendStreetNumDesc () {
		return $this->printSendStreetNumDesc;
	}

	/**
	 * @param string $printSendStreetNumDesc
	 * @return Item
	 */
	public function setPrintSendStreetNumDesc ( $printSendStreetNumDesc ) {
		$this->printSendStreetNumDesc = $printSendStreetNumDesc;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendCity () {
		return $this->printSendCity;
	}

	/**
	 * @param string $printSendCity
	 * @return Item
	 */
	public function setPrintSendCity ( $printSendCity ) {
		$this->printSendCity = $printSendCity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendZipCode () {
		return $this->printSendZipCode;
	}

	/**
	 * @param string $printSendZipCode
	 * @return Item
	 */
	public function setPrintSendZipCode ( $printSendZipCode ) {
		$this->printSendZipCode = $printSendZipCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendCountry () {
		return $this->printSendCountry;
	}

	/**
	 * @param string $printSendCountry
	 * @return Item
	 */
	public function setPrintSendCountry ( $printSendCountry ) {
		$this->printSendCountry = $printSendCountry;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPrintSendContactPhone () {
		return $this->printSendContactPhone;
	}

	/**
	 * @param string $printSendContactPhone
	 * @return Item
	 */
	public function setPrintSendContactPhone ( $printSendContactPhone ) {
		$this->printSendContactPhone = $printSendContactPhone;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecContactName () {
		return $this->recContactName;
	}

	/**
	 * @param string $recContactName
	 * @return Item
	 */
	public function setRecContactName ( $recContactName ) {
		$this->recContactName = $recContactName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecName () {
		return $this->recName;
	}

	/**
	 * @param string $recName
	 * @return Item
	 */
	public function setRecName ( $recName ) {
		$this->recName = $recName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecStreet () {
		return $this->recStreet;
	}

	/**
	 * @param string $recStreet
	 * @return Item
	 */
	public function setRecStreet ( $recStreet ) {
		$this->recStreet = $recStreet;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecStreetNumOri () {
		return $this->recStreetNumOri;
	}

	/**
	 * @param string $recStreetNumOri
	 * @return Item
	 */
	public function setRecStreetNumOri ( $recStreetNumOri ) {
		$this->recStreetNumOri = $recStreetNumOri;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecStreetNumDesc () {
		return $this->recStreetNumDesc;
	}

	/**
	 * @param string $recStreetNumDesc
	 * @return Item
	 */
	public function setRecStreetNumDesc ( $recStreetNumDesc ) {
		$this->recStreetNumDesc = $recStreetNumDesc;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecCity () {
		return $this->recCity;
	}

	/**
	 * @param string $recCity
	 * @return Item
	 */
	public function setRecCity ( $recCity ) {
		$this->recCity = $recCity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecZipCode () {
		return $this->recZipCode;
	}

	/**
	 * @param string $recZipCode
	 * @return Item
	 */
	public function setRecZipCode ( $recZipCode ) {
		$this->recZipCode = $recZipCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecCountry () {
		return $this->recCountry;
	}

	/**
	 * @param string $recCountry
	 * @return Item
	 */
	public function setRecCountry ( $recCountry ) {
		$this->recCountry = $recCountry;
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
	public function getRecContactPhone () {
		return $this->recContactPhone;
	}

	/**
	 * @param string $recContactPhone
	 * @return Item
	 */
	public function setRecContactPhone ( $recContactPhone ) {
		$this->recContactPhone = $recContactPhone;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRecContactEmail () {
		return $this->recContactEmail;
	}

	/**
	 * @param string $recContactEmail
	 * @return Item
	 */
	public function setRecContactEmail ( $recContactEmail ) {
		$this->recContactEmail = $recContactEmail;
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
	 * @return DateTime|string
	 */
	public function getPickUpDate () {
		return $this->pickUpDate;
	}

	/**
	 * @param DateTime|string $pickUpDate
	 * @return Item
	 */
	public function setPickUpDate ( $pickUpDate ) {
		$this->pickUpDate = $pickUpDate;
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
	 * @return DateTime|string
	 */
	public function getCreated () {
		return $this->created;
	}

	/**
	 * @param DateTime|string $created
	 * @return Item
	 */
	public function setCreated ( $created ) {
		$this->created = $created;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCreatedByName () {
		return $this->createdByName;
	}

	/**
	 * @param string $createdByName
	 * @return Item
	 */
	public function setCreatedByName ( $createdByName ) {
		$this->createdByName = $createdByName;
		return $this;
	}

	/**
	 * @return DateTime|string
	 */
	public function getChanged () {
		return $this->changed;
	}

	/**
	 * @param DateTime|string $changed
	 * @return Item
	 */
	public function setChanged ( $changed ) {
		$this->changed = $changed;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getChangedByName () {
		return $this->changedByName;
	}

	/**
	 * @param string $changedByName
	 * @return Item
	 */
	public function setChangedByName ( $changedByName ) {
		$this->changedByName = $changedByName;
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
	 * @param Row[] $rows
	 * @return Item
	 */
	public function setRows ( $rows ) {
		$this->rows = $rows;
		return $this;
	}

}
