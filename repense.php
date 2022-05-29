<?php 
$usernom=$_POST['usernom'];
$userprenom=$_POST['userprenom'];
$usergendre=$_POST['usergendre'];
$usernum=$_POST['usernum'];
$userdate=$_POST['userdate'];


//connexion au base se donnes sql 



//creer une connection 
$conn =new mysqli('localhost','root','','inscription');
if($conn->connect_error){
    
    die('connection failed :' .$conn->connect_error);
}
 els{
   
    
   
    $stmt=$conn-> prepare("insert into inscrire(usernom,userprenom,usergendre,usernum,userdate) values(?,?,?,?,?)" );
    $stmt->bind_param("sssii",$usernom ,$userprenom,$usergendre,$usernum,$userdate);
    $stmt -> excute();
    $stmt-> bind_result($usernom);
    $stmt-> store_result();
    $rnum= $stmt-> stmt->num_rows;
    if( $rnum==0){
         $stmt->close();
        $stmt=$con-> prepare($insert);
        $stmt->bind_param("ssssii",$usernom,$userprenom,$usergendre,$usernum,$userdate);
        $stmt -> excute();
        echo"new record sucessfully";
       
        $stmt->close();
        $conn->close();
}
}






?>