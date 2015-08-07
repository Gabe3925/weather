<?php

//recieve a zipcode via http POST
$zipcode = $_POST['zipcode'];

//function takes single zip, returns weather
function return_weather_for_zip($zip)
{
        // create curl handle 
          $ch = curl_init(); 

          // set url, adding a single zip into the url.
          curl_setopt($ch, CURLOPT_URL, "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22" . $zip . "%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys"); 

          //return the transfer as a string 
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

          // execute the curl and put the result into var $json
          $json = curl_exec($ch); 

          // close curl 
          curl_close($ch); 

          //json decoded into an array
          $decoded_json = json_decode($json, true);
          return ($decoded_json);
}

//run the single-zip function with zipcode passed from POST
$output = return_weather_for_zip($zipcode);

//as an example here, i can dig through the json and find the name of the city to display
$name = $output['query']['results']['channel']['description']; 

//iterate
echo "<ul class='list-group'>";

foreach ($output as $key => $value) { 
    echo "<h2>$name</h2>";
    foreach ($value as $k => $v) { 
        echo "<li class='list-group-item'>$k | $v </li>";
           foreach ($v as $v2 => $v3) { 
           echo "<li class='list-group-item'>$v2 | $v3 </li>"; 
              foreach ($v3 as $v4 => $v5) { 
              echo "<li class='list-group-item'>$v4 | $v5 </li>"; 
                 foreach ($v5 as $v6 => $v7) { 
                 echo "<li class='list-group-item'>$v6 | $v7 </li>"; 
                    foreach ($v7 as $v8 => $v9) { 
                    echo "<li class='list-group-item'>$v8 | $v9 </li>"; 
                       foreach ($v9 as $v10 => $v11) { 
                       echo "<li class='list-group-item'>$v10 | $v11 </li>"; 
                           foreach ($v11 as $v12 => $v13) { 
                          echo "<li class='list-group-item'>$v12 | $v13 </li>"; 
                             foreach ($v13 as $v14 => $v15) { 
                             echo "<li class='list-group-item'>$v14 | $v15 </li>"; 
                         } 
                      } 
                   } 
                } 
             } 
          } 
       } 
    }
}
echo "</ul>";



//function takes array of zips
function return_weather_for_many_zips($zip_array)
{
    $arr = array();
    foreach ($zip_array as $zip) { 

        // create curl handle 
        $ch = curl_init(); 

        // set url, with $zip 
        curl_setopt($ch, CURLOPT_URL, "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22" . $zip . "%22)&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys"); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // execute the curl and put the result into var $json
        $json = curl_exec($ch); 

        // close curl 
        curl_close($ch); 

        //json decoded into an array
        $decoded_json = json_decode($json, true);

        //add output for this zip to holder array
        array_push($arr, $decoded_json);
   }
          
          //return the array of results
          return ($arr);
}

print_r($arr);

?>