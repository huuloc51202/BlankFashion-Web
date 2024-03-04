<?php
    function load_sp($kyw,$iddm){
        $sql = "SELECT * FROM `san-pham` WHERE 1";
        if($kyw!=""){
            $sql.=" AND NAME LIKE '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" AND iddm ='".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    
    function load_spm(){
        $sql = " SELECT * FROM `san-pham` where 1 order by id desc limit 0,9";
        $spm = pdo_query($sql);
        return $spm;
    }

    function loadone_spct($id){
        $sql = "SELECT * FROM `san-pham` WHERE id='$id'";
        $spct=pdo_query_one($sql);
        return $spct;
    }

    function load_dmsp($iddm){
        $sql = "SELECT * FROM `list` WHERE id='$iddm'";
        $dmsp=pdo_query_one($sql);
        extract($dmsp);
        return $catename;
    }

    function loadcungloai_sp($id,$iddm){
        $sql = " SELECT * FROM `san-pham` where iddm='.$iddm.' AND id <>  ".$id;
        $spcl = pdo_query($sql);
        return $spcl;
    }
?>