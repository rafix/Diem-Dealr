<?php

/**
 * DmLockTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmLockTable extends PluginDmLockTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmLockTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmLock');
    }
}