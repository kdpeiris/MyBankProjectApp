<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        //$conn = mysqli_connect('localhost', 'root', '', 'myproject01db') or die("Connection Failed:" .mysqli_connect_error());
        $conn = mysqli_init();
        //mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
        mysqli_real_connect($conn, "mybankprojectdbserver.mysql.database.azure.com", "kdpeiris", "Dil@0718", "mybankprojectdb", 3306);
        if(isset($_POST['gname']) && isset($_POST['sname']) && isset($_POST['bday']) && isset($_POST['nic']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['pnumber']) && isset($_POST['atype'])){
            $given_name = $_POST['gname'];
            $surname = $_POST['sname'];
            $dob = $_POST['bday'];
            $nic = $_POST['nic'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $phone_no = $_POST['pnumber'];
            $account_type = $_POST['atype'];

            $sql = "INSERT INTO customers (given_name, surname, dob, nic, gender, email, phone_no, account_type) VALUES ('$given_name', '$surname', '$dob', '$nic', ' $gender', '$email', '$phone_no', '$account_type')";
            $query = mysqli_query($conn,$sql);

            if($query){
                echo "Entry Successful";
                echo "&nbsp; &nbsp; &nbsp; <a href='index.php'>Add another record</a>";
            }
            else{
                echo "Error Occured";
                echo "&nbsp; &nbsp; &nbsp; <a href='index.php'>Back</a>";
            }
        }
        
    }


?>