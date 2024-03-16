<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    // khai bao bien
    $a = 5;
    $b = 6.5;
    $ten = "Le Hong Son";
    $isKetHon = true;
    echo "gia tri a = $a";
    echo "gia tri b =" . $b;
    print "gia tri ten = $ten <br/>";

    // var_dump($ten);
    /**
     * comment here
     */

    // phpinfo();
    define("PI", 3.14);
    echo PI;
    // tinh dien tich hinh tron, chu vi
    // sosanh
    $sothu1 = 1;
    $sothu2 = '1';
    echo $sothu2 === $sothu1;
    // toan tu so hoc
    $a = 5;
    $b = 10;
    $tong = $a + $b;
    echo "$tong";
    // toan tu gan 
    $a = 5;
    $a += 10;
    $gan = $a;
    echo "$gan";
    // toan tu so sanh
    $a = 5;
    $b = '5';
    echo $a == $b;
    // toan tu logic
    $a = 5;
    $b = 10;
    echo "<br>";
    echo $a == 5 or $b == 10;
    echo "<br>";
    echo $a == 5 and $b == 10;
    /**
     * 5. Tính chiết khấu
     * Yêu cầu: Viết chương trình PHP để tính chiết khấu cho
     *  đơn hàng dựa trên giá trị đơn hàng: <1000 không chiết khấu, 
     * từ 1000 đến 5000 chiết khấu 5%, trên 5000 chiết khấu 10%.
     *Sử dụng if-else.

     */
    echo "<h1>Tính chiết khấu</h1> </br>";
    $gt = 5;
    if ($gt < 1000) {
        echo "<h1>khong chiet khau </h1>";
    } elseif ($gt >= 1000 && $gt <= 5000) {
        echo " <h1>chiet khau 5%</h1>";
    } else {
        echo "<h1>chieu khau 10%</h1>";
    }

    /*
     
     *6. Tính phí giao hàng
     *Yêu cầu: Viết chương trình PHP để tính phí giao hàng dựa vào
     * trọng lượng của gói hàng. Dưới 1kg là 5$, từ 1 đến 5kg là 10$,
     * và trên 5kg là 15$.
     *Sử dụng if-else.
     */
    echo "<h1> Tính phí giao hàng</h1> </br>";
    $kg = 3;
    if ($kg < 1) {
        echo "<h1>5$</h1>";
    } elseif ($kg >= 1 && $kg <= 5) {
        echo "<h1>10$</h1>";
    } else {
        echo "<h1>15$</h1>";
    }
    ?>
    <!-- * xây dựng vòng lặp chạy từ 0->100 và xuất ra giá trị
    *  in ra các giá trị chẵn
    *  in ra các giá trị chẵn và chia hết cho 3
    *  in ra các giá trị là số nguyên tố
    *  in ra tổng các số chia hết cho 2 và 4
    *  in ra trung bình cộng các số chia hết cho 2 và 3 -->


    <h1>Xin chao den voi mon PHP</h1>
</body>

</html>