<?php
    class TextController{
        public function txt2html($txt){
            $txt_arr = explode("\n", $txt);
            $html_arr = [];
            foreach($txt_arr as $line){
                if(strlen($line) == 0){
                    continue;
                }
                else{
                    $html_p = "<p class=\"text\">" . $line . "</p>"; /* le p glisse dans le code apparament  */
                    
                    array_push($html_arr, $html_p);
                }
            }
            $html = implode("\n", $html_arr);
            return $html;
        }
    }

    
?>