<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewer's ideas</title>
</head>
<body>
<h3>Users List</h3>
    
    <hr>

    <div class="row">
        <div class="col-md-8">
            <table class="table table-stripped">
               <tr>
               
                <th>Name</th>
                <th>Date</th>
                <th>Topic</th>
                <th>Your idea</th>
               </tr>
               <?php if(!empty($users)){ foreach($users as $user ){ ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['date'] ?></td>
                    <td><?php echo $user['topic'] ?></td>
                    <td><?php echo $user['youridea'] ?></td>
                   
                </tr>
                <?php }} else { ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                    <?php } ?>
            </table>

        </div>

    </div>
</body>
</html>