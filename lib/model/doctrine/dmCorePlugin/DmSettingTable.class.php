<?php

/**
 * DmSettingTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmSettingTable extends PluginDmSettingTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmSettingTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmSetting');
    }
}