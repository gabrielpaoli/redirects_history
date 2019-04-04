<?php

include('meulifetimeredirect.php');

$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$countryInUrl = countryInUrl($actual_url, $countries);
$variableInUrl = variableInUrl($actual_url, $urlsWithVariables);

$redirectType = redirectType($url, $urlsWithVariables, $redirectTo302, $exceptions, $countryInUrl);


if(parseUrl($actual_url, $countryInUrl, $variableInUrl, $oldUrl, $newUrl, $exceptions)):
  header("Location: " . parseUrl($actual_url, $countryInUrl, $variableInUrl, $oldUrl, $newUrl, $exceptions), true, $redirectType);
  //exit();
endif;
