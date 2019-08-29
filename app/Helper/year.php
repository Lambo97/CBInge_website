<?php
function year()
{
    $year = date('Y');
    if(date('m')<9 or (date('m')==9 and date('d')<20))
    {
        $year = $year-1;
    }
    return 2019;
}