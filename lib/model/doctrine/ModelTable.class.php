<?php

/**
 * ModelTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ModelTable extends myDoctrineTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object ModelTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Model');
    }
}