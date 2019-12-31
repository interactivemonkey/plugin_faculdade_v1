<?php
/**
 * Provides the markup for any text field
 *
 * @link       http://slushman.com
 * @since      1.0.0
 *
 * @package    Faculdade_v1
 * @subpackage Faculdade_v1/admin/partials
 */


if ( ! empty( $atts['label'] ) ) {
  ?><label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'employees' ); ?>: </label><?php
}
?>
<select aria-label="<?php esc_attr( _e( $atts['aria'], 'faculdade_v1' ) ); ?>"
  class="<?php echo esc_attr( $atts['class'] ); ?>" id="<?php echo esc_attr( $atts['id'] ); ?>"
  name="<?php echo esc_attr( $atts['name'] ); ?>">

  <?php
if ( ! empty( $atts['blank'] ) ) {
  ?>

 <option value><?php esc_html_e( $atts['blank'], 'faculdade_v1' ); ?></option><?php
}
foreach ( $atts['selections'] as $selection ) {
  if ( is_array( $selection ) ) {
    $label = $selection['label'];
    $value = $selection['value'];
  } else {
    $label = strtolower( $selection );
    $value = strtolower( $selection );
  }
  ?>
  <option
    value="<?php echo esc_attr( $value ); ?>" <?php
    selected( $atts['value'], $value ); ?>><?php
    esc_html_e( $label, 'faculdade_v1' );
  ?>
  </option>
  <?php
} // foreach
?>
</select>

<span class="description"><?php esc_html_e( $atts['description'], 'faculdade_v1' ); ?></span>