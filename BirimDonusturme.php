<head>
	<meta charset="utf-8">
	<meta name="viewport" margin="center" content="width=device-width, initial-scale=1"> 
	<title>ÖlçüÇevirme.net</title> 
    <style>
        div.birimler {font-size:larger; margin-left:30px; column-count: 2; }
        div.buton {font-size:larger; margin-left:30px; margin-top: 30px}
    </style>
    <h1 style="color: darkred; text-indent: 30px;">Çevirebileceğiniz Birimler</h1>
</head>
<body style="background-color: rgb(248, 248 ,255);">
    <div class="birimler">
        <form action="" method="POST">
            <h3>Çevirilmesini istediğiniz birimi seçin.</h3>
            <p>
               <input type="radio" name="birim1" value="Pound"/>Pound<br/>
               <input type="radio" name="birim1" value="Kilogram"/>Kilogram<br/>
               <input type="radio" name="birim1" value="Pikogram"/>Pikogram<br/>
               <input type="radio" name="birim1" value="Nanogram"/>Nanogram<br/>
               <input type="radio" name="birim1" value="Ton"/>Ton<br/>
               <input type="radio" name="birim1" value="Mikrogram"/>Mikrogram<br/>
               <input type="radio" name="birim1" value="Miligram"/>Miligram<br/>
               <input type="radio" name="birim1" value="Santigram"/>Santigram<br/>
               <input type="radio" name="birim1" value="Desigram"/>Desigram<br/>
               <input type="radio" name="birim1" value="Gram"/>Gram<br/>
               <input type="radio" name="birim1" value="Dekagram"/>Dekagram<br/>
               <input type="radio" name="birim1" value="Exagram"/>Exagram<br/>
               <input type="radio" name="birim1" value="Megagram"/>Megagram<br/>
               <input type="radio" name="birim1" value="Teragram"/>Teragram<br/>
               <input type="radio" name="birim1" value="Ounce"/>Ounce<br/>

               <h3>Hangi birime çevirmek istediğinizi seçin.</h3>

               <input type="radio" name="birim2" value="Pound"/>Pound<br/>
               <input type="radio" name="birim2" value="Kilogram"/>Kilogram<br/>
               <input type="radio" name="birim2" value="Pikogram"/>Pikogram<br/>
               <input type="radio" name="birim2" value="Nanogram"/>Nanogram<br/>
               <input type="radio" name="birim2" value="Ton"/>Ton<br/>
               <input type="radio" name="birim2" value="Mikrogram"/>Mikrogram<br/>
               <input type="radio" name="birim2" value="Miligram"/>Miligram<br/>
               <input type="radio" name="birim2" value="Santigram"/>Santigram<br/>
               <input type="radio" name="birim2" value="Desigram"/>Desigram<br/>
               <input type="radio" name="birim2" value="Gram"/>Gram<br/>
               <input type="radio" name="birim2" value="Dekagram"/>Dekagram<br/>
               <input type="radio" name="birim2" value="Exagram"/>Exagram<br/>
               <input type="radio" name="birim2" value="Megagram"/>Megagram<br/>
               <input type="radio" name="birim2" value="Teragram"/>Teragram<br/>
               <input type="radio" name="birim2" value="Ounce"/>Ounce<br/>
           </div>
           <div class="buton">
           <form action="" method="POST">
             Çevirilecek Değer<input type="number" name="birim3" placeholder="Değer Girin">
             <input type="submit" value="Hesapla" name="gönder">
         </form>
     </div>

 </form>
 <?php
 $birim1;
 $birim2;
 $birim3=$_POST['birim3'];
 $birim4;
 $birim5;


 if ($_POST['birim1']==Kilogram) {
     if ($_POST['birim2']==Pound && $_POST['birim3']) {
        echo $birim3." Kilogram = ".$birim4=$birim3/0.45359237.$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Pikogram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3."x"."10<sup>15</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Nanogram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*1000000000000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ton && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3/1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*1000000000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Miligram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*1000000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Santigram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*100000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Desigram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*10000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Gram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Dekagram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*100;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Exagram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3."x"."10<sup>-15</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3/1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Teragram && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
        echo $birim3." Kilogram = ".$birim4=$birim3*35.2739619;
        echo $_POST['birim2'];
    }
    else {};
}
elseif ($_POST['birim1']==Pound){
   if ($_POST['birim2']==Kilogram && $_POST['birim3']) {
    echo $birim3." Pound = ".$birim4=$birim3*0.45359237.$_POST['birim2'];
}
elseif ($_POST['birim2']==Pikogram && $_POST['birim3']){
    $birim4=$birim3*0.45359237;
    echo $birim3." Pound = ".$birim5=$birim4."x"."10<sup>15</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*1000000000000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*1000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*1000000000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*1000000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*100000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*10000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Gram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*1000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*100;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4."x"."10<sup>-15</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*1000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Teragram && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Kilogram = ".$birim5=$birim4."x"."10<sup>-9</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Pound = ".$birim5=$birim4*35.2739619;
   echo $_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Pikogram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-15</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-3</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-18</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-10</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-11</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Gram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-13</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-30</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-18</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3."x"."10<sup>-24</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ounce && $_POST['birim3']) {
        echo $birim3." Pikogram = ".$birim4=$birim3*3.52739619."x"."10<sup>-14</sup>".$_POST['birim2'];
    }
    else {};
}
elseif ($_POST['birim1']==Nanogram) {
   if ($_POST['birim2']==Kilogram && $_POST['birim3']) {
    echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
    echo $birim3." Nanogram = ".$birim4=$birim3*1000;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-15</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-3</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-7</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-8</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Gram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-10</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-27</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-15</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
 echo $birim3." Nanogram = ".$birim4=$birim3."x"."10<sup>-21</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']) {
    echo $birim3." Nanogram = ".$birim4=$birim3*3.52739619."x"."10<sup>-11</sup>".$_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Ton){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3*1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>18</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>15</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>12</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>9</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>8</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>7</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Gram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>5</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3.$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ounce && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3*35273.9619;
    }
    else{};
}
elseif ($_POST['birim1']==Miligram){
 if ($_POST['birim2']==Kilogram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3/1000000000;
   echo $_POST['birim2']; 
}
elseif ($_POST['birim2']==Pikogram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3*1000000000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']){
    echo $birim3." Miligram = ".$birim4=$birim3*1000000;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
 echo $birim3." Miligram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim3=$birim4*1000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3/10;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3/100;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Gram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3/1000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3/10000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']){
    echo $birim3." Miligram = ".$birim4=$birim3."x"."10<sup>-21</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
    echo $birim3." Miligram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Teragram && $_POST['birim3']){
    echo $birim3." Miligram = ".$birim4=$birim3."x"."10<sup>-15</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
   echo $birim3." Miligram = ".$birim4=$birim3*3.52739619."x"."10<sup>-5</sup>".$_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Mikrogram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Pikogram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Nanogram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3*1000;
      echo $_POST['birim2'];
  }
  elseif ($_POST['birim2']==Ton && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Miligram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3/1000;
      echo $_POST['birim2'];
  }
  elseif ($_POST['birim2']==Santigram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-4</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Desigram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-5</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Gram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Dekagram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-7</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Exagram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-24</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3."x"."10<sup>-18</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
      echo $birim3." Mikrogram = ".$birim4=$birim3*3.52739619."x"."10<sup>-8</sup>".$_POST['birim2'];
  }
  else{};
}
elseif ($_POST['birim1']==Santigram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>9</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>-9</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3*1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3/100;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Gram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3/1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3/10000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>-20</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>-8</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
        echo $birim3." Santigram = ".$birim4=$birim3."x"."10<sup>-14</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
       echo $birim3." Santigram = ".$birim4=$birim3*0.000352739619.$_POST['birim2'];
   }
   else{};
}
elseif ($_POST['birim1']==Desigram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
       echo $birim3." Desigram = ".$birim4=$birim3/10000;
       echo $_POST['birim2'];
   }
   elseif ($_POST['birim2']==Pikogram && $_POST['birim3']){
      echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>11</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Nanogram && $_POST['birim3']){
      echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>8</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Ton && $_POST['birim3']){
      echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>-7</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']){
      echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>5</sup>".$_POST['birim2'];
  }
  elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
    echo $birim3." Desigram = ".$birim4=$birim3*100;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
    echo $birim3." Desigram = ".$birim4=$birim3*10;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Gram && $_POST['birim3']) {
    echo $birim3." Desigram = ".$birim4=$birim3/10;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
    echo $birim3." Desigram = ".$birim4=$birim3/100;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']){
  echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>-19</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
  echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>-7</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']){
  echo $birim3." Desigram = ".$birim4=$birim3."x"."10<sup>-13</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
   echo $birim3." Desigram = ".$birim4=$birim3*0.00352739619 .$_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Gram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
       echo $birim3." Gram = ".$birim4=$birim3/1000;
       echo $_POST['birim2'];
   }
   elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>12</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>9</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3*1000;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3*100;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3*10;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3/10;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>-18</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
    echo $birim3." Gram = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
   echo $birim3." Gram = ".$birim4=$birim3*0.0352739619 .$_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Dekagram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
       echo $birim3." Dekagram = ".$birim4=$birim3/100;
       echo $_POST['birim2'];
   }
   elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>13</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>10</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>-5</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>7</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>4</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']){
   echo $birim3." Dekagram = ".$birim4=$birim3*1000;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']){
   echo $birim3." Dekagram = ".$birim4=$birim3*100;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>-17</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>-5</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
    echo $birim3." Dekagram = ".$birim4=$birim3."x"."10<sup>-11</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']){
   echo $birim3." Dekagram = ".$birim4=$birim3*0.352739619;
   echo $_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Exagram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
       echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>15</sup>".$_POST['birim2'];
   }
   elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>30</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>27</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>12</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>24</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>21</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>20</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>19</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>17</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3."x"."10<sup>12</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']) {
    echo $birim3." Exagram = ".$birim4=$birim3*3.52739619."x"."10<sup>16</sup>".$_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Megagram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']) {
        echo $birim3." Ton = ".$birim4=$birim3*1000;
        echo $_POST['birim2'];
    }
    elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>18</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>15</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>12</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>9</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>8</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>7</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Gram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>5</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>-12</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3.$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
    }
    elseif ($_POST['birim2']==Ounce && $_POST['birim3']) {
        echo $birim3." Megagram = ".$birim4=$birim3*35273.9619;
    }
    else{};
}
elseif ($_POST['birim1']==Teragram){
    if ($_POST['birim2']==Kilogram && $_POST['birim3']){
       echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>9</sup>".$_POST['birim2'];
   }
   elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>24</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>21</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>18</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>15</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>14</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>13</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>11</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>-6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3."x"."10<sup>6</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ounce && $_POST['birim3']) {
    echo $birim3." Teragram = ".$birim4=$birim3*3.52739619."x"."10<sup>10</sup>".$_POST['birim2'];
}
else{};
}
elseif ($_POST['birim1']==Ounce){
   if ($_POST['birim2']==Kilogram && $_POST['birim3']){
    echo $birim3." Ounce = ".$birim4=$birim3/35.2739619;
    echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Pound && $_POST['birim3']){
   $birim4=$birim3*0.45359237;
   echo $birim3." Ounce = ".$birim5=$birim4/35.2739619;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Pikogram && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/3.52739619."x"."10<sup>14</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Nanogram && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/3.52739619."x"."10<sup>11</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Ton && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/35273.9619;
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/35273.9619;
}
elseif ($_POST['birim2']==Miligram && $_POST['birim3']){
   echo $birim3." Ounce = ".$birim4=$birim3/3.52739619."x"."10<sup>5</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Mikrogram && $_POST['birim3']){
  echo $birim3." Ounce = ".$birim4=$birim3/3.52739619."x"."10<sup>8</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Santigram && $_POST['birim3']){
   echo $birim3." Ounce = ".$birim4=$birim3/0.000352739619.$_POST['birim2'];
}
elseif ($_POST['birim2']==Desigram && $_POST['birim3']){
   echo $birim3." Ounce = ".$birim4=$birim3/0.00352739619 .$_POST['birim2'];
}
elseif ($_POST['birim2']==Gram && $_POST['birim3']){
   echo $birim3." Ounce = ".$birim4=$birim3/0.0352739619 .$_POST['birim2'];
}
elseif ($_POST['birim2']==Dekagram && $_POST['birim3']){
   echo $birim3." Ounce = ".$birim4=$birim3/0.352739619;
   echo $_POST['birim2'];
}
elseif ($_POST['birim2']==Exagram && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/3.52739619."x"."10<sup>-16</sup>".$_POST['birim2'];
}
elseif ($_POST['birim2']==Megagram && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/35273.9619;
}
elseif ($_POST['birim2']==Teragram && $_POST['birim3']) {
    echo $birim3." Ounce = ".$birim4=$birim3/3.52739619."x"."10<sup>-10</sup>".$_POST['birim2'];
}
else{};
}
else {}

    ?>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>