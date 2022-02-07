<?php

$nomeApplicazione = "AcrossProject";
$token = "@";

$word = isset($_GET['parola']) ? $_GET['parola'] : '';

if(!empty($word)){
    if (validate($word)) {
        $word_array = explode($token, $word);
        foreach($word_array as $w){
	        if (isPalindroma($w))
                writeLog("evviva, la parola <$w> è palindroma");
            else
                writeLog("$w non è palindroma");
        }
    }
    else {
        writeLog("ERRORE, parola inserita: $word");
    }
}

function validate($word){
    global $token;

    //controllo se sono presenti due token consecutivi
    $re = '/.*@{2}.*/';
    preg_match_all($re, $word, $matches, PREG_SET_ORDER, 0);
    if(!empty($matches)) return false;

    //controllo se sono presenti più di due token nella stringa inserita
    $word_array = explode($token, $word);
    if (count($word_array) > 3)
        return false;
    return true;
}

function isPalindroma($word){
    $chars = str_split(strtolower($word));
    $n = count($chars)-1;
    for ($i=0; $i<=$n/2; $i++)
        if ($chars[$i] != $chars[$n-$i]) return false;
    return true;
}


//naming convention log <data_odierna>-<nome_applicazione>.log
function writeLog($log) {
    global $nomeApplicazione;
    $date = date("dmY");
    $date_inner = date("d/m/Y");
    $log_location = "logs";
    if (!file_exists($log_location)) 
       mkdir($log_location, 0777, true);
    
    $log_file_data = $log_location.'/' . $date . "-" . $nomeApplicazione . '.log';

    file_put_contents($log_file_data, "[$date_inner] ".$log. "\n", FILE_APPEND);
} 
?>