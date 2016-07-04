<?php

namespace JiraRestApi\User;

/**
 * Description of User
 *
 * @author Anik
 */
class User implements \JsonSerializable {

    public $self;
    public $key;
    public $name;
    public $emailAddress;
    public $avatarUrls;
    public $displayName;
    public $active;
    public $timeZone;
    public $groups;
    public $applicationRoles;
    public $expand;

    public function jsonSerialize() {
        return array_filter(get_object_vars($this));
    }

}
