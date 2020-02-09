<?php

namespace Tests\Utils;

use PHPUnit\Framework\TestCase;
use \Shopeca\XML\Delivery\Toptrans as Toptrans;
use Shopeca\XML\Delivery\Geis as Geis;
use Shopeca\XML\Delivery\Gls as Gls;
use Shopeca\XML\Storage;

class DeliveryExportTest extends TestCase
{

	public function testGeisGenerator(): void
	{
		$item = new Geis\Item();

		$sender = new Geis\Person();
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

		$recipient = new Geis\Person();
		$recipient
			->setName('Jan Pavel')
			->setStreet('Olbrachtova')
			->setStreetNumOri('1')
			->setCity('Liberec')
			->setZipCode('46001')
			->setCountry('CZ')
			->setContactEmail('jan@pavel.cz')
			->setContactPhone('987654321');

		$row = new Geis\Row();
		$row
			->setCount(1)
			->setWeight(3000);

		$services = new Geis\Services();
		$services
			->setCOD(new Geis\COD(2000, 'CZ', 4445555));

		$item
			->setDeliveryType(Geis\Item::DELIVERY_TYPE_CARGO)
			->setDocumentType(Geis\Item::DOCUMENT_TYPE_EXPEDITION)
			->setSender($sender)
			->setRec($recipient)
			->setAddrCode('111222333')
			->setServices($services)
			->addRow($row);

		$exporter = new Geis\Exporter(new Storage(__DIR__.'/../temp'));

		$exporter->addItem($item);

		$fileName = 'geis-export.xml';
		$filePath = __DIR__.'/../temp/'.$fileName;
		$exporter->save($fileName);

		$this->assertFileExists($filePath);
		$this->assertXmlFileEqualsXmlFile(__DIR__.'/'.$fileName, $filePath);
	}

	public function testToptransGenerator(): void
	{
		$item = new Toptrans\Item();

		$payer = new Toptrans\Person();
		$payer
			->setName('Velký e-shop největší')
			->setAddress(
				(new Toptrans\Address())
					->setStreet('Ulice jedna')
					->setCity('Praha 2')
					->setCountry('CZ')
			)
			->setEmail('eshop@test.cz')
			->setPhone('123456789');

		$cashOnDelivery = (new Toptrans\CashOnDelivery())
			->setPrice(100)
			->setType(Toptrans\CashOnDelivery::TYPE_INLAND);

		$pack = (new Toptrans\Pack())
			->setPackId(1)
			->setQuantity(1);

		$item
			->setLabel('Label')
			->setPayer($payer)
			->setCashOnDelivery($cashOnDelivery)
			->addPack($pack);

		$exporter = new Toptrans\Exporter(new Storage(__DIR__.'/../temp'));

		$exporter->addItem($item);

		$fileName = 'toptrans-export.xml';
		$filePath = __DIR__.'/../temp/'.$fileName;
		$exporter->save($fileName);

		$this->assertFileExists($filePath);
		$this->assertXmlFileEqualsXmlFile(__DIR__.'/'.$fileName, $filePath);
	}

	public function testGlsGenerator(): void
	{
		$item = new Gls\Item();

		$item
			->setName('Karel Vidlička')
			->setAddress('Vokova 2')
			->setTown('Slavonice')
			->setPost('12340')
			->setCountry('CZ')
			->setCashOnDelivery(500.50)
			->setVariableSymbol('445566')
			->setPhone('+420123555666')
			->setMail('karel@vidlicka.cz');

		$exporter = new Gls\Exporter(new Gls\CsvStorage(__DIR__.'/../temp'));

		$exporter->addItem($item);

		$fileName = 'gls-export.csv';
		$filePath = __DIR__.'/../temp/'.$fileName;
		$exporter->save($fileName);

		$this->assertFileExists($filePath);
		$this->assertFileEquals(__DIR__.'/'.$fileName, $filePath);
	}

}
