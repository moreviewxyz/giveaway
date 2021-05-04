<?php error_reporting(E_ALL ^ E_NOTICE); 
require_once('include/function.php');
require_once('include/GeoIP.php');
if ( $country == "US" ) {
    $uri_affilate = '/country/us/index.php';
} elseif ( $country == "BE" || $country == "NL" || $country == "AW" ) { //DUTCH
    $uri_affilate = '/country/be/index.php'; 
} elseif ( $country == "NO" ) {                     //NORSK
    $uri_affilate = '/country/no/index.php'; 
} elseif ( $country == "CH" || $country == "FJ" || $country == "PG" || $country == "KW" || $country == "BS" || $country == "JO" || $country == "TT" || $country == "VC" || $country == "DM" || $country == "KN" || $country == "AG" || $country == "GD" || $country == "VG" || $country == "BM" || $country == "TC" || $country == "GY" || $country == "CA" || $country == "LC" || $country == "KY" || $country == "MM" || $country == "BO" || $country == "BT" || $country == "LA" || $country == "GU" || $country == "NP" || $country == "MV" || $country == "BN" || $country == "BZ" || $country == "JM" || $country == "BD" || $country == "MU" || $country == "MW" || $country == "SC" || $country == "LK" || $country == "CW" || $country == "GF" || $country == "GU" || $country == "VI" ) { //ENGLISH
    $uri_affilate = '/country/us/index.php'; 
} elseif ( $country == "AU" ) {                     //ENGLISH
    $uri_affilate = '/country/au/index.php'; 
} elseif ( $country == "GB" ) {                     //ENGLISH
    $uri_affilate = '/country/gb/index.php'; 
} elseif ( $country == "SG" ) {                     //ENGLISH
    $uri_affilate = '/country/sg/index.php'; 
} elseif ( $country == "PS" || $country == "YE" || $country == "AE" || $country == "OM" || $country == "QA" || $country == "BH" || $country == "LB" || $country == "SA" || $country == "MA" ) { //ARAB
    $uri_affilate = '/country/ar/index.php';
} elseif ( $country == "FR" || $country == "HT" ) { //FRENCH
    $uri_affilate = '/country/fr/index.php'; 
} elseif ( $country == "FI" ) {                     //FINLANDI
    $uri_affilate = '/country/fi/index.php';        
} elseif ( $country == "DK" ) {                     //DANISH
    $uri_affilate = '/country/dk/index.php'; 
} elseif ( $country == "AT" || $country == "DE" ) { //GERMAN
    $uri_affilate = '/country/at/index.php'; 
} elseif ( $country == "CL" || $country == "UY" || $country == "AD" || $country == "PR" || $country == "PY" || $country == "EC" || $country == "CO" || $country == "CR" || $country == "PA" || $country == "AR" || $country == "NI" || $country == "GT" || $country == "PE" || $country == "DO" || $country == "SV" || $country == "HN" || $country == "MX" ) { //SPANISH
    $uri_affilate = '/country/cl/index.php'; 
} elseif ( $country == "ES" ) {                     //SPANISH
    $uri_affilate = '/country/es/index.php'; 
} elseif ( $country == "LU" ) {                     //LUKSEMBURG
    $uri_affilate = '/country/lu/index.php'; 
} elseif ( $country == "SE" ) {                     //SWENSK
    $uri_affilate = '/country/se/index.php'; 
} elseif ( $country == "WS" || $country == "AS" ) { //SAMOAN
    $uri_affilate = '/country/ws/index.php'; 
} elseif ( $country == "CK" ) {                     //MAORI
    $uri_affilate = '/country/ck/index.php'; 
} elseif ( $country == "NZ" ) {                     //MAORI
    $uri_affilate = '/country/nz/index.php'; 
} elseif ( $country == "JP" ) {                     //JEPANG
    $uri_affilate = '/country/jp/index.php'; 
} elseif ( $country == "IE" ) {                     //GAELIG
    $uri_affilate = '/country/ie/index.php'; 
} elseif ( $country == "IT" ) {                     //ITALIAN
    $uri_affilate = '/country/it/index.php'; 
} elseif ( $country == "HU" ) {                     //MAGYAR
    $uri_affilate = '/country/hu/index.php'; 
} elseif ( $country == "AZ" ) {                     //AZERBAIJAN
    $uri_affilate = '/country/az/index.php'; 
} elseif ( $country == "IS" ) {                     //ISLAN
    $uri_affilate = '/country/is/index.php'; 
} elseif ( $country == "TR" ) {                     //TURKISH
    $uri_affilate = '/country/tr/index.php'; 
} elseif ( $country == "CY" ) {                     //TURKISH
    $uri_affilate = '/country/cy/index.php'; 
} elseif ( $country == "CZ" ) {                     //CEKO
    $uri_affilate = '/country/cz/index.php'; 
} elseif ( $country == "PT" ) {                     //PORTUGIS
    $uri_affilate = '/country/pt/index.php'; 
} elseif ( $country == "BR" ) {                     //PORTUGIS
    $uri_affilate = '/country/br/index.php'; 
} elseif ( $country == "PL" ) {                     //POLANDIA
    $uri_affilate = '/country/pl/index.php'; 
} elseif ( $country == "SI" ) {                     //SLOVENIA
    $uri_affilate = '/country/si/index.php'; 
} elseif ( $country == "HR" || $country == "ME" || $country == "RS" ) { //KROAT
    $uri_affilate = '/country/hr/index.php'; 
} elseif ( $country == "SK" ) {                     //SLOVAK
    $uri_affilate = '/country/sk/index.php'; 
} elseif ( $country == "LT" ) {                     //LITUANIA
    $uri_affilate = '/country/lt/index.php'; 
} elseif ( $country == "BY" ) {                     //BELARUSIAN
    $uri_affilate = '/country/by/index.php'; 
} elseif ( $country == "EE" ) {                     //ESTONIA
    $uri_affilate = '/country/ee/index.php'; 
} elseif ( $country == "AM" ) {                     //ARMENIA
    $uri_affilate = '/country/am/index.php'; 
} elseif ( $country == "MD" ) {                     //RUMANIA
    $uri_affilate = '/country/md/index.php';
} elseif ( $country == "UZ" ) {                     //UZBEKISTAN
    $uri_affilate = '/country/uz/index.php';
} elseif ( $country == "MN" ) {                     //MONGOLIA
    $uri_affilate = '/country/mn/index.php';
} elseif ( $country == "MO" || $country == "HK" || $country == "TW" ) { //MANDARIN
    $uri_affilate = '/country/mo/index.php';
} elseif ( $country == "KH" ) {                     //KHMER
    $uri_affilate = '/country/kh/index.php';
} elseif ( $country == "LV" ) {                     //LATVIA
    $uri_affilate = '/country/lv/index.php';
} elseif ( $country == "ZA" ) {                     //AFRIKAN
    $uri_affilate = '/country/za/index.php';
} elseif ( $country == "GR" ) {                     //YUNANI
    $uri_affilate = '/country/gr/index.php';
} elseif ( $country == "MT" ) {                     //MALTA
    $uri_affilate = '/country/mt/index.php';
} elseif ( $country == "BG" ) {                     //BULGARIAN
    $uri_affilate = '/country/bg/index.php';
} elseif ( $country == "KR" ) {                     //KOREAN
    $uri_affilate = '/country/kr/index.php';
} elseif ( $country == "KZ" ) {                     //KAZAK
    $uri_affilate = '/country/kz/index.php';
} elseif ( $country == "VN" ) {                     //VIETNAM
    $uri_affilate = '/country/vn/index.php';
} elseif ( $country == "UA" ) {                     //UKRAINA
    $uri_affilate = '/country/ua/index.php';
} elseif ( $country == "IN" ) {                     //HINDI
    $uri_affilate = '/country/in/index.php';
} elseif ( $country == "TH" ) {                     //THAI
    $uri_affilate = '/country/th/index.php';
} elseif ( $country == "PH" ) {                     //TAGALOG
    $uri_affilate = '/country/ph/index.php';
} elseif ( $country == "ID" ) {                     //INDONESIA
    $uri_affilate = '/country/id/index.php';
} else {
    $uri_affilate = '/country/us/index.php'; 
} 
?>
<html>
<head>
<meta http-equiv="refresh" content="0;url=<?php echo $uri_affilate;?>">
<link rel="stylesheet" href="/include/css/style.css">
</head>
<body>

</body>
</html>