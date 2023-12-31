<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

global $APPLICATION;

$APPLICATION->IncludeComponent(
	'bitrix:crm.control_panel',
	'',
	[
		'ID' => 'CONTACT_LIST',
		'ACTIVE_ITEM_ID' => CCrmComponentHelper::getMenuActiveItemId(CCrmOwnerType::ContactName, $_GET['category_id']),
		'PATH_TO_COMPANY_LIST' => $arResult['PATH_TO_COMPANY_LIST'] ?? '',
		'PATH_TO_COMPANY_EDIT' => $arResult['PATH_TO_COMPANY_EDIT'] ?? '',
		'PATH_TO_CONTACT_LIST' => $arResult['PATH_TO_CONTACT_LIST'] ?? '',
		'PATH_TO_CONTACT_EDIT' => $arResult['PATH_TO_CONTACT_EDIT'] ?? '',
		'PATH_TO_DEAL_LIST' => $arResult['PATH_TO_DEAL_LIST'] ?? '',
		'PATH_TO_DEAL_EDIT' => $arResult['PATH_TO_DEAL_EDIT'] ?? '',
		'PATH_TO_LEAD_LIST' => $arResult['PATH_TO_LEAD_LIST'] ?? '',
		'PATH_TO_LEAD_EDIT' => $arResult['PATH_TO_LEAD_EDIT'] ?? '',
		'PATH_TO_QUOTE_LIST' => $arResult['PATH_TO_QUOTE_LIST'] ?? '',
		'PATH_TO_QUOTE_EDIT' => $arResult['PATH_TO_QUOTE_EDIT'] ?? '',
		'PATH_TO_INVOICE_LIST' => $arResult['PATH_TO_INVOICE_LIST'] ?? '',
		'PATH_TO_INVOICE_EDIT' => $arResult['PATH_TO_INVOICE_EDIT'] ?? '',
		'PATH_TO_REPORT_LIST' => $arResult['PATH_TO_REPORT_LIST'] ?? '',
		'PATH_TO_DEAL_FUNNEL' => $arResult['PATH_TO_DEAL_FUNNEL'] ?? '',
		'PATH_TO_EVENT_LIST' => $arResult['PATH_TO_EVENT_LIST'] ?? '',
		'PATH_TO_PRODUCT_LIST' => $arResult['PATH_TO_PRODUCT_LIST'] ?? '',
	],
	$component
);

$APPLICATION->IncludeComponent(
	'bitrix:crm.dedupe.list',
	'',
	['ENTITY_TYPE' => 'CONTACT'],
	$component
);
