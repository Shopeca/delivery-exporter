<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use Shopeca\XML\Delivery\Geis\COD;
use Shopeca\XML\Delivery\Geis\Exporter;
use Shopeca\XML\Delivery\Geis\Item;
use Shopeca\XML\Delivery\Geis\Person;
use Shopeca\XML\Delivery\Geis\Row;
use Shopeca\XML\Delivery\Geis\Services;
use Shopeca\XML\Storage;

class DeliveryExportTest extends TestCase
{

	public function testGeisGenerator(): void
	{
		$item = new Item();

		$sender = new Person();
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

		$recipient = new Person();
		$recipient
			->setName('Jan Pavel')
			->setStreet('Olbrachtova')
			->setStreetNumOri('1')
			->setCity('Liberec')
			->setZipCode('46001')
			->setCountry('CZ')
			->setContactEmail('jan@pavel.cz')
			->setContactPhone('987654321');

		$row = new Row();
		$row
			->setCount(1)
			->setWeight(3000);

		$services = new Services();
		$services
			->setCOD(new COD(2000, 'CZ', 4445555));

		$item
			->setDeliveryType(Item::DELIVERY_TYPE_CARGO)
			->setDocumentType(Item::DOCUMENT_TYPE_EXPEDITION)
			->setSender($sender)
			->setRec($recipient)
			->setAddrCode('111222333')
			->setServices($services)
			->addRow($row);

		$exporter = new Exporter(new Storage(__DIR__.'/../temp'));

		$exporter->addItem($item);

		$exporter->save('geis-export.xml');
	}

}
