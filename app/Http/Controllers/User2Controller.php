<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\User2Service;
use App\Traits\ApiResponser;

class User2Controller extends BaseController
{
    use ApiResponser;

    public $user2Service;

    public function __construct(User2Service $user2Service)
    {
        $this->user2Service = $user2Service;
    }

    public function index()
    {
        return $this->successResponse($this->user2Service->obtainUsers2());
    }

    public function show($id)
    {
        return $this->successResponse($this->user2Service->obtainUser2($id));
    }

    public function add(Request $request)
    {
        return $this->successResponse(
            $this->user2Service->createUser2($request->all()), 
            Response::HTTP_CREATED
        );
    }

    public function update(Request $request, $id)
    {
        return $this->successResponse($this->user2Service->editUser2($request->all(), $id));
    }

    public function delete($id)
    {
        return $this->successResponse($this->user2Service->deleteUser2($id));
    }
}

