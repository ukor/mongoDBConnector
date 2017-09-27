<?php
/**
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com >>.
 * Date: 6/30/17, Time: 7:54 PM
 */

namespace ukorJidechi\mongoDBConnector;


abstract class abstract_mongodb_config implements interface_config
{
    private $config = null;

    private $client = null;

    public $query = null;

    public $cursor = null;

    public $result = null;

    public $result_set = array();

    /**
     * @return array|null
     */
    function _configuration()
    {
        $this->config = [
            [
                [
                    /**
                     * To connect to stand alone replace the connection URL with "mongodb://127.0.0.1:27017"
                     */
                    'connection_url' => 'mongodb://127.0.0.1:30010, 127.0.0.1:30020, 127.0.0.1:30030',
                    //Leave empty
                    'database_name' => '',
                    'collection_name' => ''
                ],
                [
                    /** change according to your database set up */
                    'username'=>'USERNAME',
                    'password' => 'YOUR PASSWORD',
                    'authSource' =>'AUTHENTICATION SOURCE'
                ]
            ]
        ];
        return $this->config;
    }

    /**
     * @return \MongoDB\Client
     */
    function database_connection()
    {
        return $this->client = new \MongoDB\Client($this->_configuration()[0][0]['connection_url'], $this->_configuration()[0][1]);
    }
}