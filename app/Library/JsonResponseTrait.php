<?php

namespace App\Library;

trait JsonResponseTrait
{
    protected $statusCode = 200;

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function respond($data = [], $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithSuccess($data = [], $message = null)
    {
        return $this->respond([
            'data' => (array) $data,
            'message' => $message
        ]);
    }

    public function respondWithMessage($message)
    {
        return $this->respond([
            'message' => $message
        ]);
    }

    public function respondWithError($message = '', $internalCode = 'error', $statusCode = 400)
    {
        return $this->setStatusCode($statusCode)->respond([
            'code'    => $internalCode,
            'message' => $message,
        ]);
    }

    public function respondStored($message = '', $location = null, $internalCode = 'stored', $statusCode = 201)
    {
        return $this->setStatusCode($statusCode)->respond([
            'code'    => $internalCode,
            'message' => $message,
            'location' => $location
        ]);
    }

    public function respondWithErrors($errors = [], $message = 'Validation error', $internalCode = 'error', $statusCode = 422)
    {
        return $this->setStatusCode($statusCode)->respond([
            'code'    => $internalCode,
            'message' => $message,
            'errors' => $errors
        ]);
    }


    public function respondUnauthorized()
    {
        return $this->respondWithError('You are not authorized to perform this request.', 'unauthorized', 401);
    }

    public function respondForbidden()
    {
        return $this->respondWithError('You are forbidden to perform this request.', 'forbidden', 403);
    }

    public function respondNotFound($message = null)
    {
        return $this->respondWithError((is_null($message)) ? 'Requested resource not found.' : $message , 'not_found', 404);
    }
}
