<?php
/**
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 6/30/17, Time: 7:49 PM
 */

namespace ukorJidechi\mongoDBConnector;


interface interface_config
{
    /**
     * @return array|null
     */
    function _configuration();

    /**
     * @return \MongoDB\Client
     */
    function database_connection();
}