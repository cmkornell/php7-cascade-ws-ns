<?php 
/**
  * Author: Wing Ming Chan
  * Copyright (c) 2017 Wing Ming Chan <chanw@upstate.edu>
  * MIT Licensed
  * Modification history:
  * 6/13/2017 Added WSDL.
  * 1/17/2017 Added JSON structure and JSON dump.
  * 5/28/2015 Added namespaces.
 */
namespace cascade_ws_asset;

use cascade_ws_constants as c;
use cascade_ws_AOHS as aohs;
use cascade_ws_utility as u;
use cascade_ws_exception as e;
use cascade_ws_property as p;

/**
<documentation>
<description><h2>Introduction</h2>
<p>A <code>TransportContainer</code> object represents a transport container asset. This class is a sub-class of <a href="/web-services/api/asset-classes/container"><code>Container</code></a>.</p>
<h2>Structure of <code>transportContainer</code></h2>
<pre>SOAP:
transportContainer
  id
  name
  parentContainerId
  parentContainerPath
  path
  siteId
  siteName
  children
    child
      id
      path
        path
        siteId
        siteName
      type
      recycled

JSON:
transportContainer
  children (array)
    stdClass
      id
      path
        path
        siteId
      type
      recycled
  parentContainerId
  parentContainerPath
  path
  siteId
  siteName
  name
  id
</pre>
<p>WSDL:</p>
<pre>&lt;complexType name="transportContainer">
  &lt;complexContent>
    &lt;extension base="impl:containered-asset">
      &lt;sequence>
        &lt;element maxOccurs="1" minOccurs="0" name="children" nillable="true" type="impl:container-children"/>
      &lt;/sequence>
    &lt;/extension>
  &lt;/complexContent>
&lt;/complexType>
</pre>
</description>
<postscript><h2>Test Code</h2><ul><li><a href="https://github.com/wingmingchan/php-cascade-ws-ns-examples/blob/master/asset-class-test-code/transport_container.php">transport_container.php</a></li></ul>
<h2>JSON Dump</h2>
<pre>
{ "asset":{
    "transportContainer":{
      "children":[],
      "parentContainerId":"f7a963357f0000012693e3d98d968254",
      "parentContainerPath":"/",
      "path":"Transport Container",
      "siteId":"f7a963087f0000012693e3d9932e44ba",
      "siteName":"SUNY Upstate",
      "name":"Transport Container",
      "id":"e3b0b7247f00000118d3acfc42c96feb"}},
  "success":true
}
</pre>
</postscript>
</documentation>
*/
class TransportContainer extends Container
{
    const TYPE = c\T::TRANSPORTCONTAINER;

/**
<documentation><description><p>The constructor.</p></description>
</documentation>
*/
    public function __construct( 
        aohs\AssetOperationHandlerService $service, \stdClass $identifier )
    {
        parent::__construct( $service, $identifier );
    }
}
?>
