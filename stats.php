<?php// $Id: stats.php,v 1.2 2003/09/03 coded by frankblack// ------------------------------------------------------------------------- //// German Xoops-Support-Site                  		// < http://www.myxoops.de >// ------------------------------------------------------------------------- //// Original Author : Pietro Lascari - http://www.cmq.it// Modified for Xoops 2 : Marko "Predator" Schmuck and frankblack// Licence Type : Public GNU/GPL// ------------------------------------------------------------------------- //include("../../mainfile.php");include(XOOPS_ROOT_PATH."/header.php");include("include/functions.php");global $xoopsModuleConfig;CheckIfBanned();global $xoopsDB;echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>";echo "<html>";echo "<head>";echo "<meta http-equiv=\"content-type\" content=\"text/html; charset="._CHARSET."\" />";echo "<meta http-equiv='refresh' content=".$xoopsModuleConfig["statrefresh"].">";echo "<link rel='stylesheet' type='text/css' media='all' href='".xoops_getcss($xoopsConfig['theme_set'])."' />";echo "</head>";echo "<body style='background-color: #".$xoopsModuleConfig["statframebgcol"]."'>";echo "<table style='width: 95%;'>";echo "<tr><td>";if ($xoopsModuleConfig['allopriv'] == 0) {echo ""; }else {echo "<b>"._MA_XCHAT_PCHATDESCR."</b><br>";getChatRequests($userarray['nick']);echo "<br><br>";}PrintStats();echo "[ <a href='javascript:location.reload()'>"._MA_XCHAT_REFRESH."</a> ]";echo "</td></tr></table></body></html>";?>