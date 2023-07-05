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

  //4. Bài tập Tạo lớp đồng hồ
  class Clock{
    protected $hour, $minute, $second;
    public function __construct($hour, $minute, $second){
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }
    public function show(){
        echo sprintf("%02d", $this->hour) . ":" .sprintf("%02d",$this->minute) . ":" . sprintf("%02d",$this->second);
    }
    public function plusSecond(){
        $this->second++;
        if($this->second >= 60){
            $this->minute++;
            $this->second = 0;
            if($this->minute >= 60){
                $this->hour++;
                $this->minute = 0;
                if($this->hour >= 24){
                    $this->hour = 0;
                }
            }}}}

    echo "<br>4. Bài tập Tạo lớp đồng hồ:<br>";
echo "Now: ";
$clock = new Clock(12,50,09);
$clock->show();
echo "<br>Next second: ";
$clock->plusSecond();
$clock->show();

//5. Bài tập Tạo lớp Danh sách sinh viên
class Student {
  private $code;
  private $name;
  public function __construct($code, $fullName) {
      $this->code = $code;
      $this->fullName = $fullName;
  }
  public function getCode() {
      return $this->code;
  }

  public function getFullName() {
      return $this->fullName;
  }
}

$code = 1;
$fullName = ("Lê Lam Anh");
$student = new Student($code, $fullName);
echo "ID: ". $student->getCode(). " Full name: ". $student->getFullName(). "<br />";

//6. Bài tập Tạo lớp xe hơi
class Car {
  private $brand;
  private $color;
  private $year;

  public function __construct($brand, $color, $year) {
      $this->brand = $brand;
      $this->color = $color;
      $this->year = $year;
  }

  public function displayInformation() {
      echo "Brand: " . $this->brand . "<br>";
      echo "Color: " . $this->color . "<br>";
      echo "Year: " . $this->year . "<br>";
  }
}
$brand = ("Honda");
$color = ("Black");
$year = 2020;
$car = new Car($brand, $color, $year);
echo "Bài 6: <br>";
echo $car->displayInformation();

//8. Bài tập Tạo lớp Người
class Person{
  private $name;
  private $age;
  private $address;

  public function __construct($name, $age, $address) {
      $this->name = $name;
      $this->age = $age;
      $this->address = $address;
  }
  public function getName() {
      return $this->name;
  }
  public function getAge() {
      return $this->age;
  }
  public function getAddress() {
      return $this->address;
  }
  public function displayInformation() {
      echo "Name: " . $this->name . "<br>";
      echo "Age: " . $this->age . "<br>";
      echo "Address: " . $this->address . "<br>";
  }
}

$people = new people("Trần Tuấn Anh", 25, "Hải Dương");
$people->displayInformation();

//9. Bài tập Tạo lớp Sản phẩm
class Product {
  private $name;
  private $price;
  private $description;

  public function __construct($name, $price, $description) {
      $this->name = $name;
      $this->price = $price;
      $this->description = $description;
  }

  public function displayInformation() {
      echo "Name: " . $this->name . "<br>";
      echo "Price: " . $this->price . "<br>";
      echo "Description: " . $this->description . "<br>";
  }
}
$name = ("Hat");
$price = 50000;
$description = ("summer hat trending 2023");
$product = new Product($name, $price, $description);
echo "Bài 9: <br>";
echo $product->displayInformation();

//10. Bài tập Tạp lớp đặt phòng khách sạn
class BookHotel {
  private $name;
  private $arriveDate;
  private $numberNights;

  public function __construct($name, $arriveDate, $numberNights) {
      $this->name = $name;
      $this->arriveDate = $arriveDate;
      $this->numberNights = $numberNights;
  }

  public function total($Price) {
      return $Price * $this->numberNights;
  }
}
$name = ("101");
$checkInDate = ("04/07/2023");
$numberOfNights = 3;
$bookHotel = new HotelReservation($name, $arriveDate, $numberNights);
echo "Total = ". $bookHotel->total(1000000);
?>
