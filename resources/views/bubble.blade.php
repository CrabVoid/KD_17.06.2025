<x-app-layout>
    <form action="" method="post">
    <input type="number" name="array">
    <input type="submit" value="sumbit for sorting">
    </form>
    <br>
    <br>
<?php
    function bubble_sort($arr) {
        $size = count($arr)-1;
        for ($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size-$i; $j++) {
                $k = $j+1;
                if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
print_r($arr);
print_r(bubble_sort($arr));
?>
</x-app-layout>