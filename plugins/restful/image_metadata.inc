<?php

$plugin = array(
  'label' => t('Bastide Image Metadata'),
  'resource' => 'image_metadata',
  'name' => 'image_metadata',
  'entity_type' => 'node',
  'bundle' => 'image_metadata',
  'description' => t('Export the Bastide Image Metadata content type.'),
  'class' => 'RestfulCustomResource',
);
