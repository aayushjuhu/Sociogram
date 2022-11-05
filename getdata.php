<?php 
include('db.php');
$search=$_POST['search'];
$sql="SELECT Username from users where Username like '%$search%'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
if(isset($data['0'])){
    $html='<table class="table table-bordered text-center">';     
    foreach($data as $list){
        
        $html.=
        '<tr>
            
            <td><a href="profilepage.php?user=">'.$list['Username'].'</a></td>
        </tr>';
    }
    $html.='</table>';
    echo $html;
}
else{
    echo "data not found";
}
?>