<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'USUARIO';
    protected $primaryKey = 'USU_RUT';
    protected $username = 'USU_MAIL';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'USU_RUT', 'USU_MAIL', 'USU_PASSWORD','USU_ROL'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    public function getAuthPassword()
    {
        return $this->USU_PASSWORD;
    }
    
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
    
        if( ! $isRememberTokenAttribute )
        {
            parent::setAttribute($key, $value);
        }
    }
    
}
