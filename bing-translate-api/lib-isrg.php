<?php
/*
ISRG PHP API FOR MICROSOFT AZURE TRANSLATE TEXT
Copyrighted 20018 Isrg Rajan (www.isrgrajan.com)
*/
include "config-isrg.php";
function isrg_auto_translate($string)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.cognitive.microsofttranslator.com/translate?api-version=3.0&from=".default_translate_from_lang."&to=".default_translate_to_lang);
curl_setopt($ch, CURLOPT_POST, 1);
$string_ar=array('Text'=>$string);
$data_string = json_encode($string_ar);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, '['.$data_string.']');                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json; charset=UTF-8',
    'Ocp-Apim-Subscription-Key: '.Azure_Translate_Text_API)
);                                        
$server_output = curl_exec($ch);
curl_close ($ch);
return $server_output;
}

function isrg_translate($text, $lang_to, $lang_from)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.cognitive.microsofttranslator.com/translate?api-version=3.0&from=".$lang_from."&to=".$lang_to);
curl_setopt($ch, CURLOPT_POST, 1);
$string_ar=array('Text'=>$text);
$data_string = json_encode($string_ar);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, '['.$data_string.']');                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json; charset=UTF-8',
    'Ocp-Apim-Subscription-Key: '.Azure_Translate_Text_API)
);                                        
$server_output = curl_exec($ch);
curl_close ($ch);
return $server_output;
}
