<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai2</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    // bai 2 if else 

    // vidu 1: nhập vào 1 số x kiểm tra số đó có phải là chẵn hay lẻ
    $x = 3;
    if ($x % 2 == 0) {
        echo "<h1>$x là số chẵn</h1>";
    } else {
        echo "<h1>$x là số lẻ</h1>";
    }
    //vd 2: so x co chia het cho 2 va 5 ko?
    $x = 2;
    if ($x % 2 == 0 && $x % 5 == 0) {
        echo "<h1>$x là số chia hết cho 2 và 5 </h1>";
    } else {
        echo "<h1>$x là số không chia hết cho 2 và 5 </h1>";
    }

    // v3 so x co chia het cho 2 or 3 ko?
    $x = 3;
    if ($x % 2 == 0 || $x % 3 == 0) {
        echo "<h1>$x là số chia hết cho 2 hoặc 3 </h1>";
    } else {
        echo "<h1>$x là số không chia hết cho 2 hoặc 3 </h1>";
    }
    // b3 đưa ra xếp loại điểm tb yếu, tb, khá , giỏi , xuất sắc
    // dk diem [0 -> 10]
    // diem phai la so


    $dtb = "a";
    // var_dump(is_numeric($dtb));
    if (is_numeric($dtb) && $dtb >= 0 && $dtb <= 10) {
        if ($dtb >= 9) {
            echo "<h1> xuất sắc</h1>";
        } elseif ($dtb < 9 && $dtb >= 8) {
            echo "<h1> giỏi</h1>";
        } elseif ($dtb < 8 && $dtb >= 6.5) {
            echo "<h1> kha</h1>";
        } elseif ($dtb < 6.5 && $dtb >= 5) {
            echo "<h1> trung binh</h1>";
        } elseif ($dtb < 5 && $dtb >= 3.5) {
            echo "<h1> trung binh yeu</h1>";
        } else {
            echo "<h1> kem</h1>";
        }
    } else {
        echo "</h1>gia tri khong hop le</h1>";
    }
    // switch case
    /**
     * lua chon 0 -> CN ,1 -> T2,2 -> T3,3 -> t4,4 ->5,5 -> 7, -> 7
     */
    $luachon = 4;
    switch ($luachon) {
        case 0:
            echo "<h1>CN</h1>";
            break;
        case 1:
            echo  "<h1>T2</h1>";
            break;
        case 2:
            echo "<h1>T3</h1>";
            break;
        case 3:
            echo  "<h1>T4</h1>";
            break;
        case 4:
            echo  "<h1>T5</h1>";
            break;
        case 5:
            echo  "<h1>T6</h1>";
            break;
        case 6:
            echo  "<h1>T7</h1>";
            break;
        default:
            echo "KO hop le";
    }
    /**
     * Yêu cầu: Viết chương trình PHP để xác định mùa dựa trên tháng nhập vào (1-12).
     * > xuân ->1-4, hạ 4-, thu , đông
     * Mùa xuân bắt đầu từ tháng 3 – và kết thúc tháng 5
     * Mùa hè hay còn gọi là mùa hạ bắt đầu từ tháng 6 –  kết thúc tháng 8
     * Mùa thu sẽ bặt đầu từ tháng 9 – kết thúc tháng 11
     * Mùa đông sẽ bắt đầu từ tháng 12 – kết thúc tháng 2
     */

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




    <h1>Xin chao den voi mon PHP</h1>
</body>

</html>