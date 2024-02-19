<?php

try {
    echo "<h3>*** Try ***</h3>";

    $sql = "select * from clientes";
    mysql_query($sql); //erro
} catch (Error $e) {
    echo "<h3>*** Catch ***</h3>";
    echo $e;

} finally {
    echo "<h3>*** Finally ***</h3>";
}