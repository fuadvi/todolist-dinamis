<?php // Code within app\Helpers\Helper.php

use Carbon\Carbon;
use App\Models\TodoList;

function limit()
{
    return TodoList::where('waktu', Carbon::today())->count() == 5;
}
