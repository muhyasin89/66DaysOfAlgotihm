<?php
$dict_map = array("{" => "}", "[" => "]", "(" => ")", "<" => ">");

$inp_str = "[]";  # expected True
$inp_str1 = "{([{}()[]])}";  # expected True
$inp_str2 = "{(][)}";  # expected False
$inp_str3 = "][";  # expected False
$inp_str4 = "{<[adadas]@1234>#$%^}";  # expected True

function ValidBracket($str, $dict_map)
{
    $list_bracket = array();
    $list_str = str_split($str);

    if (count($list_str) == 1) {
        return false;
    }

    for ($i = 0; $i < count($list_str); $i++) {
        if (in_array($list_str[$i], $dict_map) && $i < 1) {
            return false;
        } elseif (array_key_exists($list_str[$i], $dict_map)) {
            array_push($list_bracket, $list_str[$i]);
        } elseif (in_array($list_str[$i], $dict_map)) {
            if ($dict_map[end($list_bracket)] != $list_str[$i]) {
                return false;
            } else {
                array_pop($list_bracket);
            }
        }
    }

    if (count($list_bracket) > 1) {
        return false;
    }

    return true;
}

echo ValidBracket($inp_str, $dict_map) ? "true\n" : "false\n";
echo ValidBracket($inp_str1, $dict_map) ? "true\n" : "false\n";
echo ValidBracket($inp_str2, $dict_map) ? "true\n" : "false\n";
echo ValidBracket($inp_str3, $dict_map) ? "true\n" : "false\n";
echo ValidBracket($inp_str4, $dict_map) ? "true\n" : "false\n";
