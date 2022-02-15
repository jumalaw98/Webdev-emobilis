<?php

$dbconnstudentreg = mysqli_connect("localhost", "root", "", "studentreg");

    if ($dbconnstudentreg == false){
        die ("Error connecting to studentreg server" .mysqli_connect_error($dbconnstudentreg));
    }