<?php

/**
 * DmRedirectTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmRedirectTable extends PluginDmRedirectTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmRedirectTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmRedirect');
    }
}