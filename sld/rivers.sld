<?xml version="1.0" encoding="utf-8" standalone="no"?>
<!-- $Id: rivers.sld,v 1.2 2006-10-05 19:20:48 tkralidi Exp $ -->
<StyledLayerDescriptor  version="1.0.0"
			xmlns="http://www.opengis.net/sld"
			xmlns:ogc="http://www.opengis.net/ogc"
			xmlns:xlink="http://www.w3.org/1999/xlink"
			xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
			xsi:schemaLocation="http://www.opengis.net/sld http://schemas.opengis.net/sld/1.0.0/StyledLayerDescriptor.xsd">
	<Name>ms-ogc-workshop</Name>
 	<Title>SLD for MapServer OGC Web Services Workshop</Title>
	<Abstract>This is an SLD to show how one can make a custom style without having to change the data style at the server-side</Abstract>
	<NamedLayer>
		<Name>rivers</Name>
		<UserStyle>
			<Name>sld_01</Name>
			<Title>sld_01</Title>
			<IsDefault>1</IsDefault>
			<FeatureTypeStyle>
				<Rule>
					<LineSymbolizer>
						<Stroke>
							<CssParameter name="stroke">#FFCC00</CssParameter>
							<CssParameter name="stroke-width">3</CssParameter>
						</Stroke>
					</LineSymbolizer>
				</Rule>
			</FeatureTypeStyle>
		</UserStyle>
	</NamedLayer>
</StyledLayerDescriptor>
