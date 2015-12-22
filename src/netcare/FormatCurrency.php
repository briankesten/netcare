<?php


namespace Netcare;


class FormatCurrency
{

    /**
     * Takes an int and returns a string that contains a USD formatted value
     * This is not used to perform calculations but only send to the view
     * @param  int $int_amount Integer formatted currencly value
     * @return string Returns a string with the final USD formatted currency
     **/


    public function formatUSD($int_amount)
    {

        //convert integer value to float for formatting
        $int_amount = $int_amount * .01;
        //use number_format function to format value
        $int_amount = number_format($int_amount, 2, '.', ',');
        //Prefix dollar sign to front
        $final_amount = "$" . $int_amount;
        return $final_amount;
    }
}