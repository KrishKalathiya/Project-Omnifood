<?php

                    if($_GET['success']== 1){
                        echo"<div class=\"form-messages success\"> Thank you!Your message has been sent. </div>";
                    }
                    if($_GET['success']== -1){
                        echo"<div class=\"form-messages error\"> Oops! Something went wrong. Please try again.</div>";
                    }

                    ?>
