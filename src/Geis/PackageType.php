<?php
namespace Shopeca\XML\Delivery\Geis;

abstract class PackageType {

	CONST
		CARDBOARD = 'KT', // Karton
		EURO_PALLET = 'FP', //Europaleta
		ONE_WAY_PALLET = 'EP', //Jednocestná paleta
		BARREL = 'FA', //Sud
		QUARTER_PALLET = 'VP', //Čtvrtpaleta
		GITTER_BOX = 'GP', //Gitterbox
		CAN = 'DO', //Plechovka
		RACK = 'GS', //Stojan
		VOLUME = 'BU', //Svazek
		JERRICAN = 'KN', //Kanystr
		CRATE = 'KS', //Přepravka
		ROLL = 'RO', //Role
		SACK = 'SA', //Pytel
		TANK = 'TC', //Cisterna
		UNWRAPPED = 'UV', //Nezabaleno
		ENVELOPE = 'VG', //Obálka
		BAG = 'BE', //Sáček
		BUCKET = 'EI', //Kbelík
		HALF_PALLET = 'HP', //Půlpaleta
		COLLI = 'CC', //Colli
		BASKET = 'KO', //Koš
		BOTTLE = 'FL', //Lahev
		PARCEL = 'BL', //Balík
		NON_PALLET = 'NEP', //Nepaletizované
		OVERREACHING_ONE_WAY_PALLET = 'PEP', //Přesahová jednocestná paleta
		OVERREACHING_EURO_PALLET = 'PFP', //Přesahová europaleta
		DOUBLE_PALLET = 'DP', //Dvojpaleta
		POLO_PALLET = 'KH'; //Polopaleta

}
