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

    $public_fields['year'] = array(
      'property' => 'field_photo_year',
    );

    $public_fields['description'] = array(
      'property' => 'field_image_view',
    );

    $public_fields['village'] = array(
      'property' => 'field_village',
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

    $public_fields['image'] = array(
      'property' => 'field_photograph',
      'process_callbacks' => array(
        array($this, 'imageProcess'),
        ),
      // this will add 3 image variants in the output
      'image_styles' => array('thumbnail', 'medium', 'large'),
      );

    $public_fields['village_info'] = array(
      'property' => 'field_village_reference',
      'resource' => array(
        // the bundle of the entitiy
        'village_metadata' => array(
          // the nameof the resource to map to
          'name' => 'village_metadata',
          // determines if the entire resource should appear, or only the ID
          'full_view' => TRUE,
          ),
        ),
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
