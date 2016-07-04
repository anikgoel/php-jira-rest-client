<?php

namespace JiraRestApi\User;

/**
 * Description of UserService
 *
 * @author Anik
 */
class UserService extends \JiraRestApi\JiraClient {

    private $uri = '/user';

    /**
     * Function to get user
     * @param type $paramArray
     * @return type
     */
    public function get($paramArray = []) {
        $queryParam = '?' . http_build_query($paramArray);

        $ret = $this->exec($this->uri . $queryParam, null);

        $this->log->addInfo("Result=\n" . $ret);

        return $issue = $this->json_mapper->map(
                json_decode($ret), new User()
        );
    }

}
