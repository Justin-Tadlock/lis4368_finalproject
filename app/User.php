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
    protected $primaryKey = 'username';
    
    /**
     * @var string Database connection name.
     */
    protected $connection = 'myDB';
    
    /**
     * Returns the user's username
     * 
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }
    
    /**
     * Returns the user's email address.
     * 
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }
    
    /**
     * Set the user's username.
     * 
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }
    
    /**
     * Set the user's email address
     * 
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    
    /**
     * Set the user's password
     * 
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }
    
}
