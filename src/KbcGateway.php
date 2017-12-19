<?php

/**
 * Title: WooCommerce KBC/CBC Payment Button gateway
 * Description:
 * Copyright: Copyright (c) 2005 - 2017
 * Company: Pronamic
 *
 * @author Remco Tolsma
 * @version 1.2.3
 * @since 1.0.0
 */
class Pronamic_WP_Pay_Extensions_WooCommerce_KbcGateway extends Pronamic_WP_Pay_Extensions_WooCommerce_Gateway {
	/**
	 * The unique ID of this payment gateway
	 *
	 * @var string
	 */
	const ID = 'pronamic_pay_kbc';

	//////////////////////////////////////////////////

	/**
	 * Constructs and initialize an KBC/CBC Payment Button gateway.
	 */
	public function __construct() {
		$this->id             = self::ID;
		$this->method_title   = __( 'KBC/CBC Payment Button', 'pronamic_ideal' );
		$this->payment_method = Pronamic_WP_Pay_PaymentMethods::KBC;

		// @see https://github.com/woothemes/woocommerce/blob/v1.6.6/classes/gateways/class-wc-payment-gateway.php#L24
		$this->has_fields = false;

		parent::__construct();
	}
}
