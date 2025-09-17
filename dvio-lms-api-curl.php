<?php
/******** DViO LMS CURL request start ********/
$input_arr = array (
    "campaign_name" => "DViO-Test-Campaign",
    "p_user_nm" => "FirstName LastName",
    "emailid" => "test@test.com",
    "p_user_mob" => "9876543210",
    "city" => "City name",
    "course_type" => "Course name",
    "query" => "Your Query",
    "p_data_source" => "social platform name",
    "param1" => "adgroup",
    "param2" => "adtype",
    "param3" => "keyword",
    "lead_from" => "Desktop",
    "url" => "current page url",
    "p_ip_addsr" => "8.8.8.8",
    "ud1" => "",
    "ud2" => "",
    "ud3" => "",
    "ud4" => "",
    "ud5" => "",
    "ud6" => "",
    "ud7" => "",
    "ud8" => "",
    "ud9" => "",
    "ud10" => ""
);

//array to json conversion
$data_json = json_encode($input_arr);

//open connection
$url = 'https://lms.dvio.global/insert-api.php';
$ch = curl_init();

//set the url, number of POST vars, POST data, content type
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data_json);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$response = curl_exec($ch);
echo $response;

/******** DViO LMS CURL request end ********/



/******************* API Information *******************/
/*
API endpoint URL: https://lms.dvio.global/insert-api.php

Method: POST

Content-Type: application/json

Request Body:
{
	"campaign_name":"Manipal-UNext-july-2021",
	"p_user_nm":"test test",
	"emailid":"test1@test.com",
	"p_user_mob":"9876543210",
	"city":"test",
	"course_type":"test",
	"query":"test",
	"p_data_source":"test",
	"param1":"test",
	"param3":"test",
	"param2":"test",
	"lead_from":"Desktop",
	"url":"current page url",
	"p_ip_addsr":"8.8.8.8",
	"ud1":"",
	"ud2":"",
	"ud3":"",
	"ud4":"",
	"ud5":"",
	"ud6":"",
	"ud7":"",
	"ud8":"",
	"ud9":"",
	"ud10":""
}

Response:
{
    "status": "success",
    "message": "Submitted Successfully",
    "insert_id": 705845,
    "data": {
        "campaign_name": "Manipal-UNext-july-2021",
        "p_user_nm": "test test",
        "emailid": "test1@test.com",
        "p_user_mob": "9876543210",
        "city": "test",
        "course_type": "test",
        "query": "test",
        "p_data_source": "test",
        "param1": "test",
        "param3": "test",
        "param2": "test",
        "lead_from": "Desktop",
        "url": "current page url",
        "p_ip_addsr": "8.8.8.8",
        "ud1": "",
        "ud2": "",
        "ud3": "",
        "ud4": "",
        "ud5": "",
        "ud6": "",
        "ud7": "",
        "ud8": "",
        "ud9": "",
        "ud10": ""
    }
}


/*
Mandatory fields:
campaign_name: campaign_name
p_user_nm : User Name
emailid: User Email id
p_user_mob: User Mobile No
p_ip_addsr: User IP Address

Optional fields: (If not required then set it "" (blank))
course_type: Course / Program / Product Name
query: user Query
city: City Name
p_data_source: social campaign name eg. Google / Facebook etc.
param1: adgroup
param2: adtype
param3: keyword
lead_from: Desktop / Mobile
url: Page URL
ud1 - ud10: Custom fields //you can use these parameters for storing extra data

Please note - do not remove any unnecessary / optional field completely, pass blank value instead.
*/
/******************* API Information *******************/