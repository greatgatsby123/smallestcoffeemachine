<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

Bitrix\Main\UI\Extension::load([
	'main.popup',
	'ui.forms',
	'ui.hint',
	'ui.notification',
	'loader'
]);
?>

<script>
	BX.ready(function()
	{
		BX.Loc.setMessage(<?=CUtil::PhpToJSObject([
			'CRM_DP_AUTOSEARCH_SETTINGS_TITLE' => Loc::getMessage('CRM_DP_AUTOSEARCH_SETTINGS_TITLE'),
			'CRM_DP_AUTOSEARCH_SETTINGS_NOTE' => Loc::getMessage('CRM_DP_AUTOSEARCH_SETTINGS_NOTE'),
			'CRM_DP_AUTOSEARCH_SETTINGS_INTERVAL_TITLE' => Loc::getMessage('CRM_DP_AUTOSEARCH_SETTINGS_INTERVAL_TITLE'),
			'CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT_LEAD' => Loc::getMessage('CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT_LEAD'),
			'CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT_CONTACT' => Loc::getMessage('CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT_CONTACT'),
			'CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT_COMPANY' => Loc::getMessage('CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT_COMPANY'),
			'CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT' => Loc::getMessage('CRM_DP_AUTOSEARCH_START_CONFIRMATION_TEXT'),
			'CRM_DP_AUTOSEARCH_START_CONFIRMATION_BUTTON' => Loc::getMessage('CRM_DP_AUTOSEARCH_START_CONFIRMATION_BUTTON'),
			'CRM_DP_AUTOSEARCH_COMPLETE_TEXT' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_TEXT'),
			'CRM_DP_AUTOSEARCH_COMPLETE_TEXT_LEAD' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_TEXT_LEAD'),
			'CRM_DP_AUTOSEARCH_COMPLETE_TEXT_CONTACT' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_TEXT_CONTACT'),
			'CRM_DP_AUTOSEARCH_COMPLETE_TEXT_COMPANY' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_TEXT_COMPANY'),
			'CRM_DP_AUTOSEARCH_EMPTY_RESULTS_LEAD' => Loc::getMessage('CRM_DP_AUTOSEARCH_EMPTY_RESULTS_LEAD'),
			'CRM_DP_AUTOSEARCH_EMPTY_RESULTS_CONTACT' => Loc::getMessage('CRM_DP_AUTOSEARCH_EMPTY_RESULTS_CONTACT'),
			'CRM_DP_AUTOSEARCH_EMPTY_RESULTS_COMPANY' => Loc::getMessage('CRM_DP_AUTOSEARCH_EMPTY_RESULTS_COMPANY'),
			'CRM_DP_AUTOSEARCH_COMPLETE_CONFLICTED_TEXT' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_CONFLICTED_TEXT'),
			'CRM_DP_AUTOSEARCH_COMPLETE_RESOLVE_CONFLICT_BUTTON' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_RESOLVE_CONFLICT_BUTTON'),
			'CRM_DP_AUTOSEARCH_COMPLETE_RESOLVE_CONFLICT_LIST_LINK' => Loc::getMessage('CRM_DP_AUTOSEARCH_COMPLETE_RESOLVE_CONFLICT_LIST_LINK'),
			'CRM_DP_AUTOSEARCH_SETTINGS_CONFLICTS_FOUND' => Loc::getMessage('CRM_DP_AUTOSEARCH_SETTINGS_CONFLICTS_FOUND'),
		])?>);
		BX.Crm.DedupeAutosearch.setDefault(
			BX.Crm.DedupeAutosearch.create(<?=CUtil::PhpToJSObject([
  				'componentName' => $this->getComponent()->getName(),
				'signedParameters' => $this->getComponent()->getSignedParameters(),
				'entityTypeId' => $arParams['ENTITY_TYPE_ID'],
				'mergerUrl' => $arParams['PATH_TO_MERGE'],
				'dedupeListUrl' => $arParams['PATH_TO_DEDUPELIST'],
				'intervals' => $arResult['INTERVALS'],
				'selectedInterval' => $arResult['SELECTED_INTERVAL'] ?: 0,
				'status' => $arResult['STATUS'] ?? null,
				'infoHelperId' => '12910200',
				'progressData' => $arResult['PROGRESS_DATA'] ?? null
			])?>),
			'<?=CCrmOwnerType::ResolveName($arParams['ENTITY_TYPE_ID'])?>'
		);
	});
</script>
