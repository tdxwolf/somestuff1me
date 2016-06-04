<?
require "./config.php";
require DIR.'core/db.php';
require DIR.'core/database.php';
require DIR.'core/nav.php';
require DIR.'core/form.php';
require DIR.'core/chart.php';
require DIR.'core/table.php';
require DIR.'core/ajax.php';
require DIR."core/core.php";
$X=new X();
if(file_exists(DIR."classes/".PAGE.".class.php")){
	include "./classes/".PAGE.".class.php";
}
require ROOT."head.php";
require ROOT."/nav.php";
$pg=ROOT."pages/".PAGE.".php";
if(file_exists($pg)){include $pg;}
else{include ROOT."pages/400.php";}
require ROOT."foot.php";
