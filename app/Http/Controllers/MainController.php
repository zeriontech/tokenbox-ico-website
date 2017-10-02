<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyFormRequest;
use App\Http\Requests\NotifyFullFormRequest;
use App\Library\JsonResponseTrait;
use App\Services\IntercomService;

class MainController extends Controller
{
    use JsonResponseTrait;

    const ICO_START_DAY = 24;

    public function mainPage()
    {
        $days = self::ICO_START_DAY - date('d');

        $title = __('Tokenbox — Unique ecosystem for crypto investors, traders and funds');

        $desctiption = __('ᐅᐅᐅ Tokenbox is an №❶ ecosystem for crypto-investors, traders and funds. ᐅᐅᐅ ICO starts in ');
        $desctiption .= $days > 0 ? $days : '';
        $desctiption .= ($days == 1) ? __(' day!') : (($days == 0) ? __(' now!') : __(' days!'));

        $this->seo()
            ->setTitle($title)
            ->setDescription($desctiption);

        return view('welcome');
    }

    public function icoPage()
    {
        return view('ico');
    }

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