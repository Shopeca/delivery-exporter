<?php
namespace Shopeca\XML\Delivery\Gls;

use Shopeca\XML\Generators\BaseGenerator;
use Shopeca\XML\Generators\IItem;
use Shopeca\XML\ItemIncompletedException;

class Exporter extends BaseGenerator {

	/**
	 * @param $name
	 * @return string
	 */
	protected function getTemplate($name)
	{
		return __DIR__ . '/latte/' . $name . '.latte';
	}

	public function addItem(IItem $item)
	{
		if (!$this->prepared) {
			$this->prepare();
		}

		assert($item instanceof Item);
		if (!$item->validate()) {
			throw new ItemIncompletedException('Item is not complete');
		}

		if (is_resource($this->handle)) {
			fputcsv ($this->handle , [
				$item->name,
				$item->address,
				$item->town,
				$item->post,
				$item->country,
				$item->cashOnDelivery,
				$item->variableSymbol,
				$item->phone,
				$item->mail,
			], ";");
		}

	}

	protected function prepareTemplate($template)
	{
		if ($template === 'header') {
			if (is_resource($this->handle)) {
				fputcsv ($this->handle , [
					'name',
					'address',
					'town',
					'post',
					'country',
					'cashOnDelivery',
					'variableSymbol',
					'phone',
					'mail',
				], ";");
			}
		}
	}

	public function generate () {
		// Here might go some processing before the file is created
	}

}