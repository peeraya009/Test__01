<?php
include "header.php";
include "branner.php";
include "nav.php";
include "connect.php";
?>

<div class = "container mt-5">
        <h2><center>Province</center></h2>
        <table class = "table table-bordered">
            <tr>
                <th>PROVINCE_CODE</th>
                <th>PROVINCE_NAME</th>
                <th>zone_id</th>
            </tr>
    <?php
    $sql = "SELECT * FROM province";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        
        ?>
            <tr>
                <td><?php echo $row['student_id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['group_id'] ?></td>
                <td><?php echo $row['level_group'] ?></td>
            </tr>
        <?php

      }
    } else {
      echo "0 results";
    }
    
    mysqli_close($conn);
    ?>
        </table>

  </div>
</div>
<?php
include ("footer.php");
?>