<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
       <table>
           <h1>Program Soal 1-3</h1>
           <tr>
               <th></th>
               <th>No</th>
               <th>Daftar Program</th>
           </tr>
           <tr>
               <td></td>
               <td>1.</td>
               <td>soal pertama</td>
           </tr>
           <tr>
               <td></td>
               <td>2.</td>
               <td>soal kedua</td>
           </tr>
           <tr>
               <td></td>
               <td>3</td>
               <td>soal ketiga</td>
           </tr>
           <tr>
               <td>pilih soal yang ingin anda lihat</td>
               <td>:</td>
               <td><input type="number" name="pilih" id="" placeholder="pilih angka soal"></td>
           </tr>
           <tr>
               <td>Input angka</td>
               <td>:</td>
               <td><input type="number" name="angka" id=""></td>
               <td><input type="submit" value="kirim" name="proses"></td>
           </tr>
       </table>

       <?php
            if (isset($_POST['proses'])) {
                $pilih=$_POST['pilih'];
                $angka=$_POST['angka'];


                if ($pilih == 1) {
                   $x=1;
                   while($x <= $angka) {
                       $y=1;
                       while($y <= $x){
                           echo "$y";
                           $y++;
                       }
                       echo "<br>";
                       $x++;
                   }
                }elseif ($pilih == 2) {
                    echo "<center>";
                    echo "<b>soal 2</b><br><br>";
                    for ($i=$angka; $i >=1; $i--) { 
                        for ($c=$angka; $c >=$i ; $c--) { 
                            echo "";
                        }
                        for ($q=1; $q <=$i ; $q++) { 
                            echo "$q &nbsp";
                        }
                        echo "<br>";
                    }
                    echo "</center>";
                    
                }elseif ($pilih == 3) {
                    $x=$angka;
                    while($x>=1){
                        $y=$angka;
                        while($y >= $x) {
                            echo "$y&nbsp;";
                            $y--;
                        }
                        echo"<br>";
                        $x--;
                    }
                   
                }
            }
       ?>
    </form>
    <br>
    <a href ="soal2.php">Kembali</a>
</body>
</html>