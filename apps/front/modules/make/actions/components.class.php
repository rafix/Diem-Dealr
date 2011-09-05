<?php
/**
 * Make components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class makeComponents extends myFrontModuleComponents
{

  public function executeList(dmWebRequest $request)
  {
    $query = $this->getListQuery();
    
    $this->makePager = $this->getPager($query);
  }

  public function executeShow(dmWebRequest $request)
  {
    $query = $this->getShowQuery();
    
    $this->make = $this->getRecord($query);
  }

  public function executeForm(dmWebRequest $request)
  {
    $this->form = $this->forms['Make'];
  }


}
