<?php

function lang( $phrase ) {

    static $lang = array(

        'MESSAGE'   =>  'Welcome',

   );
   
    return $lang[ $phrase ];

}