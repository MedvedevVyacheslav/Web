<?php

function add_user($odb){
    $qadd = "INSERT INTO users (email, password, login, phone, city) VALUES ('$odb[mail]', '$odb[password]', '$odb[login]', '$odb[phone]', '$odb[city]')";
    if($res = pg_query($qadd)){
        echo "<script>alert('Вы зарегестрированы!');</script>";
    }else {
        pg_last_error();
        echo "<script>alert('Ошибка запроса бд!');</script>";
    }
}

function del_user($id){
    $qdel = "DELETE FROM users where id = '$id'";
    if($res = pg_query($qdel)){
        echo "<script>alert('Запись удалена!');</script>";
    }else {
        pg_last_error();
        echo "<script>alert('Ошибка запроса бд!');</script>";
    }
}

function upd_user($odb){
    $qupd = "UPDATE users SET email ='$odb[mail]', password = '$odb[password]', login = '$odb[login]', phone = '$odb[phone]', city = '$odb[city]' WHERE id = '$odb[id]'";
    if($res = pg_query($qupd)){
        echo "<script>alert('Запись изменена!');</script>";
    }else {
        pg_last_error();
        echo "<script>alert('Ошибка запроса бд!');</script>";
    }
}

function add_cars($a){
    $qadd = "INSERT INTO cars (type, colvodver, colvomest, class, rul, madein, years, yearpo, v, n, moment, naduv, podachatopliva, colclapan, toplivo, typepriv, typekpp, pered, zad, razgon, gorod, trassa, combi, nameauto, path, marka) VALUES ('$a[p1]', '$a[p2]', '$a[p3]', '$a[p4]', '$a[p5]', '$a[p6]', '$a[p7]', '$a[p8]', '$a[p9]', '$a[p10]', '$a[p11]', '$a[p12]', '$a[p13]', '$a[p14]', '$a[p15]', '$a[p16]', '$a[p17]', '$a[p18]', '$a[p19]', '$a[p20]', '$a[p21]', '$a[p22]', '$a[p23]', '$a[p24]', '$a[p25]', '$a[p26]')";
    if($res = pg_query($qadd)){
        echo "<script>alert('Данные сохранены!');</script>";
    }else {
        $er = pg_last_error();
        echo "<script>alert('Ошибка запроса бд!');</script>";
    }
    //$ress = pg_query($qadd) or die('Ошибка запроса: ' . pg_last_error());
}

function del_cars($id){
    $qdel = "DELETE FROM cars where id = '$id'";
    if($res = pg_query($qdel)){
        echo "<script>alert('Запись удалена!');</script>";
    }else {
        $er = pg_last_error();
        echo "<script>alert('Ошибка запроса бд!');</script>";
    }
}

function upd_cars($a){
    $qadd = "UPDATE cars set type = '$a[p1]', colvodver = '$a[p2]', colvomest = '$a[p3]', class = '$a[p4]', rul = '$a[p5]', madein = '$a[p6]', years = '$a[p7]', yearpo = '$a[p8]', v = '$a[p9]', n = '$a[p10]', moment = '$a[p11]', naduv = '$a[p12]', podachatopliva = '$a[p13]', colclapan = '$a[p14]',
toplivo = '$a[p15]', typepriv = '$a[p16]', typekpp = '$a[p17]', pered = '$a[p18]', zad = '$a[p19]', razgon = '$a[p20]', gorod = '$a[p21]', trassa = '$a[p22]', combi = '$a[p23]', nameauto = '$a[p24]', path = '$a[p25]', marka = '$a[p26]' WHERE id = '$a[id]'";
    if($res = pg_query($qadd)){
        echo "<script>alert('Запись изменена!');</script>";
    }else {
        $er = pg_last_error();
        echo "<script>alert('Ошибка запроса бд!');</script>";
    }
}