<?php
//
// $Id: gazetteer.php,v 1.1 2005-12-29 19:06:35 tkralidi Exp $
//
// CONFIG BEGIN

// world gaz
// request URL
$sRequestURL       = "http://ogc.compusult.nf.ca/cgi-bin/OGC/gazetteers/wfs?version=1.0.0&request=GetFeature&typename=GazetteerEntry&filter=<Filter><PropertyIsLike><PropertyName>name</PropertyName><Literal>" . $_GET["placename"] . "</Literal></PropertyIsLike></Filter>";
$coordsElementName = "COORDINATES"; // coordinates element name
$nameElementName   = "DESCRIPTION"; // placename element name

// CGNS
//$sRequestURL       = "http://cgns.nrcan.gc.ca/wfs/cubeserv.cgi?datastore=cgns&version=1.0.0&service=WFS&request=GetFeature&typename=GEONAMES&filter=<Filter><PropertyIsLike><PropertyName>GEONAME</PropertyName><Literal>" . $_GET["placename"] . "</Literal></PropertyIsLike></Filter>";
//$coordsElementName = "GML:COORDINATES";
//$nameElementName   = "GEONAMES.LOCATION";


// CONFIG END
// you should be okay from here


// the first time this window is opened (i.e. action=init), it should not query the gazetteer
// if the "action" keyword is not in the GET call, and placename is then go ahead
if (! $_GET["action"] && $_GET["placename"]) {

	// setup the request URL
	// parse the XML response
	$p = xml_parser_create();
	xml_parse_into_struct( $p, file_get_contents( $sRequestURL ), $vals, $index );
	xml_parser_free( $p );

	// count the number of results
	$gazNumRecs = count( $index["$coordsElementName"] ) - 1 ;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="pragma" content="no-cache"/>
		<meta http-equiv="Expires" content="Thu, 01 Dec 1994 120000 GMT"/>
		<title>Gazetteer Lookup Results</title>
		<script type="text/javascript" language="JavaScript">
			function setXY() {

				// set the selected placename's geometry

				var tmparr = new Array();
				tmparr     = document.forms[0].gazEntries.options[document.forms[0].gazEntries.selectedIndex].value.split(",");
				document.forms[0].xCoord.value = tmparr[0];
				document.forms[0].yCoord.value = tmparr[1];
			}

			function validatePlacename() {

				// make sure a request doesn't get sent if placename is blank

				if (document.forms[0].placename.value == "") {
					alert("enter a placename");
					return false;
				}
				else {
					return true;
				}
			}

			function zoomToPlacename() {

				// zoom into map on centroid of placename

				if (document.forms[0].xCoord.value == "" || document.forms[0].yCoord.value == "") {
					alert("select a placename");
					return;
				}
				parent.window.opener.document.forms[0].mapxy.value  = document.forms[0].xCoord.value + " " + document.forms[0].yCoord.value;
				parent.window.opener.document.forms[0].buffer.value = 2;
				parent.window.opener.document.forms[0].submit();
				self.close();
			}
		</script>
	</head>
	<body>
		<h2>Gazetteer Lookup Results</h2>
		<hr noshade/>
		<?
			// do some error checking
			// only if this is NOT the first time the page is being called
			// with action=init
			// if the window is opened for the first time
			// don't do error checking yet
			if (! $_GET["action"]) {
				// do some error checking
				if ($vals[$index['SERVICEEXCEPTION'][0]]['value']) {
					$sExceptionMessage = $vals[$index['SERVICEEXCEPTION'][0]]['value'];
		?>

		<center>No results: <?php echo $sExceptionMessage ?></center>

		<?
				}
				else {
		?>

		<center>Successful!</center>

		<?
				}
			}
		?>

		<form name="gazetteerResultsForm" action="gazetteer.php" method="get" onsubmit="javascript:return validatePlacename();">
			<table align="center" border="1">
				<tr>
					<th>placename</th>
					<td><input type="text" name="placename" value="<?php echo $_GET['placename'] ?>"/><input type="submit" name="find" value="Find"/></td>
				</tr>
				<?
					if ((!$_GET["action"]) && ($_GET["placename"])) {
				?>
				<tr>
					<th>results (<?php echo $gazNumRecs ?>)</th>
					<td>
						<select name="gazEntries" onchange="javascript:setXY();" size="5">
<?
$i = 0;
$j = 1;

while( $i < $gazNumRecs) {
	// split the GML coordinates into individual values
	list($y, $x) = split(',', $vals[$index["$coordsElementName"][$j]]['value']);
	//list($x, $y) = split(',', $vals[$index["$coordsElementName"][$j]]['value']);
	$pname = $vals[$index["$nameElementName"][$i]]['value'];
	echo "							<option value=\"$x,$y\">$pname</option>\n";
	$i++;
	$j++;
}
?>
						</select>
					</td>
				</tr>
				<tr>
					<th>x</th>
					<td><input type="text" name="xCoord" value="" readonly/></td>
				</tr>
				<tr>
					<th>y</th>
					<td><input type="text" name="yCoord" value="" readonly/></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="button" name="zoomToPoint" value="Zoom To Point" onclick="javascript:zoomToPlacename();"/></td>
				</tr>

				<tr>
					<td colspan="2" align="center"><a href="<? echo $sRequestURL ?>" target="xmlWin">XML Response</a></td>
				</tr>
				<?
				}
				?>
				<tr>
					<td colspan="2" align="center"><input type="button" name="close" value="Close" onclick="javascript:self.close();"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
