<?php

namespace BukApi\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use BukApi\Constants\RequestCode;

trait ApiResponser{
    private function successResponse($data, $code){
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    protected function showAll(Collection $collection, $code=RequestCode::OK){
        return $this->successResponse(['data' => $collection], $code);
    }

    protected function showOne(Model $instance, $code=RequestCode::OK){
        return $this->successResponse(['data' => $instance], $code);
    }

    protected function showOneData($data, $code=RequestCode::OK){
        return $this->successResponse(['data' => $data], $code);
    }
}