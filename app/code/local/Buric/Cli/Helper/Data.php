<?php

class Buric_Cli_Helper_Data extends Mage_Core_Helper_Abstract
{
    protected $styles = array(
        'bold'             => '1',
        'dark'             => '2',
        'underline'        => '4',
        'crossed'          => '9',

        'black'            => '30',
        'red'              => '31',
        'green'            => '32',
        'yellow'           => '33',
        'blue'             => '34',
        'magenta'          => '35',
        'cyan'             => '36',
        'light_gray'       => '37',

        'bg_black'         => '40',
        'bg_red'           => '41',
        'bg_green'         => '42',
        'bg_yellow'        => '43',
        'bg_blue'          => '44',
        'bg_magenta'       => '45',
        'bg_cyan'          => '46',
        'bg_light_gray'    => '47',

        'dark_gray'        => '90',
        'light_red'        => '91',
        'light_green'      => '92',
        'light_yellow'     => '93',
        'light_blue'       => '94',
        'light_magenta'    => '95',
        'light_cyan'       => '96',
        'white'            => '97',

        'bg_dark_gray'     => '100',
        'bg_light_red'     => '101',
        'bg_light_green'   => '102',
        'bg_light_yellow'  => '103',
        'bg_light_blue'    => '104',
        'bg_light_magenta' => '105',
        'bg_light_cyan'    => '106',
        'bg_white'         => '107',
    );

    /*
     * Check if currently command line environment
     */
    public function isCli() {
        return php_sapi_name() === 'cli';
    }

    /*
     * Custom styling
     */
    public function puts($string, $styles = array()) {
        $coloredString = "";

        foreach($styles as $style)
        {
            if (isset($this->styles[$style])) {
                $coloredString .= "\033[" . $this->styles[$style] . "m";
            }
        }

        $coloredString .=  $string . "\033[0m";

        echo $coloredString . PHP_EOL;
    }

    /*
     * Success message
     */
    public function putSuccess($string) {
        $this->puts($string, array('bg_green', 'yellow'));
    }

    /*
     * Error message
     */
    public function putError($string) {
        $this->puts($string, array('bg_red', 'blue'));
    }

    /*
     * Warning message
     */
    public function putWarning($string) {
        $this->puts($string, array('bg_yellow'));
    }

    /*
     * Notification message
     */
    public function putNotice($string) {
        $this->puts($string, array('bg_blue', 'green'));
    }
}
