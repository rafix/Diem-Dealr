<?php

/**
 * DmSentMailTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DmSentMailTable extends PluginDmSentMailTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object DmSentMailTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('DmSentMail');
    }
}