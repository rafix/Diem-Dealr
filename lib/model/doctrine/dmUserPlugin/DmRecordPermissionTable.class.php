<?php

/**
 * DmRecordPermissionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmRecordPermissionTable extends PluginDmRecordPermissionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmRecordPermissionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmRecordPermission');
    }
}