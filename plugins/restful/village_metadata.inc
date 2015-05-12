<?php

$plugin = array(
  'label' => t('Bastide Village Metadata'),
  'resource' => 'village_metadata',
  'name' => 'village_metadata',
  'entity_type' => 'node',
  'bundle' => 'village_metadata',
  'description' => t('Export the Bastide Village Metadata content type.'),
  'class' => 'RestfulVillageMetadataResource',
);
