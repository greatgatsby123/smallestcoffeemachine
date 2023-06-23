{"version":3,"sources":["script.js"],"names":["BX","CrmSonetEventEditor","this","_settings","_id","_prefix","_editorName","_formId","_editorContainer","_containerMicro","_containerMicroInner","_containerMicroHeight","_animation","_animationContainer","_msgTitleWrapper","_msgTitle","_msgTitleCloseBtn","_msgTitleToggleBtn","_enableMsgTitle","_isMsgTitleEnabled","_isVisible","_isFormSubmit","prototype","initialize","id","settings","getSetting","_resolveElement","type","isDomNode","value","bind","delegate","_onMessageTitleCloseButtonClick","_onMessageTitleToggleButtonClick","offsetHeight","showEditor","addCustomEvent","_onEditorShow","_onEditorHide","style","display","cancelBtn","_onCancelButtonClick","saveBtn","_onSaveButtonClick","name","defaultVal","hasOwnProperty","setSetting","val","enableMessageTitle","enabled","_showMessageTitle","show","focus","e","addClass","removeClass","elementId","_processEditorVisibilityChange","visible","classList","remove","editor","window","BXHtmlEditor","Get","Focus","add","onCustomEvent","hideEditor","_startAnimation","_endAnimation","stop","container","animationStartHeight","parentNode","height","overflowY","position","opacity","easing","duration","start","finish","offsetTop","transition","makeEaseOut","transitions","quart","step","state","complete","proxy","cssText","animate","PreventDefault","submitForm","form","submit","createSubmitHandler","items","create","self"],"mappings":"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","file":"script.map.js"}