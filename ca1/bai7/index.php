<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class SinhVien
{
    public $mssv;
    public $tenSV;
    public $sdt;
    public $nganh;
    private $dtb;
    // ham khoi tao
    function __construct($mssv, $tenSV, $sdt, $nganh, $dtb)
    {
        $this->mssv = $mssv;
        $this->tenSV = $tenSV;
        $this->sdt = $sdt;
        $this->nganh = $nganh;
        $this->dtb = $dtb;
    }

    function get_dtb()
    {
        return $this->dtb;
    }

    function set_dtb($dtb)
    {
        return $this->dtb = $dtb;
    }

    function xuatThongTin()
    {
        echo "thong tin sinh vien";
        echo "mssv = " . $this->mssv . "<br/>";
        echo "tensv = " . $this->tenSV . "<br/>";
        echo "dtb = " . $this->dtb . "<br/>";
        echo "-------END------------- <br/>";
    }
}

// su dung

$hai = new SinhVien("pk02671", "Hai", "03492139193", "CNTT", 7.5);
// $hai->dtb = 10;
$hai->xuatThongTin();
echo $hai->get_dtb();
$hai->set_dtb(8);
// echo $hai->get_dtb();
$hai->xuatThongTin();
$tuan = new SinhVien("pk02703", "Tuan", "03492139193", "CNTT", 6.0);
$tuan->xuatThongTin();
