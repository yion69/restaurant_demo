<?php

    $latitude = isset($_POST["latitude"]) ? $_POST["latitude"] : null;
    $longitude = isset($_POST["longitude"]) ? $_POST["longitude"] : null;

    if(is_null($latitude) || is_null($longitude) ) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing Latitude or Longitude']);
        exit;
    }

    $url = "https://api.opencagedata.com/geocode/v1/json?";
    $api_key = "92ac0036bce34d88a40710b8e76c017e";
    $response = file_get_contents($url . "q=$latitude,$longitude&" . "key=$api_key");

    if ($response === FALSE) {
        http_response_code(400);
        echo json_encode(['error' => 'cannot fetch map data']);
        exit;
    }

    $data = json_decode($response, true);

    http_response_code(200);
    echo json_encode([
        'street' => $data["results"][0]["components"]['road'],
        'town' => $data["results"][0]["components"]['suburb'] ?? '',
        'city' => $data["results"][0]["components"]['city'],
    ]);
    exit;

?>
