<?php

namespace Jbi\BrowscapBundle;

use phpbrowscap\Browscap;

/*
 * @author Jeremie Leca <jleca@datalicious.com>
 */
class BrowscapFactory
{
    private static $browscap;
    
    public static function get($cacheDir, $remoteIniUrl = null, $remoteVerUrl = null, $doAutoUpdate = null)
    {
        if(!isset(self::$browscap)){
            self::$browscap = new Browscap($cacheDir);
            
            if(!is_null($remoteIniUrl)){
                self::$browscap->remoteIniUrl = $remoteIniUrl;
            }
            
            if(!is_null($remoteVerUrl)){
                self::$browscap->remoteVerUrl = $remoteVerUrl;
            }
            
            if(!is_null($doAutoUpdate)){
                self::$browscap->doAutoUpdate = $doAutoUpdate;
            }
        }
        
        return self::$browscap;
    }
}
?>
