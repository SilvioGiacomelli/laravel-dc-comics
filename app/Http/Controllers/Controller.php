<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

//Il controller è una classe che gestisce la logica delle richieste HTTP
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
