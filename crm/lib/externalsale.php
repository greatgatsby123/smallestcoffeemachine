<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage crm
 * @copyright 2001-2012 Bitrix
 */
namespace Bitrix\Crm;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

/**
 * Class ExternalSaleTable
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_ExternalSale_Query query()
 * @method static EO_ExternalSale_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_ExternalSale_Result getById($id)
 * @method static EO_ExternalSale_Result getList(array $parameters = [])
 * @method static EO_ExternalSale_Entity getEntity()
 * @method static \Bitrix\Crm\EO_ExternalSale createObject($setDefaultValues = true)
 * @method static \Bitrix\Crm\EO_ExternalSale_Collection createCollection()
 * @method static \Bitrix\Crm\EO_ExternalSale wakeUpObject($row)
 * @method static \Bitrix\Crm\EO_ExternalSale_Collection wakeUpCollection($rows)
 */
class ExternalSaleTable extends Entity\DataManager
{
	public static function getTableName()
	{
		return 'b_crm_external_sale';
	}

	public static function getMap()
	{
		return array(
			'ID' => array(
				'data_type' => 'integer',
				'primary' => true,
				'autocomplete' => true,
			),
			'NAME' => array(
				'data_type' => 'string'
			)
		);
	}
}
