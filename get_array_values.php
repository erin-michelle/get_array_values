<?php

    $a = array(2, 3, "hello");
    
    function print_lists($a)
    {
        $result = "";
        foreach($a as $values)
        {
            $result .= "<li>" . $values . "</li>";
        }
        return $result;
    }
    
    echo "<ul>" . print_lists($a) . "</ul>";
?>