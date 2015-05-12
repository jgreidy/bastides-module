<?php

class RestfulImageMetadataResource extends RestfulEntityBaseNode {

  /**
   * Overrides RestfulEntityBaseNode::publicFieldsInfo().
   */
  public function publicFieldsInfo() {
    $public_fields = parent::publicFieldsInfo();

    $public_fields['ssid'] = array(
      'property' => 'field_ssid',
    );

    $public_fields['founder'] = array(
      'property' => 'field_founder',
    );

    $public_fields['senechal'] = array(
      'property' => 'field_senechal',
    );

    $public_fields['year'] = array(
      'property' => 'field_photo_year',
    );

    $public_fields['date_founded'] = array(
      'property' => 'field_date_founded',
    );

    $public_fields['description'] = array(
      'property' => 'field_image_view',
    );

    $public_fields['village'] = array(
      'property' => 'field_village',
    );

    $public_fields['notes'] = array(
      'property' => 'field_notes',
    );

    $public_fields['market_square'] = array(
      'property' => 'field_market_square_details',
    );

    $public_fields['site_plan'] = array(
      'property' => 'field_plan_and_site_details',
    );

    $public_fields['location'] = array(
      'property' => 'field_media_location',
      'sub_property' => 'geom',
    );

    $public_fields['view_angle'] = array(
      'property' => 'field_view_angle',
    );

    $public_fields['thumbnail'] = array(
      'property' => 'field_photograph',
      'callback' => 'static::thumbnail',
    );

    return $public_fields;
  }

  public static function thumbnail($wrapper) {
    $photo_path = $wrapper->field_photograph->value();
    if (!empty($photo_path['uri'])) {
      $path = image_style_url('thumbnail', $photo_path['uri']);
    }
    else {
      $path = NULL;
    }
    return $path;
  }
}
