{"version":3,"file":"script.map.js","names":["BX","namespace","Crm","KanbanComponent","currentPopupItem","currentPopup","currentData","successClosePopup","dropConfirmed","activePopups","returnItem","item","lastPosition","getLastPosition","data","getData","grid","getGrid","price","parseFloat","columnId","targetId","this","getColumn","decPrice","incPrice","updateItem","getId","unhideItem","clearPopup","containerId","fields","querySelectorAll","length","i","c","defaultVal","value","collectFieldsPopup","post","name","showPopup","handlerData","handlerType","itemData","items","findChildren","className","return","style","display","PopupWindow","window","body","closeIcon","offsetLeft","lightShadow","overlay","titleBar","content","create","html","draggable","contentColor","closeByEsc","events","onPopupClose","bind","buttons","PopupWindowButton","text","message","click","toLowerCase","setAjaxParams","onItemMoved","targetColumn","beforeItem","getItem","dropZone","getDropZone","captureItem","close","setContent","setTitleBar","show","leadConvert","schema","id","CrmLeadConverter","getCurrent","openEntitySelector","result","convert","config","CrmLeadConversionScheme","createConfig","columnPopup","gridData","targetColumnId","columnData","type","entityType","skip","dropPopup","dropEvent","dropZoneData","hideItem","denyAction","popupWindow","uniquePopupId","setTimeout","onSpecialItemDraw","layout","slice","call","forEach","link","delegate","e","urlMarker","toString","linksPath","skipslider","parseInt","location","href","url","SidePanel","Instance","open","params","preventDefault","EntityEditorUserSelector","_id","_settings","prototype","initialize","settings","_isInitialized","anchor","_mainWindow","SocNetLogDestination","containerWindow","init","groupCode","extranetUser","bindMainPopup","node","offsetTop","callback","select","onSelect","showSearchInput","departmentSelectDisable","users","groups","sonetgroups","department","departmentRelation","buildDepartmentRelation","itemsLast","last","itemsSelected","isCrmFeed","useClientDatabase","destSort","allowAddUser","allowSearchCrmEmailUsers","allowUserSearch","openDialog","bindNode","closeDialog","search","bUndeleted","prop","getFunction","self"],"sources":["script.js"],"mappings":"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"}