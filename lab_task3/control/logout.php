<?php

session_start();
if(session_destroy())
{
    header("Location: ../view/lb_task3.php");
}
?>