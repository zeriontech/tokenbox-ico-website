<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyFormRequest;
use App\Http\Requests\NotifyFullFormRequest;
use App\Library\JsonResponseTrait;
use App\Services\IntercomService;

class MainController extends Controller
{
    use JsonResponseTrait;

    /**
     * @param NotifyFormRequest $request
     * @param IntercomService   $intercomService
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addUser(NotifyFormRequest $request, IntercomService $intercomService)
    {
        try {
            $email = $request->input('EMAIL');

            $user = $intercomService->create($email);

            return $this->respondWithSuccess($user, 'Email added successfull');

        } catch (\Exception $exception) {
            return $this->respondWithError($exception->getMessage());
        }
    }

    /**
     * @param NotifyFullFormRequest $request
     * @param IntercomService       $intercomService
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function addFullUser(NotifyFullFormRequest $request, IntercomService $intercomService)
    {
        try {
            $email   = $request->input('EMAIL');
            $name    = $request->input('NAME');
            $company = $request->input('COMPANY');

            $user = $intercomService->create($email, $name, $company);

            return $this->respondWithSuccess($user, 'Email added successfull');

        } catch (\Exception $exception) {
            return $this->respondWithError($exception->getMessage());
        }
    }

}