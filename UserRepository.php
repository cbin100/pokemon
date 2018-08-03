<?php

// /app/Repositories/UserRepository.php

namespace App\Repositories;

use App\User;

class UserRepository
{

    protected $user;

    public function __construct(User $user)
	{
		$this->user = $user;
	}
	public function getPaginate($n)
	{
		return $this->user->paginate($n);
	}

	public function getById($id)
	{
		return $this->user->findOrFail($id);
	}
}
