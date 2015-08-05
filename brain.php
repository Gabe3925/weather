<?php

/* Check all form inputs using check_input function */
// $yourcity = check_input($_POST['yourcity'], "Choose a city");
$yourcity = $_POST['city'];





// /* Functions we used */
// function check_input($data, $problem='')
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     if ($problem && strlen($data) == 0)
//     {
//         show_error($problem);
//     }
//     return $data;
// }

// call Yahoo weather Nome AK
// function check_one_city($yourcity)
// {
// $access_token = 'token'; // access_token received from /oauth2/token call
// $ch = curl_init(
// 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22' . $yourcity . '%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys'
// ); // URL of the call
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER,
//     array("Authorization: Bearer $access_token"));
// // execute the api call
// $result = curl_exec($ch);
// // decode json
// $decoded = (json_decode($result, true));
// //close curl
// curl_close($ch);
// //return result
// return ($decoded);
// // }


        // create curl handle 
        $ch = curl_init(); 

        // set url, with $yourcity concatenated into the url.
        curl_setopt($ch, CURLOPT_URL, "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22" . $yourcity . "%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // execute the curl and put the result into var $output
        $output = curl_exec($ch); 

        // close curl 
        curl_close($ch); 

        //json decoded into an array
        $decoded = json_decode($output, true);

        //encoded json
        // echo $output; 

        //decoded json array
        echo $decoded;

// access first element of $ar array
// echo $output[0];



// echo "iterate...";

// print_r($decoded);
foreach ($decoded as $key => $value) { 
    echo "<p>$key | $value</p>";
}

// echo "deeper iterate...";
foreach ($decoded as $key => $value) { 
    echo "<h2>$key</h2>";
    foreach ($value as $k => $v) { 
        echo "$k | $v <br />"; 
    }
}




// //Iterate through the decoded json
// foreach($decoded as $key => $value)
// {
//    echo $value['period'] . '<br>';
//    echo $value['icon'] . '<br>';
// }
        


?>