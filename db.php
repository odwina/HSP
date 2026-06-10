<? php
$conn = mysql_connect(
"localhost",
"root",
"",
"hospital_db"
);
if(!$conn){
die("connection failed");
}
?>