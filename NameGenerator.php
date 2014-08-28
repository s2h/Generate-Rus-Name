<?php
/**
 * Created by PhpStorm.
 * User: sshuisky
 * Date: 28.08.14
 * Time: 16:09
 */

class NameGenerator {
    public static function generate($sex = null, $delimiter = ' ')
    {
        $male_last_name    = array();
        $male_name         = array();
        $male_patronymic   = array();
        $female_last_name  = array();
        $female_name       = array();
        $female_patronymic = array();
        require_once('names_array.php');
        if (null === $sex) {
            $sex = rand(0, 1);
        }


        return $sex ?
            $male_last_name[rand(0, count($male_last_name) - 1)] . $delimiter .
            $male_name[rand(0, count($male_name) - 1)] . $delimiter .
            $male_patronymic[rand(0, count($male_patronymic) - 1)] :
            $female_last_name[rand(0, count($female_last_name) - 1)] . $delimiter .
            $female_name[rand(0, count($female_name) - 1)] . $delimiter .
            $female_patronymic[rand(0, count($female_patronymic) - 1)];
    }
}


echo NameGenerator::generate();