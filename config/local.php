<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerDoctrine
 */

/**
 * @return array
 */
return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'params' => [
                    'host' => '%host%',
                    'port' => '%port%',
                    'user' => '%user%',
                    'password' => '%password%',
                    'dbname' => '%dbname%',
                ],
            ],
        ],
    ],
];
