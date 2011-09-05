<?php // Vars: $modelPager

echo $modelPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($modelPager as $model)
{
  echo _open('li.element');

    echo $model;

  echo _close('li');
}

echo _close('ul');

echo $modelPager->renderNavigationBottom();