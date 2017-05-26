<meta charset="utf-8">
<?php
/*
自動氣象站資料集說明檔:
http://opendata.cwb.gov.tw/opendatadoc/DIV2/A0001-001.pdf
資料集：http://opendata.cwb.gov.tw/govdownload?dataid=O-A0001-001&authorizationkey=rdec-key-123-45678-011121314

局屬氣象站資料集說明檔:
http://opendata.cwb.gov.tw/opendatadoc/DIV2/A0003-001.pdf
資料集：http://opendata.cwb.gov.tw/govdownload?dataid=O-A0003-001&authorizationkey=rdec-key-123-45678-011121314
*/

include_once("config.php");
$xml_url_a=array('http://opendata.cwb.gov.tw/govdownload?dataid=O-A0001-001&authorizationkey=rdec-key-123-45678-011121314','http://opendata.cwb.gov.tw/govdownload?dataid=O-A0003-001&authorizationkey=rdec-key-123-45678-011121314');
foreach($xml_url_a as $xml_index => $xml_url)
{
	$myXMLData =file_get_contents($xml_url);
	$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
	//print_r($xml->location);
	//echo count($xml->location);
	echo $xml_index."<hr>";
	for($i=0;$i<count($xml->location);$i++)
	{
		$location=$xml->location[$i];
		
		if($xml_index==0)
		{
			$data=array(
				"lat" => (string)$location->lat,
				"lng" => (string)$location->lon,
				"locationName" => (string)$location->locationName,
				"stationId" => (string)$location->stationId,
				"obstime" => (string)$location->time[0]->obsTime,
				"ELEV" => (string)$location->weatherElement[0]->elementValue->value,
				"WDIR" => (string)$location->weatherElement[1]->elementValue->value,
				"WDSD" => (string)$location->weatherElement[2]->elementValue->value,
				"TEMP" => (string)$location->weatherElement[3]->elementValue->value,
				"HUMD" => (string)$location->weatherElement[4]->elementValue->value,
				"PRES" => (string)$location->weatherElement[5]->elementValue->value,
				"24R" => (string)$location->weatherElement[7]->elementValue->value,
				"CITY" => (string)$location->parameter[0]->parameterValue,
				"CITY_SN" => (int)$location->parameter[1]->parameterValue,
				"TOWN" => (string)$location->parameter[2]->parameterValue,
				"TOWN_SN" => (int)$location->parameter[3]->parameterValue,
			);
		}
		else
		{
			$data=array(
				"lat" => (string)$location->lat,
				"lng" => (string)$location->lon,
				"locationName" => (string)$location->locationName,
				"stationId" => (string)$location->stationId,
				"obstime" => (string)$location->time[0]->obsTime,
				"ELEV" => (string)$location->weatherElement[1]->elementValue->value,
				"WDIR" => (string)$location->weatherElement[2]->elementValue->value,
				"WDSD" => (string)$location->weatherElement[3]->elementValue->value,
				"TEMP" => (string)$location->weatherElement[4]->elementValue->value,
				"HUMD" => (string)$location->weatherElement[5]->elementValue->value,
				"PRES" => (string)$location->weatherElement[6]->elementValue->value,
				"24R" => (string)$location->weatherElement[7]->elementValue->value,
				"CITY" => (string)$location->parameter[0]->parameterValue,
				"CITY_SN" => (int)$location->parameter[1]->parameterValue,
				"TOWN" => (string)$location->parameter[2]->parameterValue,
				"TOWN_SN" => (int)$location->parameter[3]->parameterValue,
			);
		}
		
		
		/*
		$data=array(
			"lat" => (string)$location->lat,
			"lng" => (string)$location->lon,
			"locationName" => (string)$location->locationName,
			"stationId" => (string)$location->stationId,
			"obstime" => (string)$location->time[0]->obsTime,
			"ELEV" => (string)$location->weatherElement[1]->elementValue->value,
			"WDIR" => (string)$location->weatherElement[2]->elementValue->value,
			"WDSD" => (string)$location->weatherElement[3]->elementValue->value,
			"TEMP" => (string)$location->weatherElement[4]->elementValue->value,
			"HUMD" => (string)$location->weatherElement[5]->elementValue->value,
			"PRES" => (string)$location->weatherElement[6]->elementValue->value,
			"24R" => (string)$location->weatherElement[7]->elementValue->value,
			"H_FX" => (string)$location->weatherElement[8]->elementValue->value,
			"H_XD" => (string)$location->weatherElement[9]->elementValue->value,
			"H_FXT" => (string)$location->weatherElement[10]->elementValue->value,
			"H_F10" => (string)$location->weatherElement[11]->elementValue->value,
			"H_10D" => (string)$location->weatherElement[12]->elementValue->value,
			"H_F10T" => (string)$location->weatherElement[13]->elementValue->value,
			"CITY" => (string)$location->parameter[0]->parameterValue,
			"CITY_SN" => (int)$location->parameter[1]->parameterValue,
			"TOWN" => (string)$location->parameter[2]->parameterValue,
			"TOWN_SN" => (int)$location->parameter[3]->parameterValue,
		);
		*/

		if($location->parameter[0]->parameterValue=="臺南市")
		{
			$db->insert ('weather_tainan', $data);
			print_r($data);
		}
	}
}
?>