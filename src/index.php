<?php
$smarty = new Smarty();
$powitanie = 'Hello World';
$smarty->assign("powitanie",$powitanie);
 $smarty->display("web/powitanie.tpl"); 