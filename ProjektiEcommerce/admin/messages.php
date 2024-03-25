
<style>
    #tg{
        display: flex;
    }

        
        table,th,td{
        border: solid lightgray;
        text-align: center;
       }
       
</style>
<?php
    $page="Messages";
    include '../includes/incHeader.php';?>
    <div id="tg">
        <?php include '../includes/sidemenu.php';
              include '../CRUD/model.php'; ?>

        <div id="container">
           
            <div id="messages">
                
                <?php
                    $model = new Model();
                    $messages = $model->fetch('messages');
                    
                    if($messages!=null){
                        ?>
                        <table>
                    <tr>
                        <th>From</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    <tr>
<?php
                    foreach ($messages as $msg) {
                        ?>
                        <td><?php echo$msg['Name']?></td>
                        <td><?php echo$msg['Email']?></td>
                        <td><?php echo$msg['Message']?></td>
                        <td>
                            <a href="delete.php?table='messages'&id=<?php echo $msg['ID'];?>" id="delete">Delete</a>
                            </td>
                            </tr>
                            <?php
                        }
                    }else{
                        echo "<h2>No messages ;)</h2>";
                    }
                ?>
                    </table>
            </div>
        </div>
    </div>