<?php
function my_print_args($var) {
foreach (func_get_args () as $arg) {
    echo $arg ."\n";
}
}
?>