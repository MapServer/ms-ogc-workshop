<?php

dl("php_mapscript.dll");
$request = ms_newowsrequestobj();
$request->loadparams();
 /*forcing the version from 1.1.1 to 1.1.0 */
$request->setParameter("VeRsIoN","1.1.0");
ms_ioinstallstdouttobuffer();
$oMap = ms_newMapobj("../../service/exercise_answer.map");
$oMap->owsdispatch($request);
$contenttype = ms_iostripstdoutbuffercontenttype();
$buffer = ms_iogetstdoutbufferstring();
header('Content-type: application/xml');
echo $buffer;
ms_ioresethandlers();

?>
