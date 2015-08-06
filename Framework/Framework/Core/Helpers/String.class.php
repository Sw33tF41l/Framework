<?php if (!defined("BASEPATH")) die("No direct Access to Script Files!");
class String{

	public static function startsWith($trigger, $string) {
        $tmp = str_split($string);
        if ($tmp[0] == $trigger)
            return true;
        return false;
    }

    public static function endsWith($trigger, $string) {
        $tmp = str_split($string);
        if ($tmp[sizeof($tmp)] == $trigger)
            return true;
        return false;
    }

}