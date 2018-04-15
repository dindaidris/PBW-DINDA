<html>
<head>
    <title>Admin Page</title>
</head>

<body>
    <p align="left"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></p>
    <h1 align="center">Data Website</h1>
    
    <div align="center">
    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>Email</th> <th>Telepon</th><th>Pesan</th> <th>Update</th>
    </tr>
    <?php
        foreach($contact as $c){
        ?>
        <tr>
          <td><?php echo $c->nama ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->phone ?></td>
          <td><?php echo $c->pesan ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
        </div>
</body>
</html>
