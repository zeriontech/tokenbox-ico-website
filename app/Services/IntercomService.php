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
     * @param       $email
     * @param array $parameters
     *
     * @return mixed
     */
    public function userCreate($email, array $parameters)
    {
        $options = $this->prepareOptions($email, $parameters);

        return $this->client->users->create($options);
    }

    /**
     * @param       $email
     * @param array $parameters
     *
     * @return mixed
     */
    public function leadCreate($email, array $parameters)
    {
        $options = $this->prepareOptions($email, $parameters);

        return $this->client->leads->create($options);
    }

    protected function prepareOptions($email, $parameters)
    {
        $customAttributes = [
            'company' => array_get($parameters, 'company'),
            'amount'  => array_get($parameters, 'amount'),
            'tags'    => array_get($parameters, 'tag'),
        ];

        return array_filter([
            'email'             => $email,
            'name'              => array_get($parameters, 'name'),
            'phone'             => array_get($parameters, 'phone'),
//            'tags'              => array_get($parameters, 'tag'),
            'custom_attributes' => array_filter($customAttributes),
        ]);
    }

}