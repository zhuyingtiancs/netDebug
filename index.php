<?php

    $isLogin = true;
    if($isLogin)
    {
        include('View/netDebug.html');
    }
    else
    {
        include('View/login.html');
    }

    if($_POST)
    {
        if($_POST['loginCode'])
        {
            $code = $_POST['loginCode'];
            $key = file_get_contents('k');
            if(md5($key.$code)==ff29a201d57b4101c068731f65e221d4)
            {
                exit('success');
            }
            else{
                exit('error');
            }
        }


    }

?>