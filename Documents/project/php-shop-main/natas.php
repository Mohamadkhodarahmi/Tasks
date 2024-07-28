<?php
//$defaultdata = array( "showpassword":"yes", "bgcolor":"#ffffff");
function xor_encrypt($in)
{
    $key = 'HmYkBwozJw4WNyAAFyB1VUcqOE1JZjUIBis7ABdmbU1GIjEJAyIxTRg%3D';
    $text = $in;
    $outText = '';

    for($i=0;$i<strlen($text);$i++) {
        $outText .= $text[$i] ^ $key[$i % strlen($key)];
    }

    return $outText;

}
//
//$keypass= base64_decode(xor_encrypt(json_decode("showpassword":"no","bgcolor":"#fffff")));
//print_r( $keypass);

