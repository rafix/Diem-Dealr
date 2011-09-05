<?php // Vars: $trimsPager

echo $trimsPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($trimsPager as $trims)
{
  echo _open('li.element');

    echo $trims;

  echo _close('li');
}

echo _close('ul');

echo $trimsPager->renderNavigationBottom();