<?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "root", "Articles");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $title =  $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $datetime = date('Y-m-d h:i:s');
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO  post (title, content ,datetime) VALUES ('$title', '$content', '$datetime')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";}
                 else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>