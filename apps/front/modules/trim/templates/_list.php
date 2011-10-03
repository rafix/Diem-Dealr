<?php // Vars: $trimPager

echo $trimPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($trimPager as $trim)
{
  echo _open('li.element');

    echo _link($trim);

  echo _close('li');
}

echo _close('ul');

echo $trimPager->renderNavigationBottom();