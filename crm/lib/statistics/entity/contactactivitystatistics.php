<?php
namespace Bitrix\Crm\Statistics\Entity;

use Bitrix\Main;
use Bitrix\Main\Entity;
use Bitrix\Crm;

/**
 * Class ContactActivityStatisticsTable
 *
 * DO NOT WRITE ANYTHING BELOW THIS
 *
 * <<< ORMENTITYANNOTATION
 * @method static EO_ContactActivityStatistics_Query query()
 * @method static EO_ContactActivityStatistics_Result getByPrimary($primary, array $parameters = [])
 * @method static EO_ContactActivityStatistics_Result getById($id)
 * @method static EO_ContactActivityStatistics_Result getList(array $parameters = [])
 * @method static EO_ContactActivityStatistics_Entity getEntity()
 * @method static \Bitrix\Crm\Statistics\Entity\EO_ContactActivityStatistics createObject($setDefaultValues = true)
 * @method static \Bitrix\Crm\Statistics\Entity\EO_ContactActivityStatistics_Collection createCollection()
 * @method static \Bitrix\Crm\Statistics\Entity\EO_ContactActivityStatistics wakeUpObject($row)
 * @method static \Bitrix\Crm\Statistics\Entity\EO_ContactActivityStatistics_Collection wakeUpCollection($rows)
 */
class ContactActivityStatisticsTable  extends Entity\DataManager
{
	/**
	* @return string
	*/
	public static function getTableName()
	{
		return 'b_crm_contact_act_stat';
	}
	/**
	* @return array
	*/
	public static function getMap()
	{
		return array(
			'OWNER_ID' => array('data_type' => 'integer', 'required' => true, 'primary' => true),
			'DEADLINE_DATE' => array('data_type' => 'date', 'required' => true, 'primary' => true),
			'PROVIDER_ID' => array('data_type' => 'string', 'primary' => true),
			'PROVIDER_TYPE_ID' => array('data_type' => 'string', 'primary' => true),
			
			'RESPONSIBLE_ID' => array('data_type' => 'integer'),
			'TOTAL_QTY' => array('data_type' => 'integer')
		);
	}
	/**
	* @return void
	*/
	public static function upsert(array $data)
	{
		$fields = array(
			'RESPONSIBLE_ID' => isset($data['RESPONSIBLE_ID']) ? (int)$data['RESPONSIBLE_ID'] : 0,
			'TOTAL_QTY' => isset($data['TOTAL_QTY']) ? (int)$data['TOTAL_QTY'] : 0
		);

		$connection = Main\Application::getConnection();
		$queries = $connection->getSqlHelper()->prepareMerge(
			'b_crm_contact_act_stat',
			array('OWNER_ID', 'DEADLINE_DATE', 'PROVIDER_ID', 'PROVIDER_TYPE_ID'),
			array_merge(
				$fields,
				array(
					'OWNER_ID' => isset($data['OWNER_ID']) ? $data['OWNER_ID'] : 0,
					'DEADLINE_DATE' => isset($data['DEADLINE_DATE']) ? $data['DEADLINE_DATE'] : null,
					'PROVIDER_ID' => isset($data['PROVIDER_ID']) ? $data['PROVIDER_ID'] : null,
					'PROVIDER_TYPE_ID' => isset($data['PROVIDER_TYPE_ID']) ? $data['PROVIDER_TYPE_ID'] : null
				)
			),
			$fields
		);

		foreach($queries as $query)
		{
			$connection->queryExecute($query);
		}
	}
	/**
	* @return void
	*/
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

		Main\Application::getConnection()->queryExecute("DELETE FROM b_crm_contact_act_stat WHERE OWNER_ID = {$ownerID}");
	}
	/**
	* @return void
	*/
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
			"UPDATE b_crm_contact_act_stat SET RESPONSIBLE_ID = {$userID} WHERE OWNER_ID = {$ownerID}"
		);
	}
}