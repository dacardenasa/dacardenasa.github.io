<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appExecute extends Controller
{
    //

    public static function getData(Request $request) {

        $arraynumber = array(4);

        $data = $request->all();

        $digito1 = $data['QuantityToRepeat'];
        $digito2 = $data['DigitToShow'];

        $numeroDigitos = self::countDigits($digito2);

        $arraynumber = self::arrayFill($numeroDigitos, $digito2);

        if($digito1 > 5 || $digito1 == 0) {
            return view('/mistakeApp', ['resultado' => 'El digito 1 ingresado es mayor a 5 o igual a 0 por favor intentalo nuevamente']);
        } else if($digito2 > 99999) {
            return view('/mistakeApp', ['resultado' => 'EL  digito 2 ingresado tiene 6 digitos o mas']);
        }else {
            return view('/executeApp', compact('digito1','digito2','numeroDigitos','arraynumber'));
        }

    }

    public static function countDigits($number) {
        $numero = $number;
        $n = 0;
        do{
            $numero = floor($numero / 10);
            $n = $n + 1;
        } while ($numero > 0);
        return $n;
    }

    public static function arrayFill($number1, $number2) {
        $num1 = 0;
        $num2 = 0;
        $num3 = 0;
        $num4 = 0;
        $num5 = 0;

        $digitsChain = array(4);

        switch ($number1) {
            case 1:
                $num1 = intval($number2/1);
                $digitsChain[0] = $num1;
                break;
            case 2:
                $num1 = intval($number2/10);
                $run1 = $number2 % 10;
                $num2 = intval($run1/1);
                $digitsChain[0] = $num1;
                $digitsChain[1] = $num2;
                break;
            case 3:
                $num1 = intval($number2/100);
                $run1 = $number2 % 100;
                $num2 = intval($run1/10);
                $run2 = $number2 % 10;
                $num3 = intval($run2/1);
                $digitsChain[0] = $num1;
                $digitsChain[1] = $num2;
                $digitsChain[2] = $num3;
                break;
            case 4:
                $num1 = intval($number2/1000);
                $run1 = $number2 % 1000;
                $num2 = intval($run1/100);
                $run2 = $number2 % 100;
                $num3 = intval($run2/10);
                $run3 = $number2 % 10;
                $num4 = intval($run3/1);
                $digitsChain[0] = $num1;
                $digitsChain[1] = $num2;
                $digitsChain[2] = $num3;
                $digitsChain[3] = $num4;
                break;
            case 5:
                $num1 = intval($number2/10000);
                $run1 = $number2 % 10000;
                $num2 = intval($run1/1000);
                $run2 = $number2 % 1000;
                $num3 = intval($run2/100);
                $run3 = $number2 % 100;
                $num4 = intval($run3/10);
                $run4 = $number2 % 10;
                $num5 = intval($run4/1);
                $digitsChain[0] = $num1;
                $digitsChain[1] = $num2;
                $digitsChain[2] = $num3;
                $digitsChain[3] = $num4;
                $digitsChain[4] = $num5;
                break;
            default:
                echo "Error";
        }

        return $digitsChain;


    }
}
