<?php
/**
 * Trims components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class trimsComponents extends myFrontModuleComponents
{

  public function executeList(dmWebRequest $request)
  {
    $query = $this->getListQuery();
    
    $this->trimsPager = $this->getPager($query);
  }

  public function executeShow(dmWebRequest $request)
  {
    $query = $this->getShowQuery();
    
    $this->trims = $this->getRecord($query);
  }

  public function executeForm(dmWebRequest $request)
  {
    $this->form = $this->forms['Trims'];
  }


}
