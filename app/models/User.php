<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = ['title',
							'username',
							'password',
							'address',
							'city',
							'fax',
							'mobile',
							'skype',
							'full_name',
							'birth_date',
							'country',
							'company',
							'phone',
							'newsletter',
							'email',
							'member_type',
							'register_code',
							'is_confirmed',
							'knowledge_source',
							'remember_token',
							];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
