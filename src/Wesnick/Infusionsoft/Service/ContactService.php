<?php

namespace Wesnick\Infusionsoft\Service;


use fXmlRpc\Proxy;
use Wesnick\Infusionsoft\Proxy as ProxyClass;

class ContactService extends Proxy
{


    public function add(ProxyClass\Contact $contact)
    {
        $result = $this->__call('add', array($contact->toInfusionsoftArray()));
        $contact->Id = $result;
        return $result;
    }


    public function load($contactId, $selectedFields = array())
    {
        $result = $this->__call('load', array($contactId, $selectedFields));
        return $result;
    }


    /**
     * Finds all contacts with the given email address. This searches the Email, Email 2, and Email 3 fields
     *
     * @param string $email
     * @param array $fields
     *
     * @return array
     */
    public function findByEmail($email, $fields = array())
    {
        return $this->__call('findByEmail', array($email, $fields));
    }


} 
