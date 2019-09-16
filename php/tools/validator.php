<?php

namespace Validator;

class Validator{
       
    public static function emailValidator($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);//  Filters a variable with a specified filter (FILTER_VALIDATE_EMAIL)
    }
    public static function passwordValidator($password){
        $number    = preg_match('@[0-9]@', $password);
        $space = preg_match('@[^ ]@', $password); // must contain at least one number
        return ($number && $space && strlen($password) >= 8 && strlen($password) <= 16); // password lenght must be: 8 <= password.lenght <= 16
    }
    public static function nameValidator($name){
        return preg_match("/^([a-zA-Z' ]+)$/",$name);
    }
    public static function cfValidator($cf)
    {
            if($cf=='')
           return false;
       
            if(strlen($cf)!= 16)
           return false;
       
            $cf=strtoupper($cf);
            if(!preg_match("/[A-Z0-9]+$/", $cf))
           return false;
            $s = 0;
            for($i=1; $i<=13; $i+=2){
           $c=$cf[$i];
           if('0'<=$c and $c<='9')
                $s+=ord($c)-ord('0');
           else
                $s+=ord($c)-ord('A');
            }
       
            for($i=0; $i<=14; $i+=2){
                $c=$cf[$i];
            switch($c){
                    case '0':  $s += 1;  break;
                    case '1':  $s += 0;  break;
                    case '2':  $s += 5;  break;
                    case '3':  $s += 7;  break;
                    case '4':  $s += 9;  break;
                    case '5':  $s += 13;  break;
                    case '6':  $s += 15;  break;
                    case '7':  $s += 17;  break;
                    case '8':  $s += 19;  break;
                    case '9':  $s += 21;  break;
                    case 'A':  $s += 1;  break;
                    case 'B':  $s += 0;  break;
                    case 'C':  $s += 5;  break;
                    case 'D':  $s += 7;  break;
                    case 'E':  $s += 9;  break;
                    case 'F':  $s += 13;  break;
                    case 'G':  $s += 15;  break;
                    case 'H':  $s += 17;  break;
                    case 'I':  $s += 19;  break;
                    case 'J':  $s += 21;  break;
                    case 'K':  $s += 2;  break;
                    case 'L':  $s += 4;  break;
                    case 'M':  $s += 18;  break;
                    case 'N':  $s += 20;  break;
                    case 'O':  $s += 11;  break;
                    case 'P':  $s += 3;  break;
                    case 'Q':  $s += 6;  break;
                    case 'R':  $s += 8;  break;
                    case 'S':  $s += 12;  break;
                    case 'T':  $s += 14;  break;
                    case 'U':  $s += 16;  break;
                    case 'V':  $s += 10;  break;
                    case 'W':  $s += 22;  break;
                    case 'X':  $s += 25;  break;
                    case 'Y':  $s += 24;  break;
                    case 'Z':  $s += 23;  break;
            }
           }
       
           if( chr($s%26+ord('A'))!=$cf[15] )
           return false;
       
           return true;
       }
    
    public static function mobileValidator($mobile)
    {
        return preg_match('/^[0-9]{10}+$/', $mobile);
    }

    public static function validateSubscriptionDate($subscriptionType){
        switch ($subscriptionType) {
            case 'Mensile':
                return Date("Y-m-d",strtotime("now + 1 month"));
                break;
            case 'Trimestrale':
                return Date("Y-m-d",strtotime("now + 3 month"));
                break;
            case 'Annuale':
                return Date("Y-m-d",strtotime("now + 12 month"));
                break;
        }
    }    

}
?>