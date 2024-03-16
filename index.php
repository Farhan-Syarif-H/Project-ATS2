<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<form action="" style="display : flex; justify-content:center" method="POST">
    
    <body>
        
        <div class="kotak2">
            <h1 class="judul"> CEK KETERANGAN NILAI</h1>
                       
                       <p>Nama :</p>
                       <p><input type="text" name=Nama required></p>
                       <p>Nilai :</p>
                       <p><input type="number" name=Nilai required></p>
                       <div class="kirim">
                           <h2 ><button type="submit" name="submit">Kirim</button></h2>
                          </div>
          </div>  
      </div>
     
      <div class="kotak1">
          <div class="kotak3">
          <div class="atas"> 

          <style>
            .emot {
              align-items:center;
            width: 130px;
            height:130px; 
            margin-left:12rem;
            margin-top:1rem;
            margin-bottom:1rem;
            border-radius:50%;
          
        }
            .nilai{
              display: flex;
              justify-content: center;
              font-family:arial;
              font-size:30px;

            }

            .kompeten{
              display: flex;
              justify-content: center;
              font-family:arial;
              font-size:35px;
            }


          </style>
          <?php
      if(@$_POST['Nama'] !== null && @$_POST['Nilai'] !== null){
        $kompeten = (@$_POST['Nilai'] >70 && @$_POST['Nilai'] <=100 )? 'KOMPETEN':'TIDAK KOMPETEN';
        $warna = (@$_POST['Nilai'] >70 && @$_POST['Nilai'] <=100)? 'green': 'red';
        $emot = (@$_POST['Nilai'] > 70 && @$_POST['Nilai'] <=100)?'emoji1.png': 'emoji5.png';
        $nama= @$_POST['Nama'];
        $nilai = @$_POST['Nilai'];
        echo "<img src ='$emot'  class='emot'><br>";
        
      
        echo "<span style ='color : {$warna};' class='kompeten'>{$kompeten}</span><br>";
        echo"<br>";

      } else{
        echo" ";
      }
            
            ?>
       
          </div>


          <div class="bawah"> 

          <?php 
          if(@$_POST['Nama'] !== null && @$_POST['Nilai'] !== null){
          echo"<br>";
          echo "<h2 style='color : black;' class='nilai'>{$nama}</h2>";
          echo"<h1 class= 'nilai'>Nilai : </h1>";
          } else{
            echo" ";
          }
          ?>

          

          <?php 
          if(@$_POST['Nama'] !== null && @$_POST['Nilai'] !== null){
          echo "<h2 style='color : cyan;' class='nilai'>{$nilai}</h2>";
          }else{
            echo" ";
          }
          ?>
          </div>
      </div>
      
      </div>
      
  </body>

</form>


</html>

