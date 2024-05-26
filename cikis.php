<?php
    ob_start();
    session_start();
    session_unset(); 
    session_destroy(); 
    header("Refresh: 0; url=index.html");
    ob_end_flush();