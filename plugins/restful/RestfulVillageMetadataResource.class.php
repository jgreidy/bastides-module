<?php

class RestfulVillageMetadataResource extends RestfulEntityBaseNode {

  /**
   * Overrides RestfulEntityBaseNode::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['founder'] = array(
      'property' => 'field_village_founder',
    );

    $public_fields['senechal'] = array(
      'property' => 'field_village_senechal',
    );

    $public_fields['date_founded'] = array(
      'property' => 'field_village_founded',
    );

    $public_fields['name'] = array(
      'property' => 'field_village_name',
    );

    $public_fields['notes'] = array(
      'property' => 'field_village_notes',
    );

    $public_fields['market_square'] = array(
      'property' => 'field_village_market_square',
    );

    $public_fields['site_plan'] = array(
      'property' => 'field_village_plan_and_site',
    );

    $public_fields['special_features'] = array(
      'property' => 'field_village_special_features',
    );

    $public_fields['location'] = array(
      'property' => 'field_village_location',
      'sub_property' => 'geom',
    );

    return $public_fields;
  }
}
