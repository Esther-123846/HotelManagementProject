<?php
	$dbhost='localhost';
	$dbuser='root';
	$dbpass='';
	$dbname='db';
$conn=new mysqli("$dbhost","$dbuser","$dbpass","$dbname");
if(mysqli_connect_error())
{
	die("connection failed");
}
else
{
   $sql="SELECT * FROM bookmystay";
   $totalrooms=30;
   $result = mysqli_query($conn, $sql);
   if(($cnt=mysqli_num_rows($result))>$totalrooms)
       {
            echo "<center><table class='echo1'> 
            <body style='background-color:silver ;background-image:url(https://img.scoop.it/e4PlxD4Lkugdy4YG5M5Q9zl72eJkfbmt4t8yenImKBVvK0kTmF0xjctABnaLJIm9);padding:260px 200px 200px 200px'>
            <td><center><h2><i>Sorry,Currently Rooms are not available</i></h2></center></td>
            </table></center>";
            echo "<style type='text/css'>
        .echo1{
        color:pink;
        border:4px solid violet;
        border-radius:25px;
        padding:20px;
        </style>";
       }
   else 
       {
            $count=$totalrooms-$cnt;
            echo "<center><table class='echo123'> 
            <body style='background-color:purple ;background-image:url(https://media.istockphoto.com/photos/dark-blue-background-picture-id962737798?k=6&m=962737798&s=612x612&w=0&h=VlQamnGFUXt0gFx8udLDG3_it004SKZVKe-HYzEzTe8=);padding:230px 200px 200px 200px'>
            <td><center><h2><u><i>!!!.... $count rooms are available ....!!!<br><br>!!!.... click  <a href='mystay.html'><font color='maroon'>BookMyStay</font></a> to book your rooms ....!!!<br><br></i></u></h2></center></td>
            </table></center>";
        echo "<style type='text/css'>
        .echo123{
        color:gold;
        padding:50px;
        </style>";
            //echo "$count rooms are available<br><br>";
           // echo "click here to book your rooms<br><br>";
            //echo '<a href="mystay.html">BookMyStay</a>';
            //include('mystay.html');

       }
    $conn->close();
}
?>
