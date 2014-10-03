<?php

namespace Wesnick\Infusionsoft\Service;


use fXmlRpc\Proxy;
use Wesnick\Infusionsoft\Proxy as ProxyClass;

class DataService extends Proxy
{

    public function queryUsers($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {
        if (empty($fields)) {
            $fields = ProxyClass\User::getInfusionsoftFields();
        }

        return $this->__call('query', array('User', $records, $page, $query, $fields));
    }

    public function queryUserGroup($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {
        if (empty($fields)) {
            $fields = ProxyClass\UserGroup::getInfusionsoftFields();
        }

        return $this->__call('query', array('UserGroup', $records, $page, $query, $fields));
    }

    public function queryLeadSource($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\LeadSource::getInfusionsoftFields();
        }

        return $this->__call('query', array('LeadSource', $records, $page, $query, $fields));
    }

    public function queryGroupCategory($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {
        if (empty($fields)) {
            $fields = ProxyClass\ContactGroupCategory::getInfusionsoftFields();
        }

        return $this->__call('query', array('ContactGroupCategory', $records, $page, $query, $fields));
    }

    public function queryLeadSourceCategory($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\LeadSourceCategory::getInfusionsoftFields();
        }

        return $this->__call('query', array('LeadSourceCategory', $records, $page, $query, $fields));

    }

    public function queryGroup($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\ContactGroup::getInfusionsoftFields();
        }

        return $this->__call('query', array('ContactGroup', $records, $page, $query, $fields));

    }

    public function queryContactAction($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\ContactAction::getInfusionsoftFields();
        }

        return $this->__call('query', array('ContactAction', $records, $page, $query, $fields));

    }

    public function queryContactGroupAssign($records = 100, $page = 0, $query = array('GroupId' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\ContactGroupAssign::getInfusionsoftFields();
        }

        return $this->__call('query', array('ContactGroupAssign', $records, $page, $query, $fields));
    }

    public function queryStage($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\Stage::getInfusionsoftFields();
        }

        return $this->__call('query', array('Stage', $records, $page, $query, $fields));
    }

    public function queryStageMove($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array())
    {

        if (empty($fields)) {
            $fields = ProxyClass\StageMove::getInfusionsoftFields();
        }

        return $this->__call('query', array('StageMove', $records, $page, $query, $fields));
    }

    public function queryLead($records = 100, $page = 0, $query = array('Id' => '%'), $fields = array(), $sortBy = 'Id', $ascending = false)
    {
        if (empty($fields)) {
            $fields = ProxyClass\Lead::getInfusionsoftFields();
        }

        return $this->__call('query', array('Lead', $records, $page, $query, $fields, $sortBy, $ascending));
    }
} 
