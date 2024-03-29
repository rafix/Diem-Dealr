<?php
/**
 * Make actions
 */
class makeActions extends myFrontModuleActions
{

  public function executeFormWidget(dmWebRequest $request)
  {
    $form = new MakeForm();
        
    if ($request->hasParameter($form->getName()) && $form->bindAndValid($request))
    {
      $form->save();
      $this->redirectBack();
    }
    
    $this->forms['Make'] = $form;
  }


}
