<?php

$nomeApplicazione = "AcrossProject";

$word = $_GET['parola'];

if (validate($word)) {
	if (isPalindroma($word))
        writeLog("evviva, la parola <$word> è palindroma");
    else
        writeLog("$word non è palindroma");
}
else {
    writeLog("ERRORE, parola inserita: $word");
}


function validate($word){
    $word_array = explode(" ", $word);
    if (count($word_array) > 1)
        return false;
    return ctype_alnum($word);
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