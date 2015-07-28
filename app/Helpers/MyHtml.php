<?php namespace App\Helpers;

class MyHtml
{

    public function radio()
    {
        return '<input type="radio">';
    }


    /**
     * public function radio($name, $args=[], $label=true)
    {
        $attr = '';
        $args_id = 0;
        if(!empty($args))
        {
            foreach($args as $val=>$value)
            {
                $args_id ++;
                $attr .= " $val =\"$value\" ";

                /**
                 * array('attr_tab')->insert([
                    [
                        $val => $value,
                    ],
                ]);

                // array_push() ????

            }
        }

        if($label)
        {
            $id = ucfirst($name);
            $title = ucfirst($name);

            return "<label for=\"$id\">$title</label>" . "<br />"
                . "<input type=\"radio\" name=\"$name\" $attr id=\"$id\" >";
        }

        return "<input type=\"radio\" name=\"$name\" $attr >";
    }*/
}
