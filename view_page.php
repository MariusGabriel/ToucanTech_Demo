<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body class="backgroundimg">


<div class="container topform ">
    <div class="col-xs-12 contin">
        <form  name="myForm1" action="run.php" method="post" onsubmit="return connect();" >


            <div class="col-md-12"><h1 class="text-center  centrumedical">Insert Student of School</h1></div>




            <div class="form-group">

                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h5 class="color_h paglpg">Name</h5>


                    <input type="text" name="name"  id="name" class="form-control newnume" placeholder="name">


                </div>

                <div class="col-md-3">

                    <span><h5 class="color_h paglpg">email</h5></span>


                    <input type="email"  name="email"  class="form-control" placeholder="email">

                </div>

                <div class="col-md-4">

                    <h5 class="color_h paglpg">School:</h5>



                    <select name="school" id="school" >



                        <option>School:</option>

                        <?php
                        error_reporting(0);
                        include 'db_connect.php';//including db_connect.php

                        $select_student="SELECT DISTINCT * from school";

                        $query=$conn->query($select_student);

                        if($query->num_rows >0){


                        while($row=$query->fetch_assoc()){

                        ?>

                        <option name="<?php echo $row['id_school']; ?>" value="<?php echo $row['id_school']; ?>"><?php echo $row['school_name'];?></option>

                            <?php  }}?>

                    </select>
                </div></div>

            <div class="col-md-5 div_center">


                <div class="col-md-5 "></div>



            </div>


            <div class="col-md-7">

                <button class="btn btn-lg btn-primary color_h" num="submit" type="submit">Send</button>

            </div>



        </form>
    </div>

</div>

</body>
</html>
