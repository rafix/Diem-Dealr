<?php // Vars: $carPager

echo $carPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($carPager as $car)
{
  echo _open('li.element');

    echo $car;

  echo _close('li');
}

echo _close('ul');

echo $carPager->renderNavigationBottom();