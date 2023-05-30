<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<td class="hp-order__number">
	<a href="<?php echo esc_url(hivepress()->router->get_url('order_edit_page', ['order_id' => $order->get_id()])); ?>" class="hp-link">
		<i class="hp-icon fas fa-edit"></i>
		<span>#<?php echo esc_html($order->get_id()); ?></span>
	</a>
</td>

<td class="hp-order__number" style="padding: 0;" >
	<a href="<?php echo admin_url('admin-ajax.php?action=generate_invoice&order_id=' . $order->get_id()); ?>" class="button hp-link">
		<i class="hp-icon fas fa-file"></i>
		<span>Download Invoice</span>
	</a>
</td>