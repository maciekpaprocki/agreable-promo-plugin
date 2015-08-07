<?php


if ( ! class_exists( 'ACF' ) ) {
  add_action( 'admin_notices', function() {
    echo '<div class="error"><p>ACF5 Pro is not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
  } );
  return;
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'promotion_data_capture',
  'title' => 'Promotion',
  'fields' => array (
    array (
      'key' => 'field_55c493302cb37',
      'label' => 'Data to capture with email',
      'name' => 'data_to_capture',
      'type' => 'checkbox',
      'instructions' => 'Check any additional data you\'d like to capture from the user',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'fullName' => 'Full Name',
        'address' => 'Address',
        'competition' => 'Competition answer',
      ),
      'default_value' => array (
        '' => '',
      ),
      'layout' => 'vertical',
    ),
    array (
      'key' => 'field_55c4938482e93',
      'label' => 'Competition Question',
      'name' => 'competition_question',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_55c493302cb37',
            'operator' => '==',
            'value' => 'competition',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => 'What is the new Burger King burger called?',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_55c4941b82e94',
      'label' => 'Competition Answers',
      'name' => 'competition_answers',
      'type' => 'repeater',
      'instructions' => 'Add your answers',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_55c493302cb37',
            'operator' => '==',
            'value' => 'competition',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => 1,
      'max' => 5,
      'layout' => 'table',
      'button_label' => 'Add Answer',
      'sub_fields' => array (
        array (
          'key' => 'field_55c4944382e95',
          'label' => 'Answer Text',
          'name' => 'answer_text',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_55c4944b82e96',
          'label' => 'Answer Correct',
          'name' => 'answer_correct',
          'type' => 'true_false',
          'instructions' => 'Tick one of these boxes to represent the correct answer',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
      ),
    ),
    array (
      'key' => 'field_55c494b1fbf43',
      'label' => 'Collect data for a 3rd party? (Client optins)',
      'name' => 'collect_optins',
      'type' => 'true_false',
      'instructions' => 'Users of this promotion will have opportunity to share their data with a third party',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_55c495f5638ae',
      'label' => 'Third Party Optins',
      'name' => 'third_party_optins',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => array (
        array (
          array (
            'field' => 'field_55c494b1fbf43',
            'operator' => '==',
            'value' => '1',
          ),
        ),
      ),
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => 1,
      'max' => 3,
      'layout' => 'row',
      'button_label' => 'Add Optin',
      'sub_fields' => array (
        array (
          'key' => 'field_55c49601638af',
          'label' => 'Optin Name',
          'name' => 'optin_name',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Burger King',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_55c49609638b0',
          'label' => 'Optin Label',
          'name' => 'optin_label',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => 'Would you like to receive updates from Burger King?',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
      ),
    ),
    array (
      'key' => 'field_55c4963f99e59',
      'label' => 'Terms and Conditions Label',
      'name' => 'terms_and_conditions_label',
      'type' => 'text',
      'instructions' => 'Override the terms and conditions label here',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 'I accept the terms and conditions',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_55c4966b99e5a',
      'label' => 'Terms and Conditions',
      'name' => 'terms_and_conditions',
      'type' => 'wysiwyg',
      'instructions' => 'Add any promotion specific terms and conditions here',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'all',
      'toolbar' => 'full',
      'media_upload' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'promo',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
));

endif;
