<?php
	require '../vendor/autoload.php';

	$item = new \Shopeca\XML\Delivery\Geis\Item();

	$sender = new \Shopeca\XML\Delivery\Geis\Person();
	$sender
		->setName('Velký e-shop největší')
		->setStreet('Obchodní')
		->setStreetNumOri('12')
		->setStreetNumDesc('20')
		->setCity('Praha 2')
		->setZipCode('12000')
		->setCountry('CZ')
		->setContactEmail('eshop@test.cz')
		->setContactPhone('123456789');

	$recipient = new \Shopeca\XML\Delivery\Geis\Person();
	$recipient
		->setName('Jan Pavel')
		->setStreet('Olbrachtova')
		->setStreetNumOri('1')
		->setCity('Liberec')
		->setZipCode('46001')
		->setCountry('CZ')
		->setContactEmail('jan@pavel.cz')
		->setContactPhone('987654321');

	$row = new \Shopeca\XML\Delivery\Geis\Row();
	$row
		->setCount(1)
		->setWeight(3000);

	$services = new \Shopeca\XML\Delivery\Geis\Services();
	$services
		->setCOD(new \Shopeca\XML\Delivery\Geis\COD(2000, 'CZ', 4445555));

	$item
		->setDeliveryType(\Shopeca\XML\Delivery\Geis\Item::DELIVERY_TYPE_CARGO)
		->setDocumentType(\Shopeca\XML\Delivery\Geis\Item::DOCUMENT_TYPE_EXPEDITION)
		->setSender($sender)
		->setRec($recipient)
		->setAddrCode('111222333')
		->setServices($services)
		->addRow($row);

	$exporter = new \Shopeca\XML\Delivery\Geis\Exporter(new \Shopeca\XML\Storage('temp'));

	$exporter->addItem($item);

	$exporter->save('geis-export.xml');
