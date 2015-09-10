<?php
 
if ( ! function_exists('obfuscate')) {

    function obfuscate($string) {
        $safe = '';
        foreach (str_split($string) as $letter)
        {
            switch (rand(1, 3))
            {
                // HTML entity code
                case 1:
                    $safe .= '&#'.ord($letter).';';
                break;
     
                // Hex character code
                case 2:
                    $safe .= '&#x'.dechex(ord($letter)).';';
                break;
     
                // Raw (no) encoding
                case 3:
                    $safe .= $letter;
            }
        }
     
        return $safe;
    }
}

if ( ! function_exists('email')) {

    function email($email) {
        // Make sure the at sign is always obfuscated
        return str_replace('@', '&#64;', obfuscate($email));
    }
}
 
if ( ! function_exists('mailto')) {

    function mailto($email, $title = NULL) {
        // Obfuscate email address
        $email = email($email);

        $title = ($title === NULL) ? $email : $title;
     
        return '<a target="_blank" class="btn btn-lg btn-max" href="&#109;&#097;&#105;&#108;&#116;&#111;&#058;'.$email.'">'.$title.' <i class="fa fa-envelope"></i></a>';
    }
}
?>