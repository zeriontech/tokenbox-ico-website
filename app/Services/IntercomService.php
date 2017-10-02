<?php

namespace App\Services;

use Intercom\IntercomClient;

class IntercomService
{
    protected $client;

    /**
     * IntercomService constructor.
     */
    public function __construct()
    {
        $this->client = new IntercomClient(config('intercom.access_token'), null);
    }

    /**
     * @param      $email
     * @param null $name
     * @param null $company
     *
     * @return mixed
     */
    public function create($email, $name = null, $company = null)
    {
        if (is_null($name) && is_null($company)) {
            $options = ['email' => $email];
        } else {
            $options = [
                'email'             => $email,
                'name'              => $name,
                'custom_attributes' => ['company' => $company]];
        }

        return $this->client->users->create($options);
    }

}