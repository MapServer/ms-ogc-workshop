<?xml version="1.0" encoding="utf-8" standalone="no"?>
<!-- $Id: land_shallow_topo_2048.sld,v 1.1 2005-12-29 19:06:35 tkralidi Exp $ -->
<StyledLayerDescriptor  version="1.0.0"
			xmlns="http://www.opengis.net/sld"
			xmlns:ogc="http://www.opengis.net/ogc"
			xmlns:xlink="http://www.w3.org/1999/xlink"
			xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xsi:schemaLocation="http://www.opengis.net/sld http://schemas.opengeospatial.net/sld/1.0.0/StyledLayerDescriptor.xsd">
	<Name>ms_ogc_workshop</Name>
 	<Title>SLD for MapServer OGC Web Services Workshop</Title>
	<Abstract>This is an SLD to show how one can make a custom style without having to change the data style at the server-side</Abstract>
	<NamedLayer>
		<Name>land_shallow_topo_2048</Name>
		<UserStyle>
			<Name>sld_01</Name>
			<Title>sld_01</Title>
			<IsDefault>1</IsDefault>
			<FeatureTypeStyle>
				<Rule>
					<RasterSymbolizer>
						<Opacity>1.0</Opacity>
						<ColorMap>
							<ColorMapEntry color="#ff0000" quantity="85"/>
							<ColorMapEntry color="#00ff00" quantity="170"/>
							<ColorMapEntry color="#0000ff" quantity="255"/>
						</ColorMap>
					</RasterSymbolizer>
				</Rule>
			</FeatureTypeStyle>
		</UserStyle>
	</NamedLayer>
</StyledLayerDescriptor>
