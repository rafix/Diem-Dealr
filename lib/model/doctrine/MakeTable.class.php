<?php

/**
 * MakeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MakeTable extends myDoctrineTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MakeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Make');
    }
}