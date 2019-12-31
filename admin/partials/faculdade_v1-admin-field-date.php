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
  ?>


              <label for="<?php echo esc_attr( $atts['id'] ); ?>"><?php esc_html_e( $atts['label'], 'faculdade_v1' ); ?>: </label>

              <?php } ?>

            <input class="<?php echo esc_attr( $atts['class'] ); ?>" id="<?php echo esc_attr( $atts['id'] ); ?>"
              name="<?php echo esc_attr( $atts['name'] ); ?>" type="<?php echo esc_attr( $atts['type'] ); ?>"
              value="<?php echo esc_attr( $atts['value'] ); ?>" />

            <?php
            if ( ! empty( $atts['description'] ) ) {
              ?><span class="description"><?php esc_html_e( $atts['description'], 'faculdade_v1' ); ?></span>
            <?php
            } ?>

