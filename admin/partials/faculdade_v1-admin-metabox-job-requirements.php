<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       interactivemoney.com.br
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin/partials
 */


wp_nonce_field( $this->plugin_name, 'job_requirements_nonce' );

$atts                   = array();
$atts['description']    = '';
$atts['id']             = 'job-requirements-skills';
$atts['label']          = 'Skills/Qualifications';
$atts['settings']['textarea_name'] = 'job-requirements-skills';
$atts['value']          = '';
if ( ! empty( $this->meta[$atts['id']][0] ) ) {
    $atts['value'] = $this->meta[$atts['id']][0];
}

apply_filters( $this->plugin_name . '-field-job-requirements-skills', $atts );
?>

<p><?php
include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-editor.php' );
?></p>

<?php
$atts                   = array();
$atts['description']    = '';
$atts['id']             = 'job-requirements-education';
$atts['label']          = 'Education';
$atts['settings']['textarea_name'] = 'job-requirements-education';
$atts['value']          = '';
if ( ! empty( $this->meta[$atts['id']][0] ) ) {
    $atts['value'] = $this->meta[$atts['id']][0];
}
apply_filters( $this->plugin_name . '-field-job-requirements-education', $atts );
?>
<p><?php
include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-editor.php' );
?></p>

<?php
$atts                   = array();
$atts['description']    = '';
$atts['id']             = 'job-requirements-experience';
$atts['label']          = 'Experience';
$atts['settings']['textarea_name'] = 'job-requirements-experience';
$atts['value']          = '';
if ( ! empty( $this->meta[$atts['id']][0] ) ) {
    $atts['value'] = $this->meta[$atts['id']][0];
}
apply_filters( $this->plugin_name . '-field-job-requirements-experience', $atts );
?><p><?php
include( plugin_dir_path( __FILE__ ) . $this->plugin_name . '-admin-field-editor.php' );
?></p>