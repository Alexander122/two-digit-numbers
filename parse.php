<?php
$findNumbers = function ($item, $key) use (&$result) {
    if (is_string($item) && $item >= 10 && $item <= 99) {
        $result[] = $item;
    }
    if (is_string($item) && $key >= 10 && $key <= 99) {
        $result[] = $key;
    }
};
$result = array();
$json = file_get_contents('./data.json');
$array = json_decode($json, true);
array_walk_recursive($array, $findNumbers);
foreach ($result as $_item) {
    echo $_item . PHP_EOL;
}
