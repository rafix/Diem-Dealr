<?php

/**
 * DmUserPermissionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmUserPermissionTable extends PluginDmUserPermissionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmUserPermissionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmUserPermission');
    }
}