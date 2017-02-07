<?php

include 'db_connect.php';//including db_connect.php

//echo $name." ".$email;

    $name=$_POST['name'];
    $email=$_POST['email'];
    $school =$_POST['school'];
    echo $school;


$db_insert=$conn->query("INSERT INTO student (`name`,`email_adress`,`new_school`) VALUE ('$name','$email','$school')");


    if ($db_insert) {

        echo '
        <!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body class="backgroundimg">';

        $sql="SELECT name, email_adress, school_name FROM `student`,`school` WHERE `student`.`new_school`=`school`.`id_school`";

        $data = array();

        $query= $conn->query($sql);
    echo ' <div class="col-md-12"><h1 class="text-center  centrumedical">Display Student of School</h1></div>';
        if($query->num_rows >0){
            echo '<div class="container">';
echo  '<table class="table table-hover " border="1">';
         echo ' <thead>
        <tr class="info centermad" >
            <th>NR.CRT.</th>
        <th>Name</th>
        <th>email</th>
        <th>School</th>
      </tr>
    </thead>
    <tbody>';

            $i=1;
            while($row=$query->fetch_assoc()){


                echo '<tr>';
echo '<td scope="row">'.$i++.'</td>';
echo '<td scope="row">'.$row['name'].'</td>';
echo '<td scope="row">'.$row['email_adress'].'</td>';
echo '<td scope="row">'.$row['school_name'].'</td>';
  echo '</tr>';

                echo '</body> </html> ';




    }}
    echo '</tbody>';
        echo '</table>';
        echo '<div>';
    }
    else {

        echo "nok";
    }
