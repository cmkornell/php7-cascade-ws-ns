<?php
/**
  * Author: Wing Ming Chan
  * Copyright (c) 2017 Wing Ming Chan <chanw@upstate.edu>
  * MIT Licensed
  * Modification history:
  * 6/13/2017 Added WSDL.
  * 5/28/2015 Added namespaces.
 */
namespace cascade_ws_property;

use cascade_ws_constants as c;
use cascade_ws_AOHS as aohs;
use cascade_ws_utility as u;
use cascade_ws_exception as e;

/**
<documentation><description><h2>Introduction</h2>
<p><code>ConnectorParameter</code> is an empty sub-class of <a href="/web-services/api/property-classes/parameter"><code>Parameter</code></a> used by <a href="web-services/api/asset-classes/connector"><code>Connector</code></a> and its sub-classes.</p>
<p>WSDL:</p>
<pre>&lt;complexType name="connector-parameter-list">
  &lt;sequence>
    &lt;element maxOccurs="unbounded" minOccurs="0" name="connectorParameter" nillable="true" type="impl:connector-parameter"/>
  &lt;/sequence>
&lt;/complexType>

&lt;complexType name="connector-parameter">
  &lt;sequence>
    &lt;element maxOccurs="1" minOccurs="1" name="name" nillable="true" type="xsd:string"/>
    &lt;element maxOccurs="1" minOccurs="1" name="value" nillable="true" type="xsd:string"/>
  &lt;/sequence>
&lt;/complexType>
</pre>
</description>
</documentation>
*/
class ConnectorParameter extends Parameter{}
?>