<?php
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage sale
 * @copyright 2001-2013 Bitrix
 */
namespace Bitrix\Crm;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

/**
 * Class InvoiceSpecTable
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_InvoiceSpec_Query query()
 * @method static EO_InvoiceSpec_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_InvoiceSpec_Result getById($id)
 * @method static EO_InvoiceSpec_Result getList(array $parameters = [])
 * @method static EO_InvoiceSpec_Entity getEntity()
 * @method static \Bitrix\Crm\EO_InvoiceSpec createObject($setDefaultValues = true)
 * @method static \Bitrix\Crm\EO_InvoiceSpec_Collection createCollection()
 * @method static \Bitrix\Crm\EO_InvoiceSpec wakeUpObject($row)
 * @method static \Bitrix\Crm\EO_InvoiceSpec_Collection wakeUpCollection($rows)
 */
class InvoiceSpecTable extends Entity\DataManager
{
	public static function getTableName()
	{
		return 'b_crm_invoice_basket';
	}

	public static function getMap()
	{
		global $DB;

		if (function_exists('___dbCastIntToChar') !== true)
		{
			eval(
				'function ___dbCastIntToChar($dbtype, $param)'.
				'{'.
				'   $result = $param;'.
				'   if (ToLower($dbtype) === "mssql")'.
				'   {'.
				'       $result = "CAST(".$param." AS VARCHAR)";'.
				'   }'.
				'   return $result;'.
				'}'
			);
		}

		return array(
			'ID' => array(
				'data_type' => 'integer',
				'primary' => true,
				'autocomplete' => true,
			),
			'DATE_INSERT' => array(
				'data_type' => 'datetime'
			),
			'DATE_INS' => array(
				'data_type' => 'datetime',
				'expression' => array(
					$DB->datetimeToDateFunction('%s'), 'DATE_INSERT'
				)
			),
			'DATE_UPDATE' => array(
				'data_type' => 'datetime'
			),
			'DATE_UPD' => array(
				'data_type' => 'datetime',
				'expression' => array(
					$DB->datetimeToDateFunction('%s'), 'DATE_UPDATE'
				)
			),
			'PRODUCT_ID' => array(
				'data_type' => 'integer'
			),
			'NAME' => array(
				'data_type' => 'string'
			),
			'NAME_WITH_IDENT' => array(
				'data_type' => 'string',
				'expression' => array(
					$DB->concat('%s', '\' [\'', ___dbCastIntToChar('mysql', '%s'), '\']\''), 'NAME', 'PRODUCT_ID'
				)
			),
			'IBLOCK_ELEMENT' => array(
				'data_type' => 'IBlockElementProxy',
				'reference' => array('=this.PRODUCT_ID' => 'ref.ID')
			),
			'ORDER_ID' => array(
				'data_type' => 'integer'
			),
			'INVOICE' => array(
				'data_type' => 'Invoice',
				'reference' => array('=this.ORDER_ID' => 'ref.ID')
			),
			'PRICE' => array(
				'data_type' => 'float'
			),
			'VAT_RATE' => array(
				'data_type' => 'float'
			),
			'VAT_RATE_PRC' => array(
				'data_type' => 'float',
				'expression' => array(
					'100 * %s', 'VAT_RATE'
				)
			),
			'QUANTITY' => array(
				'data_type' => 'float'
			),
			'NOTES' => array(
				'data_type' => 'string'
			),
			'LID' => array(
				'data_type' => 'string'
			),
			'SUMMARY_PRICE' => array(
				'data_type' => 'float',
				'expression' => array(
					'(%s * %s)', 'QUANTITY', 'PRICE'
				)
			)
		);
	}
}
