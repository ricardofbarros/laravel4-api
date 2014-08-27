<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | API header response.
    |--------------------------------------------------------------------------
    |
    | Default API will always return "200", but you can set the right header
    | returned by change "true".
    |
    */

    'httpResponse' => false,
    
    
    /*
    |--------------------------------------------------------------------------
    | Domain connector
    |--------------------------------------------------------------------------
    |
    | Default false, If you set a domain you will bind all API calls (get, post, put and delete)
    | to consume the domain.
    |
    */    
    
    'domainBind' => 'http://localhost:3000/api'

);
