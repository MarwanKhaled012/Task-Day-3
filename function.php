<?php
function dd($item, $die = false)
{
    var_dump($item);
    if ($die == true) {
        die();
    }
}

function clean_data($data)
{
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    $data = trim($data);
    $data = stripslashes($data);
    $data = (strtolower($data));
    $data = ucfirst($data);
    return $data;
}

function len($str, $field, $max, $min = 1)
{
    if (!(strlen($str) > 3 and strlen($str) < 15)) {
        global $error;
        $error[] = "$field should be between $min and $max charachters";
    }
}


function filter($field, $item, $filter)
{
    if (filter_var($item, $filter) == false) {
        global $error;
        $error[] = "The $field is not valid  ";
    }
}

function len_world($filed, $item)
{
    if (str_word_count($item) < 3) {
        global $error;
        $error[] = "$filed Address not true";
    }
}

