<?php

  $curl_url = curl_init('http://sesrp.atriangle.com/api/get_posts/?post_type=paper');
  $curl_output = fopen('curl_file.json', 'w');

  curl_setopt($curl_url, CURLOPT_FILE, $curl_output);
  curl_setopt($curl_url, CURLOPT_HEADER, 0);

  curl_exec($curl_url);
  curl_close($curl_url);

  fclose($curl_output);
