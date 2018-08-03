<?php

// /app/Http/Controllers.UserController.php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 2;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();

        return view('index', compact('users', 'links'));
    }  

    public function show($id)
    {
        $user = $this->userRepository->getById($id);

        return view('show',  compact('user'));
    }

}
