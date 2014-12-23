<?php
/**
 * Description of classTranslate
 * translate text from one language to another via Yandex.Translate
 * 
 * @author DezzmonD
 */
class classTranslate {
    private $api_path = "https://translate.yandex.net/api/v1.5/tr.json/translate"; //Yandex Translate API path
    private $lang = 'en-ru'; //destination language in two-letter writing ("ru") or pair of languages ("en-ru")
    private $key; //Yandex Translate API key
    
    public function __construct($key) {
        $this->key = $key;
    }
    
    public function translateText($text, //text that you want to translate
                                $lang){ //destination language in two-letter writing ("ru") or pair of languages ("en-ru")
        $query_array = array('key' => $this->key, 'text' => $text, 'lang' => $lang, 'format' => 'plain');
        $path = $this->api_path . "?" . http_build_query($query_array);
        $result_json = file_get_contents($path);
        $result_array = json_decode($result_json, true);
        if($result_array['code'] == 200){
            return $result_array['text'][0];
        }
        else{
            return "Error " . $result_array['code'] . ": " . $result_array['text'][0];
        }
    }
    
    public function translateArray($array, //array that you want to translate
                                $lang){ //destination language in two-letter writing ("ru") or pair of languages ("en-ru")
        foreach($array as $k => $v){
            $trans_array[$k] = $this->translateText($v, $lang);
            sleep(1);
        }
        return $trans_array;
    }
}
?>