<?php

/**
 * CategoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CategoryTable extends myDoctrineTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object CategoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Category');
    }
}