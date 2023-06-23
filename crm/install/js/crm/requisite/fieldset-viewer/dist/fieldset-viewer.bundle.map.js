{"version":3,"file":"fieldset-viewer.bundle.map.js","names":["this","BX","Crm","exports","main_core","main_core_events","main_popup","main_loader","ui_buttons","crm_field_listEditor","_","t","_t","_t2","_t3","_t4","_t5","_t6","_t7","_t8","FieldsetViewer","EventEmitter","constructor","options","super","cache","Cache","MemoryCache","setEventNamespace","subscribeFromOptions","events","setOptions","Event","bind","bindElement","onBindElementClick","setData","data","set","getData","get","load","Promise","resolve","entityTypeId","entityId","fieldListEditorOptions","getOptions","presetId","fieldsPanelOptions","ajax","runAction","json","then","result","getPopup","remember","Popup","autoHide","width","height","className","noAllPaddings","Type","isPlainObject","popupOptions","onClose","emit","changed","getIsChanged","setIsChanged","value","Text","toBoolean","getLoader","Loader","show","popup","Dom","clean","getContentContainer","setContent","createPopupContent","hide","close","event","preventDefault","Tag","render","createBannerLayout","createListLayout","getFooterLayout","createCloseButton","title","Loc","getMessage","replace","encode","description","text","isStringFilled","more","createListContainer","fields","map","createListItem","editButton","_options$editing","editing","url","onEditButtonClick","_options$editing2","SidePanel","Instance","open","cacheable","label","onCloseClick","getFieldListEditor","ListEditor","setId","id","editable","type","required","autoSave","onSave","hideVirtual","getEditButton","Button","color","Color","LIGHT_BORDER","icon","Icon","EDIT","size","Size","SMALL","round","click","showSlider","Requisite","Main","UI","Field"],"sources":["fieldset-viewer.bundle.js"],"mappings":"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"}