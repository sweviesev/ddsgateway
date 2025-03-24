<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
    }

    public function obtainUsers1()
    {
    return $this->performRequest('GET', '/api/users');
    }   

    public function obtainUser1($id)
    {
    return $this->performRequest('GET', "/api/users/{$id}");
    }

    public function createUser1($data)
    {
        return $this->performRequest('POST', '/api/users', $data);
    }

    public function editUser1($data, $id)
    {
        return $this->performRequest('PUT', "/api/users/{$id}", $data);
    }

    public function deleteUser1($id)
    {
        return $this->performRequest('DELETE', "/api/users/{$id}");
    }

}
