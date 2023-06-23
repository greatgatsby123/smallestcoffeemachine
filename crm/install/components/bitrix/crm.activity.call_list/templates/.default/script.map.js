{"version":3,"sources":["script.js"],"names":["AJAX_URL","lastInstance","CallListActivity","config","this","node","callListId","webformId","webformSecCode","allowEdit","gridId","lastGridUrl","enableSavePopup","tabs","_itemsState","_handleTabHeaderClickEvent","_handleTabHeaderClick","bind","init","externalRequests","create","getLast","prototype","self","getNode","setActiveTab","tabHeader","tabNodes","BX","findChildrenByClassName","type","isArray","forEach","tabNode","push","dataset","bindEvents","addCustomEvent","window","gridData","requestParams","url","util","add_url_param","sessid","bitrix_sessid","ajax_action","_OnExternalEvent","reInit","findChildren","className","createFromLeads","_handleCreateFromClick","createFromContacts","createFromCompanies","createFromDeals","createFromQuotes","createFromInvoices","addMore","_handleAddMore","callButton","document","e","top","BXIM","Bitrix24","Slider","closeAll","dialogId","CrmActivityProvider","dialogs","hasOwnProperty","close","FoldedCallView","getInstance","destroy","startCallList","openFilterButton","_handleOpenFilterClick","planner","Crm","Activity","Planner","Manager","_onAfterActivitySave","_onPlannerClose","name","scope","querySelector","getNodeValue","value","getTab","getTabHeader","tabName","tab","removeClass","addClass","showItemsGrid","gridContainer","_loadItemsGrid","pageHtml","html","processHTML","SCRIPT","ajax","processScripts","innerHTML","HTML","successCallback","params","method","dataType","data","onsuccess","_reloadLayout","subject","description","outerHTML","target","response","SUCCESS","DATA","LIST_URL","open","context","_generateExternalContext","listUrl","call_list_context","call_list_id","isPlainObject","key","grid","getGrid","reloadGrid","activityFields","NEW","popup","PopupWindow","autoHide","overlay","lightShadow","closeIcon","closeByEsc","contentColor","titleBar","message","content","props","text","buttons","PopupWindowButton","events","click","VIEW_URL","onPopupClose","show","Main","gridManager","deleteItems","items","deleteSelected","selectedIds","getRows","getSelectedIds","gridHandle","getById","instance","reload","_getRandomString","len","charSet","randomString","i","randomPoz","Math","floor","random","length","substring"],"mappings":"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","file":"script.map.js"}