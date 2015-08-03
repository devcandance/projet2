<?php

namespace app\Helpers;


class MyHtml
{
    public function radio($name, $args = [])
    {
        $attr = '';

        foreach ($args as $val => $value)
        {
            $attr .= " $val =\"$value\" ";
        }

        $title = ucfirst($value);

        return "<label>$title</label>"
        . "<input type=\"radio\" name=\"$name\" $attr >";
    }
}