<?php
$class = (new class() extends \PoP\Root\Component\AbstractComponent
{
    /**
     * Boot component
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // Initialize code
        require_once 'migrate/pop-static-site-generator.php';  
    }
});
$class::init();
