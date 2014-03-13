<?php

/*
 * Base RESTFUL API Template: Copyright (c) 2008, ClearForest Ltd.
 * Available: http://www.opencalais.com/files/RESTSample.php_09Mar16.txt
 * 
 */


$apiKey = "**********";

// Content and input/output formats
/* $content = "Microsoft has made several bids to purchase Yahoo!"; */
$content = $_GET["c"];
$contentType = "text/txt"; // simple text - try also text/html
$outputFormat = "text/simple"; // simple output format - try also xml/rdf and text/microformats

$restURL = "http://api.opencalais.com/enlighten/rest/";
$paramsXML = "<c:params xmlns:c=\"http://s.opencalais.com/1/pred/\" " . 
			"xmlns:rdf=\"http://www.w3.org/1999/02/22-rdf-syntax-ns#\"> " .
			"<c:processingDirectives c:contentType=\"".$contentType."\" " .
			"c:outputFormat=\"".$outputFormat."\"".
			"></c:processingDirectives> " .
			"<c:userDirectives c:allowDistribution=\"false\" " .
			"c:allowSearch=\"false\" c:externalID=\" \" " .
			"c:submitter=\"Calais REST Sample\"></c:userDirectives> " .
			"<c:externalMetadata><c:Caller>Calais REST Sample</c:Caller>" .
			"</c:externalMetadata></c:params>";

// Construct the POST data string
$data = "licenseID=".urlencode($apiKey);
$data .= "&paramsXML=".urlencode($paramsXML);
$data .= "&content=".urlencode($content); 

// Invoke the Web service via HTTP POST
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $restURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
$response = curl_exec($ch);
curl_close($ch);

// Now, the Web service's response is in the $response variable.
// You can now parse the response and use it ...

//echo $response;


// SIMPLE FORMAT Parsing sample
//
// The code below will only work for text/simple output format (it
// parses the response and displays the entities/events/facts it founds)

$simple_level = 0;
$simple_is_parse_err = false;
$simple_l1_tag = null;
$element = null;

$xmlp = xml_parser_create();
xml_parser_set_option($xmlp, XML_OPTION_CASE_FOLDING, 0);
xml_parser_set_option($xmlp, XML_OPTION_SKIP_WHITE, 0);
xml_set_element_handler($xmlp, "simple_start", "simple_stop");
xml_set_character_data_handler($xmlp, "simple_char");
if (xml_parse($xmlp, $response, 1) == 0)
{
	echo "Parse error";
}
xml_parser_free($xmlp);


function simple_start($parser, $element_name, $element_atts) {
	
	global $simple_level;
	global $simple_is_parse_err;
	global $simple_l1_tag;
	global $element;

	if ($simple_is_parse_err)
	{
		return;
	}

	if ($simple_level == 0)
	{
		/*
		 * Level 0 - the OpenCalaisSimple tag
		 */
		if ($element_name != "OpenCalaisSimple")
		{
			$simple_is_parse_err = true;
			return;		
		}
	}
	else if ($simple_level == 1)
	{
		/*
		 * Level 2 - Description or CalaisSimpleOutputFormat
		 */
		if ($element_name != "Description" && 
			$element_name != "CalaisSimpleOutputFormat")
		{
			$simple_is_parse_err = true;
			return;		
		}
		
		$simple_l1_tag = $element_name;
	}
	else if ($simple_level > 1)
	{
		/*
		 * Level 2+ - Description information or semantic data
		 */
		if ($simple_l1_tag == "Description")
		{
			/*
			 * Information under the Description element - place
			 * in info array - not presented
			 */
		}
		else if ($simple_l1_tag == "CalaisSimpleOutputFormat")
		{
			/*
			 * Information under the CalaisSimpleOutputFormat - 
			 * displayed
			 */
			$element = array("type" => $element_name,
							"name" => "",
							"repeat" => 0);
								 
			foreach ($element_atts as $name => $value)
			{
				if ($name == "count")
				{
					$element["repeat"] = (integer)$value; 
				}
			}	 
		}
	}
	
	$simple_level++;
	
}

function simple_stop($parser, $element_name) {

	global $simple_level;
	global $simple_is_parse_err;
	global $simple_l1_tag;
	global $element;

	if ($simple_is_parse_err)
	{
		return;
	}
	
	if ($simple_level == 0)
	{
		$simple_is_parse_err = true;
		return;		
	}
	
	if ($simple_level == 1)
	{
		/*
		 * Level 0 - closing the OpenCalaisSimple tag
		 */
		if ($element_name != "OpenCalaisSimple")
		{
			$simple_is_parse_err = true;
			return;		
		}
	}
	else if ($simple_level == 2)
	{
		/*
		 * Level 1 - closing Description or CalaisSimpleOutputFormat
		 */
		if ($element_name != "Description" && 
			$element_name != "CalaisSimpleOutputFormat")
		{
			$simple_is_parse_err = true;
			return;		
		}
		
		$simple_l1_tag = "";
	}
	else if ($simple_level == 3)
	{
		/*
		 * Level 2 - if under CalaisSimpleOutputFormat - closing an
		 * entity or event - Display it now
		 */
		if ($simple_l1_tag == "CalaisSimpleOutputFormat")
		{

/*
			echo "{\"word\": \"".$element["name"];
			echo "\", \"type\": \"".$element["type"];
			echo "\", \"times\": ".$element["repeat"]." }*"; 
*/
			
			echo $element["name"];
			echo ",".$element["type"];
			echo ",".$element["repeat"]."*"; 	
		} 
	}

	$simple_level--;
}

function simple_char($parser, $data) {
  
	global $simple_level;
	global $simple_is_parse_err;
	global $simple_l1_tag;
	global $element;

	if ($simple_is_parse_err)
	{
		return;
	}  	
	
	/*
	 * Data within <tag> </tag> - set the name of the current element
	 */
	if ($simple_l1_tag == "CalaisSimpleOutputFormat" && $simple_level == 3)
	{
		$element["name"] .= trim($data);
	}

}

?>
