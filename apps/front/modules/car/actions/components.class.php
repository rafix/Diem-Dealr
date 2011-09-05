<?php
/**
 * Car components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class carComponents extends myFrontModuleComponents
{

  public function executeList(dmWebRequest $request)
  {
    $query = $this->getListQuery();
    
    $this->carPager = $this->getPager($query);
  }

  public function executeShow(dmWebRequest $request)
  {
    $query = $this->getShowQuery();
    
    $this->car = $this->getRecord($query);
  }

  public function executeForm(dmWebRequest $request)
  {
    $this->form = $this->forms['Car'];
  }


}
