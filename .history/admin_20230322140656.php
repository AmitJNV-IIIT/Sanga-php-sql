<?PHP
$server = "127.0.0.1";
$username = "root";
$password = "";
$database = "android";
$conn = mysqli_connect($server,$username,$password,$database);
if(mysqli_connect_errno())
{
	die("Connection error: ");
}

$email=$_POST['managerentry'];

$sql="DELETE FROM manager WHERE username = '$email'";
if($conn->query($sql)===TRUE){
	echo "deleted";
}
mysqli_close($conn);

echo "connected";
?>