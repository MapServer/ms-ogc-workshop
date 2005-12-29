<?
	// $Id: hide-mapfile-location.php,v 1.1 2005-12-29 19:06:35 tkralidi Exp $
	echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="pragma" content="no-cache"/>
		<meta http-equiv="Expires" content="Thu, 01 Dec 1994 120000 GMT"/>
		<title>Hiding your mapfile parameter through HTTP server settings</title>
		<link rel="stylesheet" media="all" href="../demo.css" type="text/css"/>
	</head>
	<body>
		<h3>Hiding your mapfile parameter through HTTP server settings</h3>
		<hr/>
		<p>
			<pre>
			<? Include("../../../httpd.d/httpd_ms_ogc_workshop.conf");?>
			</pre>
		</p>
		<hr/>
		<p>
			<a href="http://validator.w3.org/check?uri=referer" title="[ Valid XHTML 1.0! ]"><img class="flat" src="http://www.w3.org/Icons/valid-xhtml10" alt="[ Valid XHTML 1.0! ]" height="31" width="88"/></a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="[ Valid CSS! ]"><img class="flat" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="[ Valid CSS! ]" height="31" width="88"/></a>
		</p>
	</body>
</html>
