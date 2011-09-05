<?php // Vars: $makePager

echo $makePager->renderNavigationTop();

echo _open('ul.elements');

foreach ($makePager as $make)
{
  echo _open('li.element');

    echo $make;

  echo _close('li');
}

echo _close('ul');

echo $makePager->renderNavigationBottom();