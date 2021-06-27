<html>
<head>
<title>task1(Robot arm)</title>
<style>


h1 {
  color: LightGray;
   text-shadow: 2px 2px 5px Gray;
  font-family: Lucida Handwriting;
  text-align: center;
  font-size: 300%;
  background-color:black;
  
}
label {
  color: white;
  font-weight: bold;
  font-family: Lucida Handwriting;
  text-align: center;
  margin: 10px;
  font-size: 150%;
  
}
body {
  background-image: url("https://morb3.com/wp-content/uploads/2020/01/33-black-wallpapers-%D8%AE%D9%84%D9%81%D9%8A%D8%A7%D8%AA-%D8%B3%D9%88%D8%AF%D8%A7%D8%A1-%D8%B3%D8%A7%D8%AF%D9%87-hd-%D8%AE%D9%84%D9%81%D9%8A%D8%A7%D8%AA-%D8%B3%D9%88%D8%AF%D8%A7%D8%A1-%D9%81%D8%AE%D9%85%D9%87-1280x1025.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
form {
 text-align: center;
 
}
input[type=button] , input[type=submit]{
    padding: 6px;
	width: 50%;
    font-family: Lucida Handwriting;
	font-weight: bold;
	font-size: 100%;
	background-color: white;
	cursor: pointer;
	
}

input[type=button]:hover , input[type=submit]:hover{
background-color: gray;
  color: white;
}

</style>
                                          
</head>
<body>
<br><br><br>
<h1><br>  control panel  <br><br></h1>
<br><br>


 <form action=""  method = "POST">
 
 
 
 <label for="motor"> motor 1 : </label> <label > 0° <input type="range" id="motor" name="m1" min="0" max="180"> 180°</label>
        <br><label > motor 2 : </label> <label > 0° <input type="range" id="motor" name="m2" min="0" max="180"> 180°</label>
        <br><label > motor 3 : </label> <label > 0° <input type="range" id="motor" name="m3" min="0" max="180"> 180°</label>
        <br><label > motor 4 : </label> <label > 0° <input type="range" id="motor" name="m4" min="0" max="180"> 180°</label>
        <br><label > motor 5 : </label> <label > 0° <input type="range" id="motor" name="m5" min="0" max="180"> 180°</label>
        <br><label > motor 6 : </label> <label > 0° <input type="range" id="motor" name="m6" min="0" max="180"> 180°</label>
 
<br><br> <br> <input type="submit"  name = save onclick="alert('saved')" value="save " >
<br><br> <input type="submit" name = run value="run"  ><input type="submit" name = stop value="stop"  >
 
</form>



</body>
</html>
<?php

 include 'dbconnection.php';
if(isset($_POST['save'])){
	$sql="INSERT INTO armcontrol (arm1, arm2, arm3, arm4, arm5, arm6) VALUES (:m1, :m2, :m3, :m4, :m5, :m6)";
$stmt = $conn-> prepare($sql);
	$stmt-> execute(array(
':m1' => $_POST['m1'],
':m2' => $_POST['m2'],
':m3' => $_POST['m3'],
':m4' => $_POST['m4'],
':m5' => $_POST['m5'],
':m6' => $_POST['m6'],
));

}else if(isset($_POST['run'])) {
    $sql = "INSERT INTO on_off (_on) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);

}else if(isset($_POST['stop'])) {
    $sql = "INSERT INTO on_off (_off) VALUES (1)";
	$stmt = $conn-> prepare($sql);
	$stmt-> execute();
    //$result = mysqli_query($conn, $sql);
}


?>