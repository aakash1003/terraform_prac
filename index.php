<html>
<body>
<h1>Hello World!</h1>
<h5><b>This is Aakash Sharma</b></h5>
<?php
   $firstline=`head -n1 path.txt`;          
   $path_img="https://".$firstline."/ak.jpg";
   echo "<br>";
   echo "<img src='{$path_img}' width=500 height=500>";
?>
</body>
</html>
