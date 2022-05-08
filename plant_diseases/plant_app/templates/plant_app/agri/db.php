<?php

$con = mysqli_connect('localhost','root','','agri');

if($con)
{
    ?>
        <script>
            alert("Connection Successful!");
        </script>
    <?php
}

?>

