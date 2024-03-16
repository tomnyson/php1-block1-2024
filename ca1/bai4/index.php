<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai4</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1>Array</h1>
    <?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    //khai bao 1 mang
    $sinhvien = array("pk001", "pk002", "pk003", "pk04");
    echo "<pre>";
    var_dump($sinhvien);
    echo "</pre>";
    // lay phan tu thu 3
    echo $sinhvien[3];
    // lay han tu thu 5
    // echo $sinhvien[5];
    // set gia tri 2 => massv
    $sinhvien[2] = "pk03675";
    var_dump($sinhvien);
    // loop array
    //count($cars); => length of array
    for ($i = 0; $i < count($sinhvien); $i++) {
        echo "$sinhvien[$i] <br/>";
    }
    // foreach
    foreach ($sinhvien as $item) {
        echo "$item <br>";
    }
    $mang_songuyen = array(0, 1, 5, 3, 4, 6, 7, 8, 9, 2, 0);
    /**
     * 1. in ra gia tri chan cua mang
     */
    $max = $mang_songuyen[0];
    echo "in ra gia tri chan cua mang";
    for ($i = 0; $i < count($mang_songuyen); $i++) {
        if ($mang_songuyen[$i] > $max) {
            $max = $mang_songuyen[$i];
        }


        if ($mang_songuyen[$i] % 2 == 0) {
            echo "<h1>$mang_songuyen[$i]</h1>";
        }
    }
    echo $max;
    /* 
     * 2. tim gia tri lon nhat của mang
     */
    /* 
     * 3  tim gia tri nho nhat cua mang
     */
    echo "<br>";
    $min = $mang_songuyen[0];
    $vi_tri = 0;
    for ($i = 0; $i < count($mang_songuyen); $i++) {
        if ($mang_songuyen[$i] < $min) {
            $min = $mang_songuyen[$i];
            $vi_tri = $i;
        }
    }
    echo "vi tri nho nhat cua mang: " . $vi_tri;
    echo "gia tri nho nhat cua mang la: " . $min;

    function ktSoNguyenTo($x)
    {
        if ($x < 2) {
            return false;
        }
        for ($i = 2; $i < $x; $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return true;
    }
    for ($i = 1; $i < count($mang_songuyen); $i++) {
        if (ktSoNguyenTo($mang_songuyen[$i])) {
            echo "so nguyen to la cua mang: " . $mang_songuyen[$i];
        }
        if (sochinhphuong($mang_songuyen[$i])) {
            echo "<h1>so chinh phuong la cua mang: " . $mang_songuyen[$i] . "</h1><br>";
        }

        if (ktSoHoanHao($mang_songuyen[$i])) {
            echo "<h1>so hoàn hảo của mảng: " . $mang_songuyen[$i] . "</h1><br>";
        }
    }
    function sochinhphuong($n)
    {
        if (sqrt(($n)) == (int)(sqrt($n))) {
            return true;
        }
    }

    function ktSoHoanHao($n)
    {
        $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) {
                $sum += $i;
            }
        }
        if ($sum == $n) {
            return true;
        }
        return false;
    }
    /*
    /**
     * 1. in ra gia tri chan cua mang
     * 2. tim gia tri lon nhat của mang
     * 4. tim vi tri nho nhat cua mang
     * 3  tim gia tri nho nhat cua mang
     * 5. tim nhung so nguyen to
     * 
     * 6. tim nhung so chinh phuong
     * 7. tim nhung so hoan hao
     * 8 tinh tong cua mang
     * 9 sap xep mang tang dan
     */

    /**
     * mang sinh vien
     */
    echo "<h1>MANG ASSOCIATE</h1>";
    $sv_a = array(
        'mssv' => 'pk003',
        'ten' => 'nguyen van a',
        'tuoi' => 18,
        'nganh' => 'CNTT',
        'sdt' => '01231030103'
    );
    echo "<pre>";
    // lay phan tu ra
    var_dump($sv_a);
    echo "MSSV:  $sv_a[mssv]<br>";
    // set phan tu ra tuoi
    $sv_a['tuoi'] = 22;
    echo "MSSV:  $sv_a[tuoi]";
    echo "</pre>";

    // duyet mang

    foreach ($sv_a as $key => $value) {
        echo "$key: $value <br>";
    }

    $lop_wd1901 = array(
        array(
            'mssv' => 'pk003',
            'ten' => 'nguyen van a',
            'tuoi' => 18,
            "dtb" => 8,
            'nganh' => 'CNTT',
            'sdt' => '01231030103'
        ),
        array(
            'mssv' => 'pk002',
            'ten' => 'nguyen van b',
            'tuoi' => 28,
            "dtb" => 3,
            'nganh' => 'CNTT',
            'sdt' => '01231030183'
        ),
    );
    for ($i = 0; $i < count($lop_wd1901); $i++) {
        var_dump($lop_wd1901[$i]);
        $mssv = $lop_wd1901[$i]['mssv'];
        echo "$mssv</br>";
    }
    echo "foreach <br/>";
    /**
     * kt sv pk003 co trong lop ko?
     * đưa ra xếp loại sv của lớp
     * 
     * thêm 1 sv vào lớp =>pk004
     * xóa sv pk004 vừa thêm
     * */
    foreach ($lop_wd1901 as $lop_wd => $sv) {
        echo "index $lop_wd <br>";
        echo 'mssv: ' . $sv['mssv'] . '<br/>';
        echo 'ten: ' . $sv['ten'] . '<br/>';
    }

    for ($i = 0; $i < count($lop_wd1901); $i++) {
        if ($lop_wd1901[$i]['mssv'] == "pk003") {
            echo "Tìm thấy sv: pk003 ";
        }
    }
    for ($i = 0; $i < count($lop_wd1901); $i++) {
        if ($lop_wd1901[$i]['mssv'] == "pk003") {
            if ($lop_wd1901[$i]['dtb'] > 5) {
                echo "bạn đã đậu <br/>";
            } else {
                echo "bạn đã rớt <br/>";
            }
        }
    }
    //  * thêm 1 sv vào lớp =>pk004
    $sv_new =  array(
        'mssv' => 'pk004',
        'ten' => 'nguyen van c',
        'tuoi' => 28,
        "dtb" => 3,
        'nganh' => 'CNTT',
        'sdt' => '01231030183'
    );
    array_push($lop_wd1901, $sv_new);

    echo "<pre>";
    var_dump($lop_wd1901);
    echo "</pre>";

    // remove pop
    array_pop($lop_wd1901);

    echo "<pre>";
    var_dump($lop_wd1901);
    echo "</pre>";
    // the doi tuong 
    $sv_d = array(
        'mssv' => 'pk005',
        'ten' => 'nguyen van d',
        'tuoi' => 20,
        "dtb" => 9.5,
        'nganh' => 'CNTT',
        'sdt' => '01231030183'
    );
    array_push($lop_wd1901, $sv_d);
    echo "<pre>";
    var_dump($lop_wd1901);
    echo "</pre>";
    /**
     * thêm sv d
     * và lọc lấy ds khen thưởng nếu sv có điểm >=9
     */
    echo "remove array";
    for ($i = 0; $i < count($lop_wd1901); $i++) {
        if ($lop_wd1901[$i]["dtb"] < 9) {
            // array_splice($lop_wd1901, $i, 1);
            unset($lop_wd1901[$i]);
        }
    }
    echo "<pre>";
    var_dump($lop_wd1901);
    echo "</pre>";

    ?>





    <h1>Xin chao den voi mon PHP</h1>
</body>

</html>