<?php
/**
 * Description of classLangFile
 *
 * @author DezzmonD
 */
class classLangFile {
    private $file_path;/** @var $file_path path to language file*/
    private $arr_name;/** @var $arr_name name for the array in language file*/
    
    private function checkString($str) {
        if(strpos($str, '\\') !== FALSE){
            $str = str_replace('\\', '\\\\', $str);
        }
        if(strpos($str, '"') !== FALSE){
            $str = str_replace('"', '\"', $str);
        }
        return $str;
    }
    
    public function makeFile($array, $path, $name) {
        $this->file_path = $path;
        $this->arr_name = $name;
        /**
         * Form string from array to write into file
         */
        $text = "<?php\n/** Language pack */\n\n";
        $text .= "\$$this->arr_name = array(\n\t";
        foreach ($array as $key => $value) {
            $text .= "'$key' => \"" . $this->checkString($value) . "\", \n\t";
        }
        $text .= ");\n\n";
        $text .= "add_translation(\"" . basename($this->file_path, ".php") . "\", \$$this->arr_name);\n?>";
        
        /**
         * Write file
         */
        $fd = fopen($this->file_path, "w+");
        fwrite($fd,$text);
        fclose($fd);
        
        if(file_exists($this->file_path)){
            return "File written";
        }
        else{
            return "Error!";
        }
    }
}
?>