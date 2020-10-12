<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function countWords($str) {
    $str = strtolower($str);
    $words = explode(' ', $str);
    $counts = array_count_values(preg_replace('/[^a-zA-z0-9_\.]/','',$words));
    $array_name = array();
    foreach ($counts as $key => $value) {
        $array_name[$key] = $value;
    }
    print_r($array_name);

}

countWords ("The University of San Carlos also referred to by its acronym USC
 or colloquially shortened to San Carlos is a private Catholic research basic 
 and higher education institution administered by the Philippine Southern Province 
 of the Society of the Divine Word missionaries in Cebu City, Philippines since 1935.")
    ?>
</body>
</html>