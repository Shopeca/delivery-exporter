<?php

namespace Shopeca\XML\Delivery\Gls;

use Shopeca\XML\Storage;

class CsvStorage extends Storage
{

	protected function formatXml($xml)
	{
		// Just return, we handle CSV here
		return $xml;
	}

}
