<?php
namespace Shopeca\XML\Delivery\Toptrans;

use Shopeca\XML\Generators\BaseItem;

class Item extends BaseItem {

	use Updatable;

	const NOTES_BACK_NO = 0;
	const NOTES_BACK_ELECTRONIC = 1;
	const NOTES_BACK_PHYSICAL = 2;
	const NOTES_BACK_BOTH = 3;

	const MANIPULATION_COMFORT_NONE = 1;
	const MANIPULATION_COMFORT_TOP = 2;
	const MANIPULATION_COMFORT_TOP_PLUS_WHITE = 3;
	const MANIPULATION_COMFORT_TOP_PLUS_WHITE_OUTSIDE = 4;
	const MANIPULATION_COMFORT_TOP_PLUS_OTHER = 5;

	const TERM_STANDARD = 1;
	const TERM_TOP_TIME = 2;
	const TERM_TOP_PRIVATE = 3;
	const TERM_TOP_WEEKEND = 4;
	const TERM_SELF = 5;

	const LOADING_ACTOR_CUSTOMER = 1;
	const LOADING_DIFFERENT_ADDRESS = 2;
	const LOADING_IN_PERSON = 3;

	const PAYER_CUSTOMER = 1;
	const PAYER_RECIPIENT = 2;
	const PAYER_OTHER = 3;

	/** @var string */
	private $label;

	/** @var string */
	private $varSymbol;

	/** @var int */
	private $payerSelect = self::PAYER_CUSTOMER;

	/** @var int */
	private $loadingSelect = self::LOADING_ACTOR_CUSTOMER;

	/** @var int */
	private $termId = self::TERM_STANDARD;

	/** @var string */
	private $loadingDate;

	/** @var string */
	private $loadingTimeFrom;

	/** @var string */
	private $loadingTimeTo;

	/** @var string */
	private $dischargeDate;

	/** @var string */
	private $dischargeTimeFrom;

	/** @var string */
	private $dischargeTimeTo;

	/** @var int */
	private $loadingPersonalBranchId;

	/** @var int */
	private $dischargePersonalBranchId;

	/** @var Person */
	private $payer;

	/** @var Person */
	private $loading;

	/** @var Person */
	private $discharge;

	/** @var int */
	private $loadingComfortId = self::MANIPULATION_COMFORT_NONE;

	/** @var int */
	private $dischargeComfortId = self::MANIPULATION_COMFORT_NONE;

	/** @var bool */
	private $twowayShipment = 0;

	/** @var string */
	private $twowayShipmentDescription;

	/** @var bool */
	private $yard = false;

	/** @var int */
	private $deliveryNotesBack = self::NOTES_BACK_NO;

	/** @var bool */
	private $euroPalletsBack = false;

	/** @var bool */
	private $loadingAviso = false;

	/** @var bool */
	private $dischargeAviso = false;

	/** @var bool */
	private $avisoSms = false;

	/** @var bool */
	private $consider = false;

	/** @var bool */
	private $oversize = false;

	/** @var bool */
	private $labelFragile = false;

	/** @var bool */
	private $labelDontTilt = false;

	/** @var bool */
	private $labelThisSideUp = false;

	/** @var bool */
	private $hydraulicFrontLoading = false;

	/** @var bool */
	private $hydraulicFrontDischarge = false;

	/** @var CashOnDelivery */
	private $cashOnDelivery;

	/** @var float */
	private $kg;

	/** @var float */
	private $m3;

	/**
	 * Measure in cm
	 * @var float
	 */
	private $dimensionsD;

	/**
	 * Measure in cm
	 * @var float
	 */
	private $dimensionsS;

	/**
	 * Measure in cm
	 * @var float
	 */
	private $dimensionsV;

	/** @var float */
	private $orderValue;

	/** @var string */
	private $orderValueCurrency;

	/** @var string */
	private $noteLoading;

	/** @var string */
	private $noteDischarge;

	/** @var Pack[] */
	private $packs = [];

