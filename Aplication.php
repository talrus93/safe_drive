<html>
<html lang="sk">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="application">
<header>
<img class="logo" src="6icon.png" alt="logo">
<ul class="navbar">
    
    <li><a href = "dotaznik.html">"Dotazník"</a></li>
    <li><a  href = "dokumenty.html">"Dokumenty"</a></li>
    <li><a href = "tim.html">"Tím"</a></li>
    <li><a href = "AplicationFormular.html">"Safe Drive"</a></li>
    <li><a href = "index.html">"O Projekte"</a></li>
    <li><a href = "index.html">"Domov"</a></li> 
 
</ul>  
</header> 

<?php
$background;
$conn = new mysqli('localhost','stanislavolbert','2813154','stanislavolbert');
if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
}else{

    $p1 = 1/61;//alc
    $p2 = 1/61;
    $p3 = 1/61;
    $p4 = 1/61;
    $p5 = 1/61;
    $p6 = 1/61;
    $p7 = 1/61;
    $p8 = 1/61;
    $p9 = 1/61;
    $p10 = 1/61;
    $p11= 1/61;
    $p12 = 1/61;

$Alc = $_POST['Alc'];
switch ($Alc) {
    case 0 :
      $Alc_Grade = 0;
      $p1 = 0.073800738;
      $AlcM = 'F';

      break;
    case 1 :
      $Alc_Grade = 4;
      $AlcM = 'A';

    break;
    default:
    echo("Error");
    break;
    }

$TXT = $_POST['TXT'];

switch($TXT) {
    case(0): 
      $TXT_Grade = 0;
      $p2 = 1/2.65;
      $TXTM = 'F';

      break;
    case(1): 
      $TXT_Grade = 4;
      $TXTM = 'A';

    break;
    default:
    echo("Error");
    break;
    }

$RD = $_POST['RD'];

switch($RD) {
    case(0):
      $RD_Grade = 0;
      $p3 = 0.03278688524;
      $RDM = 'F';
      break;
    case(1): 
      $RD_Grade = 4;
      $p3 = 0.02446782481;
      $RDM = 'A';
      break;
      default:
    echo("Error");
    break;
    }

$Seat = $_POST['Seat'];

switch($Seat) {
    case(0): 
      $Seat_Grade = 0;
      $SeatM = 'A';
      break;
    case(1): 
      $Seat_Grade = 4;
      $SeatM = 'F';
      break;
      default:
    echo("Error");
    break;
    }


$Speed = $_POST['Speed'];

if ($Speed > 50):
  $Speed = 0;
elseif ($Speed <= 40 && $Speed > 30):
  $Speed = 1;
elseif ($Speed <= 30 && $Speed > 20):
  $Speed = 2;
elseif ($Speed <= 20 && $Speed > 10):
  $Speed = 3;
elseif ($Speed <= 10 && $Speed > 0):
  $Speed = 4;
elseif ($Speed == 0):
  $Speed = 5;
endif;
  
switch($Speed) {
    case(0): 
      $Speed_Grade = 0;
      $p4 = 0.05854800936;
      $SpeedM = 'F';
      break;
    case(1): 
      $Speed_Grade = 1;
      $p4 = 0.02562131693;
      $SpeedM = 'D';
      break;
    case(2):
      $Speed_Grade = 2;
      $p4 = 0.01999200319;
      $SpeedM = 'C';
      break;
    case(3): 
      $Speed_Grade = 3;
      $p4 = 0.01801477211;
      $SpeedM = 'D';
      break;
    case(4): 
      $Speed_Grade = 4;
      $p4 = 0.0171659085;
      $SpeedM = 'B';
      break;
    case(5): 
      $Speed_Grade = 4;
      $SpeedM = 'A';
      break;
      default:
    echo("Error");
    break;
    }

$Pass = $_POST['Pass'];
switch($Pass) {
    case(0): 
      $Pass_Grade = 4;
      $PassM = 'A';
      break;
    case(1):
      $Pass_Grade = 3;
      $p5 = 0.03278688524;
      $PassM = 'B';
      break;
    case(2): 
      $Pass_Grade = 2;
      $p5 = 0.08196721311;
      $PassM = 'C';
      break;
    case(3): 
      $Pass_Grade = 1;
      $p5 = 0.08196721311;
      $PassM = 'D';
      break;
    case(4): 
      $Pass_Grade = 0;
      $p5 = 0.08196721311;
      $PassM = 'F';
      break;
      default:
    echo("Error");
    break;
    }

$Weat = $_POST['Weat'];

switch($Weat) {
    case(0): 
      break;
    case(1): 
      $p6 = 0.02083333333;
      break;
      default:
    echo("Error");
    break;
    }


$Mon = $_POST['Mon'];

switch($Mon) {
    case(0): 
      $p7 = 0.01369863013;
      $MonM = 'January';
      break;
    case(1):
      $p7 = 0.01369863013;
      $MonM = 'February';
      break;
    case(2):
      $p7 = 0.015625;
      $MonM = 'March';
      break;
    case(3):
      $p7 = 0.015625;
      $MonM = 'April';
      break;
    case(4): 
      $p7 = 0.01785714285;
      $MonM = 'May';
      break;
    case(5): 
      $p7 = 0.01785714285;
      $MonM = 'June';
      break;
    case(6):
      $p7 = 0.01960784313;
      $MonM = 'Jule';
      break;
    case(7):
      $p7 = 0.015625;
      $MonM = 'August';
      break;
    case(8): 
      $p7 = 0.01785714285;
      $MonM = 'September';
      break;
    case(9): 
      $p7 = 0.01785714285;
      $MonM = 'October';
      break;
    case(10): 
      $p7 = 0.015625;
      $MonM = 'November';
      break;
    case(11): 
      $p7 = 0.01369863013;
      $MonM = 'December';
      break;
      default:
    echo("Error");
    break;
    }


$Day = $_POST['Day'];

switch($Day) {
    case(0): 
      $p8 = 0.02083333333;
      $DayM = 'Sunday';
      break;
    case(1):
      $p8 = 0.01492537313;
      $DayM = 'Monday';
      break;
    case(2): 
      $p8 = 0.01265822784;
      $DayM = 'tuesday';
      break;
    case(3):
      $p8 = 0.01265822784;
      $DayM = 'Wendsday';
      break;
    case(4):
      $p8 = 0.01492537313;
      $DayM = 'Thursday';
      break;
    case(5): 
      $p8 = 0.01724137931;
      $DayM = 'Friday';
      break;
    case(6): 
      $p8 = 0.02173913043;
      $DayM = 'Saturday';
      break;
      default:
    echo("Error");
    break;
    }

$Time = $_POST['Time'];

switch($Time)
    {
    case(0):
      $p9 = 0.01694915254;
      $TimeM = '12p-3a';
      break;
    case(1): 
      $p9 = 0.01052631578;
      $TimeM = '3a-6a';
      break;
    case(2):
      $p9 = 0.01449275362;
      $TimeM = '6a-9a';
      break;
    case(3): 
      $p9 = 0.01052631578;
      $TimeM = '9a-12a';
      break;
    case(4): 
      $p9 = 0.01449275362;
      $TimeM = '12a-3p';
      break;
    case(5): 
      $p9 = 0.01960784313;
      $TimeM = '3p-6p';
      break;
    case(6):
      $p9 = 0.0238095238;
      $TimeM = '6p-9a';
      break;
    case(7): 
      $p9 = 0.02083333333;
      $TimeM = '9p-12p';
      break;
      default:
    echo("Error");
    break;
    }


$Gend = $_POST['Gend'];

switch($Gend)
    {
    case(0):
      $GendM = 'Man';
      break;
    case(1):
      $p10 = 0.00819672131;
      $GendM = 'Woman';
      break;
      default:
    echo("Error");
    break;
    }


$Age = $_POST['Age'];

switch($Age) {
    case(0):
      $p11 = 0.00546448087;
      $AgeM = '20+';
      break;
    case(1): 
      $p11 = 0.01639344262;
      $AgeM = '15-19';
      break;
      default:
    echo("Error");
    break;
    }

$Grade = ($Alc_Grade + $Pass_Grade + $RD_Grade + $Speed_Grade + $TXT_Grade + $Seat_Grade)/6;
$Red_Grade = ($Alc_Grade + $TXT_Grade)/2;

if ($Grade > ($Red_Grade + 1)):
  $Grade = $Red_Grade + 1;
  endif;


$GradeInt = intval($Grade);


$Grade2 = $Grade - $GradeInt;


if ($Grade2 <=0.40){
  $Grade = $Grade - $Grade2;
}
elseif ($Grade2 >=0.70){
  $Grade = ($Grade - $Grade2) + 1;
}
else{
  if ($Grade < $Red_Grade){
    $Grade = ($Grade - $Grade2) + 1;
  }
  elseif ($Grade > $Red_Grade){
    $Grade = $Grade - $Grade2;
  }
  else{
    if ($Grade2 >= 0.5){
      $Grade = ($Grade - $Grade2) + 1;
    }
    elseif ($Grade2 < 0.5){
      $Grade = $Grade - $Grade2;
    }
  }
}
  


switch($Grade)
    {
    case(0): 
      $Res = 'FX';
      $background="fx_mark.png";
      break;
    case(1): 
      $Res = 'D';
      $background="D_mark.png";
      break;
    case(2): 
      $Res = 'C';
      $background="C_mark.png";
      break;
    case(3): 
      $Res = 'B';
      $background="B_mark.png";
      break;
    case(4): 
      $Res = 'A';
      $background="A_mark.png";
      break;
    default:
    echo("Error");
    break;
    }





$stmt = $conn->prepare("insert into Safe_Drive(Alcohol, Text, Driving, Seatbelts, Speed, Passanger, Weather, Month, Day, Time, Gender, Age, Mark)
values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssissssss", $AlcM, $TXTM, $RDM, $SeatM, $SpeedM, $PassM, $Weat, $MonM, $DayM, $TimeM, $GendM, $AgeM, $Res);
$stmt->execute();
$stmt->close();


$MA = 0;
$MB = 0;
$MC = 0;
$MD = 0;
$MFX = 0;
$count = 0;


$sql = "SELECT * FROM Safe_Drive";
$results = mysqli_query($conn, $sql);
$datas = array();

while($row = mysqli_fetch_assoc($results))
{
  $datas[] = $row;
}



foreach ($datas as $value) {

  if($value['Mark'] == 'A')
  {$MA+=1; $countA++;}
  if($value['Mark'] == 'B')
  {$MB+=1; $countB++;}
  if($value['Mark'] == 'C')
  {$MC+=1; $countC++;}
  if($value['Mark'] == 'D')
  {$MD+=1; $countD++;}
  if($value['Mark'] == 'FX')
  {$MFX+=1; $countFX++;}
}
/*echo"MA is".$MA;
echo"MB is".$MB;
echo"MC is".$MC;
echo"MD is".$MD;
echo"MF is".$MF;*/

$MM = $MA + $MB + $MC + $MD + $MFX;
//echo"MM is".$MM;
  if($Res == 'A')
  {$MarkStat = $MA/$MM*100;}
  if($Res == 'B')
  {$MarkStat = $MB/$MM*100;
   $background="markA.png";}
  if($Res == 'C')
  {$MarkStat = $MC/$MM*100;}
  if($Res == 'D')
  {$MarkStat = $MD/$MM*100;}
  if($Res == 'FX')
  {$MarkStat = $MFX/$MM*100;}
$conn->close();
  

function one_of($chances)
{
    $res = $chances[0];
    if(isset($chances[0]))
    {
    unset($chances[0]);
    } 

    foreach ($chances as $chance){
        if ($chance == 1/61){
            continue;}else{
        $res += $chance - ($chance * $res);}
}
    	return $res;
	

    }

   

    $chances = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11];
    $A = $MarkStat;
    $C = one_of($chances)*100;


}
?>
<div class="result_drive">
<img src="<?php echo $background; ?>" alt="responsive image">
<div class="overlay">
<?php echo" Your result is: "."<br>"; ?>
</div>
<div class="overlay_1"><?php echo"Percentage of people with same result is: ".round($A, 2)."%<br>";
 echo"Chance of crash is: ".round($C, 2)."%";?>

</div>


</div>

</body>
</html>