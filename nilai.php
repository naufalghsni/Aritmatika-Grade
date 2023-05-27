<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRADE</title>
</head>
<body>
    <h2>PIKEUN NYALUKAN GRADE</h2>
    <form action="#" method="post">
        <input type="number" name="angka1" id="1">
        <input type="number" name="angka2" id="2">
    <input type="submit" name="kirim" value="OPERASIKAN">
    </form>
<?php 
class aritmatika{
    private $angka1;
    protected $angka2;

    public function __construct($angka1,$angka2){
        $this->angka1 =$angka1;
        $this->angka2 =$angka2;
    }
    
    
    public function tambah(){
    return $this->angka1 +$this->angka2;
    }
    
    public function kurang(){
    return $this->angka1 - $this->angka2;
    }
    
    public function kali(){
    return $this->angka1 * $this->angka2;

    }
    public function bagi(){
    return $this->angka1 / $this->angka2;
    
    }
    
    public function modulus(){
      
    
    return $this->angka1 % $this->angka2;
    }
    
    
    

    public function getGrade($hasil){
        if ($hasil >= 90) {
            return 'A';
        } elseif ($hasil >= 80) {
            return 'B';
        } elseif ($hasil >= 70) {
            return 'C';
        } elseif ($hasil >= 60) {
            return 'D';
        } else {
            return 'E';
        }
    }
}

if(isset($_POST['kirim'])){
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $hitung = new aritmatika($angka1,$angka2);
    $hasil = $hitung->tambah($angka1, $angka2);
    $grade = $hitung->getGrade($hasil);
    echo "<br>";
    echo "NILAI : " . $hasil;
    echo "<br>";
    echo "GRADE : " . $grade;
    echo "<hbr>";
}

?>
</body>
</html>     