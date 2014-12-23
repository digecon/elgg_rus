<?php
include_once('./config.php');
include_once('./classTranslate.php');
include_once('./classLangFile.php');

$lang_dirs = glob("./mod/*/languages", GLOB_ONLYDIR);

foreach ($lang_dirs as $dir) {
    $file_en = glob($dir . "/en.php");
    $file_ru = glob($dir . "/ru.php");
    
    $trans = new classTranslate($apikey);
    echo "<hr>";
    
    if(empty($file_en) || $file_en[0] !== $dir . "/en.php"){
        echo 'No english file<hr>';
        continue;
    }
    else{
        include_once($file_en[0]);
        if(empty($file_ru) || $file_ru[0] !== $dir . "/ru.php"){
            echo 'No russian file<br>';
            $input_array = $english;
            $russian = $trans->translateArray($input_array, "en-ru");
        }
        else{
            include_once($file_ru[0]);
            
            $input_array = array_diff_key($english, $russian);
            if(empty($input_array)){
                continue;
            }
            else{
                $translated_array = $trans->translateArray($input_array, "en-ru");
                $russian = array_merge($russian, $translated_array);
                ksort($russian, SORT_STRING);
            }
            
        }
        $langfile = new classLangFile();
        $file = $langfile->makeFile($russian, $dir . "/ru.php", "russian");
        $res = $dir . "/ru.php" . "  --  " . $file . "<hr>";
        echo $res;
        sleep(2);
    }
}

function add_translation($array, $true){//just a cap for language files
    return null;
}
?>
