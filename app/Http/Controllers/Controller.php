<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $returnUrl;
    public $fileRepo;

    public function prepare($req, $fillable): array{
        $data = array();
        foreach ($fillable as $fillable) {
            if ($req->has($fillable)) {
                $data[$fillable] = $req->get($fillable);
            }
        }
        return $data;
    }
}
