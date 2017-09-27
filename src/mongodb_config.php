<?php
/**
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 6/30/17, Time: 7:52 PM
 */

namespace ukorJidechi\mongoDBConnector;


class mongodb_config extends abstract_mongodb_config
{
    /**
     * @return \MongoDB\Client
     */
    function db_connect()
    {
        return $this->database_connection();
    }
}