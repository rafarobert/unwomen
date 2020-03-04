<?php
/**
 * class.unwomen.php
 *  
 */

  class unwomenClass extends PMPlugin {
    function __construct() {
      set_include_path(
        PATH_PLUGINS . 'unwomen' . PATH_SEPARATOR .
        get_include_path()
      );
    }

    function setup()
    {
    }

    function getFieldsForPageSetup()
    {
    }

    function updateFieldsForPageSetup()
    {
    }

  }
?>