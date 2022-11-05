<?php
include ("sfriend.php");
if(isset($_POST['input'])){
    $input=$_POST['input'];
    $query="SELECT First_Name FROM users where First_Name='Yukta'";
    $data=$conn->query($query);
    if(mysqli_num_rows($data) > 0){?>
        <table class="table table-bordered table-striped mt-4">
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($data) or die("no data"));{
                        
                            $name=$row['First_Name'];
                            
                    }  
                            
                    
                   
                ?>
                <tr>
                    <td><?php echo "hello".$name; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    }else{
        echo "no data";
    }
mysqli_close($conn);
?>