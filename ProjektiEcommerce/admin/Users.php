<?php
    $page="Manage Users";
    include '../includes/incHeader.php';?>
   <style>
        #tg{
            display:flex;
        }
    
        #content{

            display:flex;
            flex-direction:column;
            width:600px;
        }
        h2{
            text-align: center;
        }
       table,th,td{
        border: solid lightgray;
        text-align: center;
       }
   </style>
  
     <div id="tg">
        <?php include '../includes/sidemenu.php';
              include '../CRUD/model.php'; ?>
        <div id="container">
           
            <div id="content">
            <?php
                $model = new Model();
                $users = $model->fetch('user');
    
                if($users==''){
                    echo '<h2>No Users</h2>';
                }else{
                   ?>
                    <table>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                    <?php
                foreach ($users as $user) {
                    ?>
                    <td><?php echo'#'.$user['ID']?></td>
                    <td><?php echo$user['FirstName']?></td>
                    <td><?php echo$user['LastName']?></td>
                    <td><?php echo$user['Username']?></td>
                    <td><?php echo$user['Email']?></td>
                    <td>
                        <a href="delete.php?table='user'&id=<?php echo $user['ID'];?>" id="delete">Delete</a>
                        </td>
                        </tr>
                        <?php
                    }
                }
            ?>
            
            </table>
            </div>
        </div>
     </div>
            
        
    
    