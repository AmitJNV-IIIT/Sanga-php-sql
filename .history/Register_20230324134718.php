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
$name=$_POST['inputname'];
$email=$_POST['inputemail'];
$pass=$_POST['inputpass'];
$address=$_POST['inputaddress'];
$phone=$_POST['inputphone'];

$sql="insert into registeru(name,email,pass,address,phone) values('$name','$email','$pass','$address','$phone')";

$var1=mysqli_query($conn,$sql);
if(!$var1) 
{
	echo "cannot insert data into table";
}
mysqli_close($conn);

echo "connected";
?>