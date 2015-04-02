<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'UserLaravel';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
    
    /**
     * @var int Primary Key within the user table.
     */
    protected $primaryKey = 'usr_username';
    
    /**
     * @var string Database connection name.
     */
    protected $connection = 'myDB';

    
    /**
     * Returns the user's username.
     * 
     * @return string
     */
    public function getUsernameAttribute() {
        return $this->usr_username;
    }
    
    /**
     * Returns the user's encrypted password.
     * 
     * @return string
     */
    public function getPasswordAttribute() {
        return $this->usr_password;
    }
}
