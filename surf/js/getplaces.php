
let Places;
Places ={
    <?php
    include ('../includes/dbh.inc.php');
    $sql = "SELECT * from destinations ;";
    $stmt= mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../index.php?sql_error1");
        exit();
    }
    else {
        mysqli_stmt_execute($stmt);
        $result = $stmt->get_result();
        if($result->num_rows === 0){
        // echo 'error';
        }
        else{
        while($row = $result->fetch_assoc()) {
        $pid = $row['pid'];
        $country = $row['country'];
        $lat =$row['lat'];
        $lon=$row['lon'];
        $pic=$row['small_pic'];
        echo '"'.$country.'"'.':['.$lat.','.$lon.',"'.$pic.'"],';
        // echo $pid.','.$country.','.$lat.','.$lon;
        }}
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    ?>};

<!-- console.log(plazes); -->