<?php
namespace AngularFilemanager\LocalBridge;

use function realpath;

/**
 * Translate class
 *
 * For simple translation to alternative languages
 * @author Jakub Ďuraš <jakub@duras.me>
 */
class Translate
{
    private $strings = [];

    public function __construct($lang)
    {
    	
    	
        if (!file_exists(realpath( __DIR__.'/../lang/'.$lang.'.json'))) {
            throw new \Exception('No language file for chosen language');
            return;
        }

        $json = file_get_contents(realpath( __DIR__.'/../lang/'.$lang.'.json'));

        $this->strings = json_decode($json, true);
    }

    public function __get($name)
    {
        if (isset($this->strings[$name])) {
            return $this->strings[$name];
        } else {
            return $name;
        }
    }
}
