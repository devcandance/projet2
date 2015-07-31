<?php

namespace app\Helpers;


class MyHtml
{
    public function radio($name, $args = [], $label = true)
    {
        $attr = '';
        $id = '';
        if (!empty($args)) {
            foreach ($args as $key => $value) {
                if (is_numeric($key)) {
                    $attr .= $value;
                    continue;
                }
                if ($key == 'title') {
                    $title = $value;
                    continue;
                }
                $attr .= " $key=\"$value\" ";
            }
            $id = ucfirst($name);
        }
        if ($label) {
            $title = (isset($title)) ? ucfirst($title) : ucfirst($name);
            return "<label for=\"$id\">$title</label>" . " " . "<input type=\"radio\" name=\"$name\" id=\"$id\" $attr >";
        }
        return "<input type=\"radio\" name=\"$name\" id=\"$id\" $attr >";
    }



    public function link($title, $args = [], $label = true)
    {
        $attrs = "";
        $name = "";
        if ($args) {
            foreach ($args as $key => $values) {
                if ($key == 'name') {
                    $name .= $values;
                }
                $attrs .= "$key =\"$values\"";
            }
        }
        if ($label) {
            return "<label for=\"$name\">ucfirst($title)</label><input type=\"text\" id=\"$name\" $attrs placeholder=\"ex : http://www.confphp.fr\" /> ";
        }
        return "<input type=\"text\" id=\"$name\" name=\"$name\" $attrs placeholder=\"ex : http://www.confphp.fr\" />";
    }



    public function thumb($title, $args = [], $label = true)
    {
        $attrs = "";
        $name = "";
        $ctrlAttr = ['name' => "$name"];
        if ($args) {
            foreach ($args as $attr => $value) {
                if (array_key_exists($attr, $ctrlAttr)) {
                    $name = isset($args['name']) ? $args['name'] : '';
                    continue;
                }
                $attrs .= "$attr =\"$value\"";
            }
        }
        if ($label) {
            return "<label for=\"$name\">" . ucfirst($title) . " : </label><input type=\"file\" id=\"$name\" name=\"$name\" $attrs />";
        }
        return "<input type=\"file\" id=\"$name\" name=\"$name\" $attrs />";
    }
}