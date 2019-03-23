<?php
/**
 * Created by PhpStorm.
 * User: Arafeh
 * Date: 3/23/2019
 * Time: 4:52 AM
 */

namespace app\components\rbac;


interface RbacInterface
{
    /**
     * @return int|string
     */
    function getType();
}