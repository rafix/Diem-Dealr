<?php

/**
 * DmLayoutTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmLayoutTable extends PluginDmLayoutTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmLayoutTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmLayout');
    }
}