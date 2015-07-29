<?php

namespace app\Helpers;


class MyHtml
{
    public function radio($name, $params = []) {
        $str_params = '';

        foreach ($params as $param => $value)
            $str_params .= $param . '="' . $value . '" ';

        return '<input type="radio" name="' . $name . '" ' . $str_params . '/>';
    }
}