	/** @var Adr[] */
	private $adrs = [];

	/**
	 * @return string
	 */
	public function getLabel () {
		return $this->label;
	}

	/**
	 * @param string $label
	 * @return Item
	 */
	public function setLabel ($label) {
		$this->label = $label;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVarSymbol () {
		return $this->varSymbol;
	}

	/**
	 * @param string $varSymbol
	 * @return Item
	 */
	public function setVarSymbol ($varSymbol) {
		$this->varSymbol = $varSymbol;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getPayerSelect () {
		return $this->payerSelect;
	}

	/**
	 * @param int $payerSelect
	 * @return Item
	 */
	public function setPayerSelect ($payerSelect) {
		$this->payerSelect = $payerSelect;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLoadingSelect () {
		return $this->loadingSelect;
	}

	/**
	 * @param int $loadingSelect
	 * @return Item
	 */
	public function setLoadingSelect ($loadingSelect) {
		$this->loadingSelect = $loadingSelect;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTermId () {
		return $this->termId;
	}

	/**
	 * @param int $termId
	 * @return Item
	 */
	public function setTermId ($termId) {
		$this->termId = $termId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLoadingDate () {
		return $this->loadingDate;
	}

	/**
	 * @param string $loadingDate
	 * @return Item
	 */
	public function setLoadingDate ($loadingDate) {
		$this->loadingDate = $loadingDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLoadingTimeFrom () {
		return $this->loadingTimeFrom;
	}

	/**
	 * @param string $loadingTimeFrom
	 * @return Item
	 */
	public function setLoadingTimeFrom ($loadingTimeFrom) {
		$this->loadingTimeFrom = $loadingTimeFrom;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLoadingTimeTo () {
		return $this->loadingTimeTo;
	}

	/**
	 * @param string $loadingTimeTo
	 * @return Item
	 */
	public function setLoadingTimeTo ($loadingTimeTo) {
		$this->loadingTimeTo = $loadingTimeTo;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDischargeDate () {
		return $this->dischargeDate;
	}

	/**
	 * @param string $dischargeDate
	 * @return Item
	 */
	public function setDischargeDate ($dischargeDate) {
		$this->dischargeDate = $dischargeDate;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDischargeTimeFrom () {
		return $this->dischargeTimeFrom;
	}

	/**
	 * @param string $dischargeTimeFrom
	 * @return Item
	 */
	public function setDischargeTimeFrom ($dischargeTimeFrom) {
		$this->dischargeTimeFrom = $dischargeTimeFrom;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDischargeTimeTo () {
		return $this->dischargeTimeTo;
	}

	/**
	 * @param string $dischargeTimeTo
	 * @return Item
	 */
	public function setDischargeTimeTo ($dischargeTimeTo) {
		$this->dischargeTimeTo = $dischargeTimeTo;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLoadingPersonalBranchId () {
		return $this->loadingPersonalBranchId;
	}

	/**
	 * @param int $loadingPersonalBranchId
	 * @return Item
	 */
	public function setLoadingPersonalBranchId ($loadingPersonalBranchId) {
		$this->loadingPersonalBranchId = $loadingPersonalBranchId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDischargePersonalBranchId () {
		return $this->dischargePersonalBranchId;
	}

	/**
	 * @param int $dischargePersonalBranchId
	 * @return Item
	 */
	public function setDischargePersonalBranchId ($dischargePersonalBranchId) {
		$this->dischargePersonalBranchId = $dischargePersonalBranchId;
		return $this;
	}

	/**
	 * @return Person
	 */
	public function getPayer () {
		return $this->payer;
	}

	/**
	 * @param Person $payer
	 * @return Item
	 */
	public function setPayer (Person $payer) {
		$this->payer = $payer;
		return $this;
	}

	/**
	 * @return Person
	 */
	public function getLoading () {
		return $this->loading;
	}

	/**
	 * @param Person $loading
	 * @return Item
	 */
	public function setLoading (Person $loading) {
		$this->loading = $loading;
		return $this;
	}

	/**
	 * @return Person
	 */
	public function getDischarge () {
		return $this->discharge;
	}

	/**
	 * @param Person $discharge
	 * @return Item
	 */
	public function setDischarge (Person $discharge) {
		$this->discharge = $discharge;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getLoadingComfortId () {
		return $this->loadingComfortId;
	}

	/**
	 * @param int $loadingComfortId
	 * @return Item
	 */
	public function setLoadingComfortId ($loadingComfortId) {
		$this->loadingComfortId = $loadingComfortId;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDischargeComfortId () {
		return $this->dischargeComfortId;
	}

	/**
	 * @param int $dischargeComfortId
	 * @return Item
	 */
	public function setDischargeComfortId ($dischargeComfortId) {
		$this->dischargeComfortId = $dischargeComfortId;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isTwowayShipment () {
		return $this->twowayShipment;
	}

	/**
	 * @param bool $twowayShipment
	 * @return Item
	 */
	public function setTwowayShipment ($twowayShipment) {
		$this->twowayShipment = $twowayShipment;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTwowayShipmentDescription () {
		return $this->twowayShipmentDescription;
	}

	/**
	 * @param string $twowayShipmentDescription
	 * @return Item
	 */
	public function setTwowayShipmentDescription ($twowayShipmentDescription) {
		$this->twowayShipmentDescription = $twowayShipmentDescription;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isYard () {
		return $this->yard;
	}

	/**
	 * @param bool $yard
	 * @return Item
	 */
	public function setYard ($yard) {
		$this->yard = $yard;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDeliveryNotesBack () {
		return $this->deliveryNotesBack;
	}

	/**
	 * @param int $deliveryNotesBack
	 * @return Item
	 */
	public function setDeliveryNotesBack ($deliveryNotesBack) {
		$this->deliveryNotesBack = $deliveryNotesBack;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isEuroPalletsBack () {
		return $this->euroPalletsBack;
	}

	/**
	 * @param bool $euroPalletsBack
	 * @return Item
	 */
	public function setEuroPalletsBack ($euroPalletsBack) {
		$this->euroPalletsBack = $euroPalletsBack;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isLoadingAviso () {
		return $this->loadingAviso;
	}

	/**
	 * @param bool $loadingAviso
	 * @return Item
	 */
	public function setLoadingAviso ($loadingAviso) {
		$this->loadingAviso = $loadingAviso;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isDischargeAviso () {
		return $this->dischargeAviso;
	}

	/**
	 * @param bool $dischargeAviso
	 * @return Item
	 */
	public function setDischargeAviso ($dischargeAviso) {
		$this->dischargeAviso = $dischargeAviso;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isAvisoSms () {
		return $this->avisoSms;
	}

	/**
	 * @param bool $avisoSms
	 * @return Item
	 */
	public function setAvisoSms ($avisoSms) {
		$this->avisoSms = $avisoSms;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isConsider () {
		return $this->consider;
	}

	/**
	 * @param bool $consider
	 * @return Item
	 */
	public function setConsider ($consider) {
		$this->consider = $consider;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isOversize () {
		return $this->oversize;
	}

	/**
	 * @param bool $oversize
	 * @return Item
	 */
	public function setOversize ($oversize) {
		$this->oversize = $oversize;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isLabelFragile () {
		return $this->labelFragile;
	}

	/**
	 * @param bool $labelFragile
	 * @return Item
	 */
	public function setLabelFragile ($labelFragile) {
		$this->labelFragile = $labelFragile;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isLabelDontTilt () {
		return $this->labelDontTilt;
	}

	/**
	 * @param bool $labelDontTilt
	 * @return Item
	 */
	public function setLabelDontTilt ($labelDontTilt) {
		$this->labelDontTilt = $labelDontTilt;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isLabelThisSideUp () {
		return $this->labelThisSideUp;
	}

	/**
	 * @param bool $labelThisSideUp
	 * @return Item
	 */
	public function setLabelThisSideUp ($labelThisSideUp) {
		$this->labelThisSideUp = $labelThisSideUp;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isHydraulicFrontLoading () {
		return $this->hydraulicFrontLoading;
	}

	/**
	 * @param bool $hydraulicFrontLoading
	 * @return Item
	 */
	public function setHydraulicFrontLoading ($hydraulicFrontLoading) {
		$this->hydraulicFrontLoading = $hydraulicFrontLoading;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isHydraulicFrontDischarge () {
		return $this->hydraulicFrontDischarge;
	}

	/**
	 * @param bool $hydraulicFrontDischarge
	 * @return Item
	 */
	public function setHydraulicFrontDischarge ($hydraulicFrontDischarge) {
		$this->hydraulicFrontDischarge = $hydraulicFrontDischarge;
		return $this;
	}

	/**
	 * @return CashOnDelivery
	 */
	public function getCashOnDelivery () {
		return $this->cashOnDelivery;
	}

	/**
	 * @param CashOnDelivery $cashOnDelivery
	 * @return Item
	 */
	public function setCashOnDelivery (CashOnDelivery $cashOnDelivery) {
		$this->cashOnDelivery = $cashOnDelivery;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getKg () {
		return $this->kg;
	}

	/**
	 * @param float $kg
	 * @return Item
	 */
	public function setKg ($kg) {
		$this->kg = $kg;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getM3 () {
		return $this->m3;
	}

	/**
	 * @param float $m3
	 * @return Item
	 */
	public function setM3 ($m3) {
		$this->m3 = $m3;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getDimensionsD () {
		return $this->dimensionsD;
	}

	/**
	 * @param float $dimensionsD
	 * @return Item
	 */
	public function setDimensionsD ($dimensionsD) {
		$this->dimensionsD = $dimensionsD;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getDimensionsS () {
		return $this->dimensionsS;
	}

	/**
	 * @param float $dimensionsS
	 * @return Item
	 */
	public function setDimensionsS ($dimensionsS) {
		$this->dimensionsS = $dimensionsS;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getDimensionsV () {
		return $this->dimensionsV;
	}

	/**
	 * @param float $dimensionsV
	 * @return Item
	 */
	public function setDimensionsV ($dimensionsV) {
		$this->dimensionsV = $dimensionsV;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getOrderValue () {
		return $this->orderValue;
	}

	/**
	 * @param float $orderValue
	 * @return Item
	 */
	public function setOrderValue ($orderValue) {
		$this->orderValue = $orderValue;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrderValueCurrency () {
		return $this->orderValueCurrency;
	}

	/**
	 * @param string $orderValueCurrency
	 * @return Item
	 */
	public function setOrderValueCurrency ($orderValueCurrency) {
		$this->orderValueCurrency = $orderValueCurrency;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNoteLoading () {
		return $this->noteLoading;
	}

	/**
	 * @param string $noteLoading
	 * @return Item
	 */
	public function setNoteLoading ($noteLoading) {
		$this->noteLoading = $noteLoading;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getNoteDischarge () {
		return $this->noteDischarge;
	}

	/**
	 * @param string $noteDischarge
	 * @return Item
	 */
	public function setNoteDischarge ($noteDischarge) {
		$this->noteDischarge = $noteDischarge;
		return $this;
	}

	/**
	 * @return Pack[]
	 */
	public function getPacks () {
		return $this->packs;
	}

	/**
	 * @param Pack[] $packs
	 * @return Item
	 */
	public function addPack (Pack $pack) {
		$this->packs[] = $pack;
		return $this;
	}

	/**
	 * @return Adr[]
	 */
	public function getAdrs () {
		return $this->adrs;
	}

	/**
	 * @param Adr[] $adrs
	 * @return Item
	 */
	public function addAdr (Adr $adr) {
		$this->adrs[] = $adr;
		return $this;
	}

}
