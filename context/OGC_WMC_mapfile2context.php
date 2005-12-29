<?php
//
// $Id: OGC_WMC_mapfile2context.php,v 1.1 2005-12-29 19:06:35 tkralidi Exp $
//
// load mapscript and DBase
// check what OS this is running on
if (PHP_OS == "WINNT" || PHP_OS == "WIN32") {
  $dlext = "dll";
}
else {
  $dlext = "so";
}

if (!extension_loaded("MapScript")) {
  dl("php_mapscript_46.$dlext");
}

// instantiate a new Map Object
// with the mapfile as an argument
$oMap = ms_newMapObj("demo.map");

// output an OGC:WMC document
$oMap->saveMapContext("ogc_wmc_output.cml");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="Content-Style-Type" content="text/css"/>
		<meta http-equiv="pragma" content="no-cache"/>
		<meta http-equiv="Expires" content="Thu, 01 Dec 1994 120000 GMT"/>
		<title>MapServer OGC:WMC Example</title>
		<link rel="stylesheet" media="all" href="../demo.css" type="text/css"/>
	<body bgcolor="#ffffff">
		<table align="center" border="0">
			<tr>
				<td colspan="2">MapServer OGC:WMC Example</td>
			</tr>
		</table>
		<hr noshade/>
		<table align="center" border="1">
			<tr>
				<th>Input Mapfile</th>
				<!--<td><a title="Input Mapfile" href="demo.map">demo.map</a></td>-->
				<td><iframe width="500" height="200" src="demo.map"></iframe></td>
			</tr>
			<tr>
				<th>Mapscript code:</th>
				<td>
					<pre>
// load mapscript
dl("php_mapscript_46.dll");

// instantiate a new Map Object
// with the mapfile as an argument
$oMap = ms_newMapObj("demo.map");

// output an OGC:WMC document to disk
$oMap->saveMapContext("ogc_wmc_output.cml");
					</pre>
				</td>
			</tr>
			<tr>
				<th>Output OGC:WMC Document</th>
				<!--<td><a title="Output OGC:WMC Document" href="ogc_wmc_output.cml">ogc_wmc_output.cml</a></td>-->
				<td><iframe width="500" height="200" src="ogc_wmc_output.cml"></iframe></td>
			</tr>
		</table>
		<hr/>
		<p>
			<a href="http://validator.w3.org/check?uri=referer" title="[ Valid XHTML 1.0! ]"><img class="flat" src="http://www.w3.org/Icons/valid-xhtml10" alt="[ Valid XHTML 1.0! ]" height="31" width="88"/></a>

			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="[ Valid CSS! ]"><img class="flat" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="[ Valid CSS! ]" height="31" width="88"/></a>
		</p>
	</body>
</html>
