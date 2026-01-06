<?php
namespace App\Enums;

enum userStatus: string
{
    case Active = 'active';
    case Inactive='inActive';
    case Bannded='bannded';


}