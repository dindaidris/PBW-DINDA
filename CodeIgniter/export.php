<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "teknik_informan");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM tbl_customer";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Nama</th>  
                         <th>Alamat Email</th>  
                         <th>Pesan</th>  
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["Nama"].'</td>  
                         <td>'.$row["AlamatEmail"].'</td>  
                         <td>'.$row["Pesan"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
