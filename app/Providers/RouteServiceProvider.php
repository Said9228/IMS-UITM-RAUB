<?php

$this->routes
(function () 
    {
    Route::middleware('web')
        ->group(base_path('routes/web.php'));
    }
);