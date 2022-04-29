<?php

  /** Plugin declaration
   * extends MantisPlugin
   * Example plugin that implements Jquery files
   */

class JqueryExamplePlugin extends MantisPlugin
{
# Declare your plugin here
   # Properties will be used by Mantis plugin's system
    function register()
    {
        $this->name = 'Test plugin';
        $this->description = 'A test plugin to learn how plugins work';
        $this->page = '';

        $this->version = '0.0.1';
        $this->requires = array(
            "MantisCore" => "2.0.0",
        );

        $this->author = 'Your Self';
        $this->contact = 'aimarkarrik@gmail.com';
        $this->url = 'goldmiin.webhosting.tptlive.ee/mantisbt/';
    } 

    # Hooked functions runs when the event is triggered
    function hooks()
    {
        return array(
            
        );
    }
}