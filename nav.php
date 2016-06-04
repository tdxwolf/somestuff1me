<?
$Nav=new Nav('Main',$X->user);
if($X->login){
//=== DASHBOARD ===\\
	$Nav->Icon('Dashboard','dashboard','home','chimney');
	$Nav->PrintLink('Icon');
//=== SETTINGS ===\\
	$Nav->Icon('Settings','settings','S');
	$Nav->LinkDrop('dashboard/presets','presets');
	$Nav->LinkDrop('settings/template','template');
	$Nav->LinkDrop('reports/errorpresets','Error Presets');
	$Nav->LinkDrop('users/','Users');
	$Nav->PrintLink('Icon','code');
//=== REPORTS ===\\
	$Nav->Icon('Reports','dashboard','base','bars2');
	$Nav->LinkDrop('settings/processes','Running DB Processes');
	$Nav->LinkDrop('dashboard/realtimestats','Real Time Stats');
	$Nav->LinkDrop('dashboard/logs','Log Search');
	$Nav->LinkDrop('reports/overwacttaken','Recent Errors');
	$Nav->LinkDrop('utilities/overview','Daily Stats');
	$Nav->PrintLink('Icon');
//=== SERVERS ===\\
	$Nav->Icon('Servers','servers','screen','tower');
	$Nav->LinkDrop('servers/addserver','add server');
	$Nav->LinkTitle('Databases');
	$Nav->LinkDrop('http://mu-portal.com/db/','M.U.P.','code',true);
	$Nav->LinkDrop('http://redirect.mu-portal.com/db/','REDIRECT','code',true);
	$Nav->LinkDrop('http://logs.mu-portal.com/phpmyadmin','LOGS','code',true);
	$Nav->LinkDrop('http://seeds.mu-portal.com/phpmyadmin/','SEEDS','code',true);
	$Nav->PrintLink('Icon','code');
//=== INVENTORY ===\\
	$Nav->Icon('IP Addresses','ips','globe');
	$Nav->LinkDrop('ips/overview','Overview');
	$Nav->LinkDrop('ips/new','Add IPs');
	$Nav->LinkDrop('ips/pools','pool manager');
	$Nav->LinkDrop('ips/tools','tools');
	$Nav->LinkTitle('Domain Names');
	$Nav->LinkDrop('domains/new','add domains');
	$Nav->LinkDrop('domains','registrars');
	$Nav->LinkDrop('domains/expiring','expiring soon');
	$Nav->LinkDrop('domains/tools','Tools');
	$Nav->PrintLink('Icon');
//=== PHONES ===\\
	$Nav->Icon('Phones','phones','phone');
	$Nav->LinkDrop('phones','Phone Numbers');
	$Nav->LinkDrop('phones/voicemail','Voicemail');
	$Nav->PrintLink('Icon','code');
//=== SEEDS ===\\
	$Nav->Icon('Seeds','seeds','seeds','seeds2');
	$Nav->LinkDrop('seeds/monitors','inboxing monitors');
	$Nav->PrintLink('Icon');
//=== EMAILS ===\\
	$Nav->Icon('Emails & Lists','emails','emails');
	$Nav->LinkDrop('emails/move','Move Data');
	$Nav->LinkDrop('emails/list','Dynamic Lists');
	$Nav->LinkDrop('emails/tools','Tools');
	$Nav->LinkTitle('Targets');
	$Nav->LinkDrop('settings/targets/','Domains');
	$Nav->LinkDrop('settings/headers/','Headers');
	$Nav->LinkDrop('settings/mtadefaults/','MTA Defaults');
	$Nav->PrintLink('Icon','code');
//=== OFFERS ===\\
	$Nav->Icon('Offers','offers','creative','creativecontent');
	$Nav->LinkDrop('offers/new','add offer');
	$Nav->LinkDrop('offers/badwords','bad words');
	$Nav->LinkDrop('offers/suppressions','suppression lists');
	$Nav->PrintLink('Icon');
//=== JOBS ===\\
	$Nav->Icon('Jobs','jobs','briefcase','briefcase_handle');
	$Nav->LinkDrop('jobs/lineup','add to lineup');
	$Nav->LinkDrop('jobs/jobssearch','Job Search');
	$Nav->LinkTitle('Test Jobs');
	$Nav->LinkDrop('jobs/pmtalineup','PMTA Add to Lineup');
	$Nav->LinkDrop('jobs/globalview','Global View');
	$Nav->PrintLink('Icon');
//=== SCRIPTS ===\\
	$Nav->Icon('Scripts','utilities','scripts');
	$Nav->LinkDrop('AJAX/Logger','Job Stats',false,true);
	$Nav->LinkDrop('AJAX/updateEmails','Email Actions',false,true);
	$Nav->LinkDrop('AJAX/emailArchiveReader','Read Inbox',false,true);
	$Nav->LinkDrop('AJAX/ProcessFBLs','Process FBL\'s',false,true);
	$Nav->LinkDrop('AJAX/FetchEflowStats','eFlow Conversions',false,true);
	$Nav->LinkDrop('AJAX/ReconcileDomains','Reconcile Domains',false,true);
	$Nav->LinkDrop('AJAX/UpdateListStatusCounts','Update List Stats',false,true);
	$Nav->LinkTitle('Utilities');
	$Nav->LinkDrop('utilities/overview','Daily Overview');
	$Nav->PrintLink('Icon','code');
//=== INBOX ===\\
	$Nav->Icon('Inbox','emails/mailreader','inbox');
	$Nav->LinkDrop('emails/uploadsdns','Upload Hotmail traps');
    $Nav->LinkDrop('emails/hotmailjunkupload','Hotmail Junk Upload');
	//$Nav->LinkDrop('emails/craigslist','CraigsList Posts');
	//$Nav->LinkDrop('emails/sendemailreputation','CraigsList Reputation');
	//$Nav->LinkDrop('emails/1off','One-Off Email');
	//$Nav->LinkDrop('emails/smtpdrop','SMTP Injector');
	$Nav->LinkDrop('emails/comcastfbl','Comcast FBL');
	$Nav->LinkDrop('emails/mailreader','email Inbox');
	$Nav->PrintLink('Icon');
/*/=== ALERTS ===\\
	$Nav->Icon('Alerts','alerts','alert');
	$Nav->LinkDrop('alerts/','view alerts');
	$Nav->PrintLink('Icon');*/
/*/=== MESSAGES ===\\
	$Nav->Icon('Messages','messages','chat','lines');
	$Nav->LinkDrop('messages/','inbox');
	$Nav->LinkDrop('messages/sent','sent');
	$Nav->LinkDrop('messages/read','read');
	$Nav->PrintLink('Icon');*/
}else{echo '<p>Welcome</p>';}
$Nav->EndNav();
?>
