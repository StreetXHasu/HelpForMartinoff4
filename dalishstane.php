<?php
$redirect_link=$_REQUEST['page_url'];
                    if($redirect_link==""){
                        header("location: index.php");
                    } else{
                        header("location: ".$redirect_link);
                    }
                    ?>