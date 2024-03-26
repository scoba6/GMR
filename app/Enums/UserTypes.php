<?php

namespace App\Enums;

use Essa\APIToolKit\Enum\Enum;

class UserTypes extends Enum
{
    public const SADMIN = 'Super Administrateur';
    public const ADMIN = 'Administrateur';
    public const USER = 'Utilisateur Simple';
    public const USCON = 'Utilisateur Consultation';
}

