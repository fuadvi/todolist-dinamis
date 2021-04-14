<?php // Code within app\Helpers\Helper.php

use Carbon\Carbon;
use App\Models\TodoList;

function limit()
{
    echo TodoList::where('waktu', Carbon::today())->count() < 5;
}

function customTanggal($date, $date_format)
{
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}


function allUpper($str)
{
    return strtoupper($str);
}
