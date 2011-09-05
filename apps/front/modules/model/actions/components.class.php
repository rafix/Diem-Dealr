<?php
/**
 * Model components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class modelComponents extends myFrontModuleComponents
{

  public function executeList(dmWebRequest $request)
  {
    $query = $this->getListQuery();
    
    $this->modelPager = $this->getPager($query);
  }

  public function executeShow(dmWebRequest $request)
  {
    $query = $this->getShowQuery();
    
    $this->model = $this->getRecord($query);
  }

  public function executeForm(dmWebRequest $request)
  {
    $this->form = $this->forms['Model'];
  }


}
