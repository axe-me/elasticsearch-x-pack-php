<?php


namespace XPack\Watcher\Endpoints;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Stats
 *
 * @category Watcher
 * @package  XPack\Watcher\Endpoints
 * @author   Zachary Tong <zach@elastic.co>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 */

class Stats extends AbstractEndpoint
{


    /**
     * @throws \Elasticsearch\Common\Exceptions\RuntimeException
     * @return string
     */
    public function getURI()
    {
        return "/_watcher/stats";
    }


    /**
     * @return string[]
     */
    public function getParamWhitelist()
    {
        return array();
    }


    /**
     * @return string
     */
    public function getMethod()
    {
        return "GET";
    }
}