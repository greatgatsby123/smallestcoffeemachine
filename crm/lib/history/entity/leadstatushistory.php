<?php
namespace Bitrix\Crm\History\Entity;
use Bitrix\Main;
use Bitrix\Main\Entity;
use Bitrix\Crm\History\HistoryEntryType;

/**
 * Class LeadStatusHistoryTable
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_LeadStatusHistory_Query query()
 * @method static EO_LeadStatusHistory_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_LeadStatusHistory_Result getById($id)
 * @method static EO_LeadStatusHistory_Result getList(array $parameters = [])
 * @method static EO_LeadStatusHistory_Entity getEntity()
 * @method static \Bitrix\Crm\History\Entity\EO_LeadStatusHistory createObject($setDefaultValues = true)
 * @method static \Bitrix\Crm\History\Entity\EO_LeadStatusHistory_Collection createCollection()
 * @method static \Bitrix\Crm\History\Entity\EO_LeadStatusHistory wakeUpObject($row)
 * @method static \Bitrix\Crm\History\Entity\EO_LeadStatusHistory_Collection wakeUpCollection($rows)
 */
class LeadStatusHistoryTable extends Entity\DataManager
{
	public static function getTableName()
	{
		return 'b_crm_lead_status_history';
	}
	public static function getMap()
	{
		return array(
			'ID' => array('data_type' => 'integer', 'primary' => true, 'autocomplete' => true),
			'TYPE_ID' => array('data_type' => 'integer', 'required' => true),
			'OWNER_ID' => array('data_type' => 'integer', 'required' => true),
			'CREATED_TIME' => array('data_type' => 'datetime', 'required' => true),
			'CREATED_DATE' => array('data_type' => 'date', 'required' => true),
			'PERIOD_YEAR' => array('data_type' => 'integer'),
			'PERIOD_QUARTER' => array('data_type' => 'integer'),
			'PERIOD_MONTH' => array('data_type' => 'integer'),
			'RESPONSIBLE_ID' => array('data_type' => 'integer'),
			'STATUS_SEMANTIC_ID' => array('data_type' => 'string'),
			'STATUS_ID' => array('data_type' => 'string'),
			'IS_IN_WORK' => array('data_type' => 'boolean', 'values' => array('N', 'Y')),
			'IS_JUNK' => array('data_type' => 'boolean', 'values' => array('N', 'Y')),
			'HAS_SUPPOSED_HISTORY_RECORD' => array(
				'data_type' => 'integer',
				'expression' => array(
					'CASE WHEN EXISTS (SELECT 1 FROM b_crm_lead_status_history_with_supposed WHERE OWNER_ID = %s AND CREATED_TIME = %s AND STATUS_ID = %s) THEN 1 ELSE 0 END',
					'OWNER_ID',
					'CREATED_TIME',
					'STATUS_ID'
				),
			),
		);
	}
	public static function deleteByOwner($ownerID)
	{
		if(!is_int($ownerID))
		{
			$ownerID = (int)$ownerID;
		}

		if($ownerID <= 0)
		{
			throw new Main\ArgumentException('Owner ID must be greater than zero.', 'ownerID');
		}

		Main\Application::getConnection()->queryExecute("DELETE FROM b_crm_lead_status_history WHERE OWNER_ID = {$ownerID}");
	}
	public static function deleteByFilter(array $filter,  $borderID = 0)
	{
		$ownerID = isset($filter['OWNER_ID']) ? (int)$filter['OWNER_ID'] : 0;
		if($ownerID <= 0)
		{
			throw new Main\ArgumentException("Filter parameter 'OWNER_ID' must be greater than zero.", 'filter');
		}

		$typeID = isset($filter['TYPE_ID']) ? $filter['TYPE_ID'] : '';
		if(!HistoryEntryType::isDefined($typeID))
		{
			throw new Main\ArgumentException("Filter parameter 'TYPE_ID' value is not supported in current context.", 'filter');
		}

		if(!is_int($borderID))
		{
			$borderID = (int)$borderID;
		}

		$sql = "DELETE from b_crm_lead_status_history WHERE OWNER_ID = {$ownerID} AND TYPE_ID = {$typeID}";
		if($borderID > 0)
		{
			$sql .= " AND ID < {$borderID}";
		}

		Main\Application::getConnection()->queryExecute($sql);
	}
	public static function synchronize($ownerID, array $data)
	{
		if(!is_int($ownerID))
		{
			$ownerID = (int)$ownerID;
		}

		if($ownerID <= 0)
		{
			throw new Main\ArgumentException('Owner ID must be greater than zero.', 'ownerID');
		}

		$userID = isset($data['RESPONSIBLE_ID']) ? (int)$data['RESPONSIBLE_ID'] : 0;
		Main\Application::getConnection()->queryExecute(
			"UPDATE b_crm_lead_status_history SET RESPONSIBLE_ID = {$userID} WHERE OWNER_ID = {$ownerID}"
		);
	}
}