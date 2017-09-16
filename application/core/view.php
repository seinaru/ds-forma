<?php

class View
{
    function generate($content_view, $template_view = 'view_template.php')
    {
        include 'application/views/'.$template_view;
    }
}