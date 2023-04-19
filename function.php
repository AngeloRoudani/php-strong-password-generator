<?php 

        function generaPassword ($input, $string) {
            
            return substr(str_shuffle($string), 0, $input);
            

        }

    ?>    
