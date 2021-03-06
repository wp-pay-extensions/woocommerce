<?php

namespace Pronamic\WordPress\Pay\Extensions\WooCommerce;

use WC_Subscriptions_Cart;

/**
 * Title: WooCommerce Direct Debit mandate via iDEAL gateway
 * Description:
 * Copyright: 2005-2021 Pronamic
 * Company: Pronamic
 *
 * @author  Reüel van der Steege
 * @version 2.0.6
 * @since   1.2.1
 */
class DirectDebitIDealGateway extends Gateway {
	/**
	 * Constructs and initialize an Direct Debit (mandate via iDEAL) gateway
	 *
	 * @param array<string, string> $args Arguments.
	 */
	public function __construct( $args = array() ) {
		parent::__construct( $args );

		// @since unreleased
		$this->supports = \array_merge(
			array(
				'subscriptions',
				'subscription_amount_changes',
				'subscription_cancellation',
				'subscription_date_changes',
				'subscription_payment_method_change_customer',
				'subscription_reactivation',
				'subscription_suspension',
			),
			$this->supports
		);

		// Handle subscription payments.
		add_action( 'woocommerce_scheduled_subscription_payment_' . $this->id, array( $this, 'process_subscription_payment' ), 10, 2 );
	}
}
