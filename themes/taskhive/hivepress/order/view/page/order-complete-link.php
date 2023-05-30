<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( get_option( 'hp_order_require_completion' ) && $order->get_status() === 'wc-processing' && get_current_user_id() === $order->get_buyer__id() ) :
	?>
	<a href="#order_complete_modal" class="hp-order__action hp-order__action--complete hp-link"><i class="hp-icon fas fa-check-circle"></i><span><?php esc_html_e( 'Complete', 'hivepress-marketplace' ); ?></span></a>
	<?php
endif;
?>
<a href="<?php echo admin_url('admin-ajax.php?action=generate_invoice&order_id=' . $order->get_id()); ?>" class="button hp-link">
		<i class="hp-icon fas fa-file"></i>
		<span>Download Invoice</span>
	</a>