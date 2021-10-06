<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "taxonomies".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'taxonomies', 'taxonomies_settings_field' );
}

/**
 * Function Name:taxonomies_settings_field Function to handle new input type "taxonomies".
 *
 * @param  string $name     settings provided when using the input type "taxonomies".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function taxonomies_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$type       = isset( $settings['type'] ) ? $settings['type'] : '';
	$class      = isset( $settings['class'] ) ? $settings['class'] : '';
	ob_start();
	?>
	<select name="<?php echo esc_attr( $input_name ); ?>" id="smile_<?php echo esc_attr( $input_name ); ?>" class="select2-taxonomies-dropdown form-control smile-input <?php echo esc_attr( 'smile-' . $type . ' ' . $input_name . ' ' . $type . ' ' . $class ); ?>" multiple="multiple" style="width:260px;"> 
		<?php
		$args = array(
			'public'   => true,
			'_builtin' => false,
		);

		$output     = 'objects'; // names or objects, note names is the default.
		$operator   = 'and';
		$taxonomies = get_taxonomies( $args, $output, $operator );

		foreach ( $taxonomies as $taxonomy ) {
			?>
			<optgroup label="<?php echo esc_attr( ucwords( $taxonomy->label ) ); ?>">
			<?php
			$terms = get_terms(
				$taxonomy->name,
				array(
					'orderby'    => 'count',
					'hide_empty' => 0,
				)
			);

			foreach ( $terms as $term ) {
				?>
				<?php
				$val_arr  = explode( ',', $value );
				$selected = ( in_array( $term->term_id, $val_arr ) ) ? 'selected="selected"' : '';
				?>
				<option <?php echo esc_attr( $selected ); ?> value="<?php echo esc_attr( $term->term_id ); ?>"><?php echo esc_attr( $term->name ); ?></option>
				<?php
			}
		}
		?>
	</optgroup>
</select>
<script type="text/javascript">
	jQuery('select.select2-taxonomies-dropdown').cpselect2({
		placeholder: "Select posts from - taxonomies",
	});
</script>
	<?php
	return ob_get_clean();
}
