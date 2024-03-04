<?php
    function load_dm(){
        $sql = "SELECT * FROM `list`";
        $list = pdo_query($sql);
        return $list;
    }
?>