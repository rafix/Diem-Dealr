<?php

/**
 * car admin form
 *
 * @package    diem-dealr
 * @subpackage car
 * @author     Your name here
 */
class CarAdminForm extends BaseCarForm
{
  public function configure()
  {
    parent::configure();
    
    $this->widgetSchema['make_id'] = new sfWidgetFormDoctrineDependentSelect(array(
        'model' => 'Make',
        'add_empty' => 'Select one Make',
        'ajax'      => true,
        'cache' => true,
    ));
    
    $this->widgetSchema['model_id'] = new sfWidgetFormDoctrineDependentSelect(array(
        'model' => 'Model',
        'depends' => 'Make',
        'add_empty' => 'Select one Model',
        'ajax'      => true,
        'cache' => true,
    ));
    
    $this->widgetSchema['trim_id'] = new sfWidgetFormDoctrineDependentSelect(array(
        'model' => 'Trim',
        'depends' => 'Model',
        'add_empty' => 'Select one Trim',
        'ajax'      => true,
        'cache' => true,
    ));
    
    $this->widgetSchema->moveField('model_id', 'after', 'make_id');
    $this->widgetSchema->moveField('trim_id', 'after', 'model_id');
    
    $this->validatorSchema['make_id'] = new sfValidatorDoctrineChoice(array(
        'model' => 'Make',
    ));
    
    $this->validatorSchema['model_id'] = new sfValidatorDoctrineChoice(array(
        'model' => 'Model',
    ));
    
    $this->validatorSchema['trim_id'] = new sfValidatorDoctrineChoice(array(
        'model' => 'Trim',
    ));
  }
}