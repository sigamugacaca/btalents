<?php
/**
 * @param $items
 * @param array $perms
 * @return array
 */
function recursive_permutations($items, $perms = array( ))
{
    static $list;
    if (empty($items)) {
        $list[] = join(',', $perms);
    } else {
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $newitems = $items;
            $newperms = $perms;
            list($foo) = array_splice($newitems, $i, 1);
            array_unshift($newperms, $foo);
            recursive_permutations($newitems, $newperms);
        };
        return $list;
    };
    $perms = recursive_permutations(array('Jonas', 'Petras', 'Antanas', 'Povilas'));
    echo '<pre>' . print_r($perms, true) . '</pre>';

?>