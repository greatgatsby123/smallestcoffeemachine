<? namespace Bitrix\Main\UpdateSystem;$GLOBALS['____983730899']= array(base64_decode('ZGVma'.'W5lZA='.'='),base64_decode(''.'ZnVuY3'.'R'.'pb25fZ'.'Xhpc'.'3'.'Rz'),base64_decode('Z'.'GVmaW5'.'lZA='.'='),base64_decode('cG'.'hwdmVyc'.'2lvb'.'g=='),base64_decode(''.'Y2xh'.'c'.'3NfZ'.'Xhpc'.'3'.'Rz'));if(!function_exists(__NAMESPACE__.'\\___1786100759')){function ___1786100759($_977410273){static $_1452275893= false; if($_1452275893 == false) $_1452275893=array('T'.'E'.'lD'.'R'.'U5TRV9LRVk=','bGFuZw='.'=','dXRm','Qlhf'.'V'.'VR'.'G','WQ==','Tg==','c3RhYm'.'xl','bWF'.'pbg==','c3Rh'.'Ymxl'.'X3'.'Zlc'.'nN'.'pb25zX'.'2'.'9'.'ubH'.'k=','WQ==','Q'.'0FOR1pJU'.'A==',''.'Z3pjb21'.'wcmVzcw==',''.'W'.'Q==','T'.'g==',''.'U1VQRF9'.'EQl'.'M=','WEU=','WQ'.'==',''.'Tg==',''.'U'.'1VQ'.'R'.'F9VUlM=',''.'Q0x'.'JRU5UX1NJVE'.'U=','U0'.'V'.'S'.'VkVSX05B'.'TUU=',''.'c3Bk',''.'b'.'W'.'Fpb'.'g'.'='.'=',''.'Y'.'3Jj'.'X2NvZGU'.'=','',''.'ZGJ2','U1'.'VQRF'.'9WRVI=','VVBEQV'.'RFX1'.'NZU1R'.'FTV9WRVJTSU9OX0E=','','U1'.'V'.'QRF9TUlM=','UlU=','U1VQR'.'F9DTV'.'A=','Tg==','U1VQ'.'RF9TVFM=','UkE=','T'.'ElDRU5TRV9TSUdORU'.'Q=','Q0xJRU5UX1BIUFZFUg==',''.'TkdJ'.'Tlg=','bWFpbg==','dXBkYXRlX3VzZV9uZ2lue'.'A'.'==','W'.'Q'.'='.'=','U'.'01E','bWFp'.'bg==','d'.'X'.'BkYXRlX'.'3Nh'.'Z'.'mVfbW'.'9kZQ==','Tg='.'=',''.'VkVS'.'U0lPTg==','VFlQRU5D','Q0hIQg='.'=','SF'.'RUUF9IT1NU','Q'.'1'.'NBQg==','U0VSVkVSX0FE'.'RFI=','U1'.'VJ'.'R'.'A='.'=','QVBQTE'.'lDQVR'.'JT0'.'4=','','Y2x'.'1c3Rlcg==','Q0'.'NsdXN0ZXI=','PU'.'F'.'DVElWRQ==',''.'WQ==','L2J'.'p'.'dH'.'JpeC9tb2R1'.'bGV'.'zL2'.'1haW4'.'vY'.'2xhc'.'3'.'Nlcy9nZW5lcmF'.'sL3VwZGF0ZV9'.'j'.'bG'.'ll'.'b'.'nQucGhw','LQ==','b'.'W'.'Fpbg==','Tg==','R'.'A='.'=','RQ==','VA==',''.'Rg==','L2'.'J'.'pdH'.'Jp'.'eC9'.'tb2R1bGVzL21'.'haW4vY2'.'xhc3Nlcy9nZW5lcm'.'F'.'sL3VwZG'.'F0'.'ZV9jbGllbnQucGhw','','L2Jp'.'dHJpe'.'C9'.'tb2R1bGVz'.'L2'.'1'.'haW4v'.'Y2xhc3N'.'lcy9nZW5lc'.'mFsL3VwZGF0ZV9jbGllbn'.'QucGhw','');return base64_decode($_1452275893[$_977410273]);}}; use Bitrix\Main\Application; use Bitrix\Main\License; use Bitrix\Main\Loader; use Bitrix\Main\SystemException; use Bitrix\Main\SiteTable; class PortalInfo{ private License $_252253309; public function __construct(){ $this->_252253309= Application::getInstance()->getLicense();} public function common(): array{ global $DB; return[ ___1786100759(0) => $this->_252253309->getHashLicenseKey(), ___1786100759(1) => LANGUAGE_ID, ___1786100759(2) => $GLOBALS['____983730899'][0](___1786100759(3))? ___1786100759(4): ___1786100759(5), ___1786100759(6) => \COption::GetOptionString(___1786100759(7), ___1786100759(8), ___1786100759(9)), ___1786100759(10) => $GLOBALS['____983730899'][1](___1786100759(11))? ___1786100759(12): ___1786100759(13), ___1786100759(14) => $DB->type, ___1786100759(15) =>(isset($DB->_1641815472) && $DB->_1641815472)? ___1786100759(16): ___1786100759(17), ___1786100759(18) => $this->_252253309->getActiveUsersCount(), ___1786100759(19) => $_SERVER[___1786100759(20)], ___1786100759(21) => \COption::GetOptionString(___1786100759(22), ___1786100759(23), ___1786100759(24)), ___1786100759(25) => $this->__294552100(), ___1786100759(26) => $GLOBALS['____983730899'][2](___1786100759(27))? UPDATE_SYSTEM_VERSION_A: ___1786100759(28), ___1786100759(29) => $this->__858940617() ?? ___1786100759(30), ___1786100759(31) => ___1786100759(32), ___1786100759(33) => $this->__833294347() ?? ___1786100759(34), ___1786100759(35) => $this->__351254461(), ___1786100759(36) => $GLOBALS['____983730899'][3](), ___1786100759(37) => \COption::GetOptionString(___1786100759(38), ___1786100759(39), ___1786100759(40)), ___1786100759(41) => \COption::GetOptionString(___1786100759(42), ___1786100759(43), ___1786100759(44)), ___1786100759(45) => SM_VERSION, ___1786100759(46) => $this->getLicenseType(), ___1786100759(47) => $_SERVER[___1786100759(48)], ___1786100759(49) => $_SERVER[___1786100759(50)], ___1786100759(51) => $GLOBALS[___1786100759(52)]->GetServerUniqID(),];} private function __294552100(): string{ global $DB; $_1196273661= $DB->GetVersion(); return $_1196273661 !== false? $_1196273661: ___1786100759(53);} private function __858940617():?int{ if(Loader::includeModule(___1786100759(54)) && $GLOBALS['____983730899'][4](___1786100759(55))){ return \CCluster::getServersCount();} return null;} private function __833294347():?int{ return SiteTable::getCount([___1786100759(56) => ___1786100759(57)]);} private function __351254461(): string{ require_once(Application::getDocumentRoot(). ___1786100759(58)); $_1277739814= \CUpdateClient::getNewLicenseSignedKey(); return $_1277739814.___1786100759(59).\COption::GetOptionString(___1786100759(60), $_1277739814, ___1786100759(61));} public function getLicenseType(): string{ if($this->_252253309->isDemo()){ return ___1786100759(62);} elseif($this->_252253309->isEncoded()){ return ___1786100759(63);} elseif($this->_252253309->isTimeBound()){ return ___1786100759(64);} else{ return ___1786100759(65);}} public function getModules(): array{ require_once(Application::getDocumentRoot(). ___1786100759(66)); $_1692620232= ___1786100759(67); $_1821865625= \CUpdateClient::GetCurrentModules($_1692620232); $_226905266=(\CUpdateExpertMode::isEnabled() && \CUpdateExpertMode::isCorrectModulesStructure([])); if($_226905266){ $_1821865625= \CUpdateExpertMode::processModulesFrom([], $_1821865625);} if(!empty($_1692620232)){ throw new SystemException($_1692620232);} return $_1821865625;} public function getLanguages(): array{ require_once(Application::getDocumentRoot(). ___1786100759(68)); $_1692620232= ___1786100759(69); $_892369981= \CUpdateClient::GetCurrentLanguages($_1692620232); if(!empty($_1692620232)){ throw new SystemException($_1692620232);} return $_892369981;}}?>