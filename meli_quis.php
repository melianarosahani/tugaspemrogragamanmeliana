
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action=""method="post">
    <p> berapa hasil bilangan dari 11 + 3=?</p>
    <input type="number"name="ans1">
    <p> berapa hasil dari bilangan 15+7=?</p>
    <input type="number"name="ans2">
    <p> berapa hasil dari bilangan 9+8=?</p>
    <input type="number"name="ans3">
    <p> berapa hasil dari bilangan 10-6=?</p>
    <input type="number"name="ans4">
    <p> berapa hasil dari bilangan 3+5=?</p>
    <input type="number"name="ans5"> <br> <br>
    <button type="submit" name="submit" id="submit">Lihat Hasil</button>
    <br> <br>
    <?php 
        if (isset($_POST['submit'])){
            $ans1 = $_POST['ans1'];
            $ans2 = $_POST['ans2'];
            $ans3 = $_POST['ans3'];
            $ans4 = $_POST['ans4'];
            $ans5 = $_POST['ans5'];
            $correct =0;
            $predikat = "";
            $jawaban_user = array($ans1, $ans2, $ans3, $ans4, $ans5);
            $kunci_jawaban = array(14, 22, 17, 4, 8);
            for ($i=0; $i < count($jawaban_user); $i++) { 
                if ($jawaban_user[$i] == $kunci_jawaban[$i]) {
                    $correct += 20;
                  }
            }
            switch ($correct) {
                case 100:
                  $predikat = "Sangat Baik";
                  break;
                case 90:
                  $predikat = "Baik";
                  break;
                case 75:
                  $predikat = "Cukup";
                  break;
                case 50:
                  $predikat = "Kurang";
                  break;
                case 10:
                  $predikat = "Sangat Kurang";
                  break;
                  default:
                  $predikat = "Semua Jawaban Salah";
                  $text = "danger";
                  break;
              }  
              echo "<p>nilai anda: $correct</p>";
              echo "<p>Predikat: $predikat </p>";
              
        }
        ?>
    
</form>
</body>

</html>