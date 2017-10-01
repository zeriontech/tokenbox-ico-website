<?php

namespace App\Library\Support;

trait ApiResponseTrait
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

    /**
     *  @SWG\Definition(
     *         definition="SuccessMessage",
     *         required={"message"},
     *         @SWG\Property(
     *             property="message",
     *             type="string"
     *         )
     *     )
     */

    public function respondWithMessage($message)
    {
        return $this->respond([
            'message' => $message
        ]);
    }

    /**
     *  @SWG\Definition(
     *         definition="SingleError",
     *         required={"code", "message"},
     *         @SWG\Property(
     *             property="code",
     *             type="string"
     *         ),
     *         @SWG\Property(
     *             property="message",
     *             type="string"
     *         )
     *     )
     */

    /**
     * @param string $message
     * @param string $internalCode
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */

    public function respondWithError($message = '', $internalCode = 'error', $statusCode = 400)
    {
        return $this->setStatusCode($statusCode)->respond([
            'code'    => $internalCode,
            'message' => $message,
        ]);
    }

    /**
     *  @SWG\Definition(
     *         definition="StoredResponse",
     *         required={"code", "message"},
     *         @SWG\Property(
     *             property="code",
     *             type="string"
     *         ),
     *         @SWG\Property(
     *             property="message",
     *             type="string"
     *         ),
     *          @SWG\Property(
     *             property="location",
     *             type="string"
     *         )
     *     )
     */

    /**
     * @param string $message
     * @param null $location
     * @param string $internalCode
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondStored($message = '', $location = null, $internalCode = 'stored', $statusCode = 201)
    {
        return $this->setStatusCode($statusCode)->respond([
            'code'    => $internalCode,
            'message' => $message,
            'location' => $location
        ]);
    }

    /**
     *  @SWG\Definition(
     *         definition="Errors",
     *         required={"code", "message", "errors"},
     *         @SWG\Property(
     *             property="code",
     *             type="string"
     *         ),
     *         @SWG\Property(
     *             property="message",
     *             type="string"
     *         ),
     *         @SWG\Property(
     *             property="errors",
     *             type="array",
     *             uniqueItems=true,
     *             @SWG\Items(ref="#/definitions/ErrorItem")
     *         )
     *     )
     *
     *  @SWG\Definition(
     *         definition="ErrorItem",
     *         @SWG\Property(
     *             property="PARAM_NAME",
     *             type="array",
     *             @SWG\Items(type="string"),
     *         )
     *     )
     */

    /**
     * @param array $errors
     * @param string $message
     * @param string $internalCode
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public function respondWithErrors($errors = [], $message = 'Validation error', $internalCode = 'error', $statusCode = 422)
    {
        return $this->setStatusCode($statusCode)->respond([
            'code'    => $internalCode,
            'message' => $message,
            'errors' => $errors
        ]);
    }

    public function respondWithFile($file, $mime, $noCache = false)
    {
        $headers = ['Content-Type' => $mime];

        if($noCache)
        {
            $headers = array_merge($headers, ['Cache-Control' => 'no-cache']);
        }

        return response($file, 200, $headers);
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
