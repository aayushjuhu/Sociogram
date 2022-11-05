<?php 
    include('db.php');
    $sql="SELECT Username from users";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
    // print_r($data)
?>
<html>
    <head>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<link rel="stylesheet" href="/resources/demos/style.css"> <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="icon" href="img/sicon.png">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body style="background-image:url('img/Sociogram bg-blur.jpg')">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div><h2 style="color:purple; font-family:Lobster">Sociogram</h2></div>
                </div>
                    <div class="form-group text-center">
                        <br><br>
                        <input type="text" name="search" id="search" placeholder="search" onkeyup="search()" style="border-radius:4px; border:2px solid blue;width:80%">
                    </div>
                    <div id="search-table">
                        <table class="table table-bordered text-center">
                            
                            <?php foreach($data as $list){?>
                            
                            <tr>
                            <td><a href="profilepage.php"><?php echo $list['Username']?></a></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                <script>
                    function search(){
                        var search=jQuery('#search').val();
                        if(search!=''){
                            jQuery.ajax({
                                method:'post',
                                url:'getdata.php',
                                data:'search='+search,
                                success:function(data){
                                    jQuery('#search-table').html(data);
                                }
                            });
                        }
                    }
                </script>
    </body>

</html>