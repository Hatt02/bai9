<?php
  // 2. Bài tập Tạo lớp Điểm 2D: 
  class Diem2D {
    public $x, $y;

    public function __construct($_x, $_y) {
      $this->x = $_x;
      $this->y = $_y;
    }
  }

  function TinhKhoangCach(Diem2D $a, Diem2D $b) {
    $result = sqrt(pow(($b->x - $a->x), 2) + pow(($b->y - $a->y), 2));

    return $result;
  }

  $diem_st = new Diem2D(2, 3);
  $diem_nd = new Diem2D(6, 7);

  echo "2. Bài tập Tạo lớp Điểm 2D:";
  echo "<br>";
  echo "Khoảng cách hai điểm là: " . TinhKhoangCach($diem_st, $diem_nd);

  // 3. Bài tập Tạo lớp Mảng số nguyên:
  class MangSoNguyen {
    public $mang;

    public function __construct(){}

    public function setValue($_mang){
      $this->mang = $_mang;
    }

    public function TinhTong(){
      $tong = 0;
      foreach ($this->mang as $value) {
        $tong += $value;
      }

      return $tong;
    }

    public function TrungBinh(){
      $tong = $this->TinhTong();
      $length = count($this->mang);
      $tbc = $tong / $length;

      return $tbc;
    }

    public function SoLonNhat(){
      $max = $this->mang[0];
      foreach ($this->mang as $value) {
        if ($max < $value) {
          $max = $value;
        }
      }

      return $max;
    }
  }

  $_mang = array(1, 4, 3, 12, 55, 23, 2);
  $mangA = new MangSoNguyen();
  $mangA->setValue($_mang);

  echo "<br><br>3. Bài tập Tạo lớp Mảng số nguyên:<br>";
  echo "Tổng của mảng: " . $mangA->TinhTong();
  echo "<br>";
  echo "Trung bình cộng của mảng: " . $mangA->TrungBinh();
  echo "<br>";
  echo "Số lớn nhất của mảng: " . $mangA->SoLonNhat();

  