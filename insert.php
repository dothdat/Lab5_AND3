<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="b";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="insert into test (HoTen,SoDT,Ma) values ('An1','0098888888',1)";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "Da insert thanh conh";
}
else
{
    echo "Co loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>