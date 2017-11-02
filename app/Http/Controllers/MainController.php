<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotifyFormRequest;
use App\Http\Requests\NotifyFullFormRequest;
use App\Http\Requests\NotifyQueueFormRequest;
use App\Library\JsonResponseTrait;
use App\Services\IntercomService;
use Carbon\Carbon;

class MainController extends Controller
{
    use JsonResponseTrait;

    public function mainPage()
    {
        $icoDate = Carbon::createFromDate('2017', 11, 14);
        $days    = $icoDate->diffInDays(Carbon::now());

        $title = __('Tokenbox — Uniting Crypto');

        $desctiption = __('ᐅᐅᐅ Tokenbox is a №❶ ecosystem for crypto-investors, traders and funds. ᐅᐅᐅ TGE starts in ');
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

    public function quizResult($level)
    {
        $results = [
            'crypto-spaceman' => [
                'title' => '10/10 Crypto Spaceman',
                'image' => '10'
            ],
            
            'crypto-rockstar' => [
                'title' => '9/10 Crypto Rockstar',
                'image' => '9'
            ],

            'crypto-bull' => [
                'title' => '8/10 Crypto Bull',
                'image' => '8'
            ],

            'crypto-mayor' => [
                'title' => '7/10 Crypto Mayor',
                'image' => '7'
            ],

            'crypto-geek' => [
                'title' => '6/10 Crypto Geek',
                'image' => '6'
            ],
            
            'halfway-crypto-champion' => [
                'title' => '5/10 Halfway Crypto Champion',
                'image' => '5'
            ],

            'shy-hamster' => [
                'title' => '4/10 Shy Hamster',
                'image' => '4'
            ],

            'crypto-dumper' => [
                'title' => '3/10 Crypto Dumper',
                'image' => '3'
            ],

            'sad-crypto-hamster' => [
                'title' => '2/10 Sad Crypto Hamster',
                'image' => '2'
            ],

            'crypto-dumster' => [
                'title' => '1/10 Crypto Dumster',
                'image' => '1'
            ],

            'angry-hamster' => [
                'title' => '0/10 Angry Hamster',
                'image' => '0'
            ]
        ];

        $title = $results[$level]['title'];
        $desc = 'What kind of crypto trader are you? Test yourself!';
        $image = 'https://tokenbox.io/assets/front/img/hamsters/' . $results[$level]['image'] . '.png';

        $this->seo()
            ->setTitle($title)
            ->setDescription($desc);
        
        $this->seo()->openGraph()
            ->setTitle($title)
            ->setDescription($desc)
            ->setImage($image);
            
        return view('quizResult');
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

            $user = $intercomService->leadCreate($email, [
                'tag' => 'ICO Notification'//1301786
            ]);

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

            $user = $intercomService->leadCreate($email, [
                'name'    => $name,
                'company' => $company,
                'tag'     => 'Partnership Request',//1294274
            ]);

            return $this->respondWithSuccess($user, 'Email added successfull');

        } catch (\Exception $exception) {
            return $this->respondWithError($exception->getMessage());
        }
    }

    public function addQueueUser(NotifyQueueFormRequest $request, IntercomService $intercomService)
    {
        try {
            $email  = $request->input('EMAIL');
            $name   = $request->input('NAME');
            $phone  = $request->input('PHONE');
            $amount = $request->input('AMOUNT');

            $user = $intercomService->leadCreate($email, [
                'name'   => $name,
                'phone'  => $phone,
                'amount' => $amount,
                'tag'    => 'Private Pre-Sale Queue',//1294270
            ]);

            return $this->respondWithSuccess($user, 'Email added successfull');

        } catch (\Exception $exception) {
            return $this->respondWithError($exception->getMessage());
        }
    }

}