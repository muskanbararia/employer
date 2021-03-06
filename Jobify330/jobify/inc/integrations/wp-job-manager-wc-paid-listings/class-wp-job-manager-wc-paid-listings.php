<?php
/**
 * WP Job Manager - WC Paid Listings
 */
class Jobify_WP_Job_Manager_WCPL extends Jobify_Integration {

    public function __construct() {
        $this->includes = array();

        parent::__construct( dirname( __FILE__) );
    }

    public function setup_actions() {
        add_action( 'widgets_init', array( $this, 'widgets_init' ), 20 );
		
		add_filter( 'woocommerce_product_add_to_cart_url', array( $this, 'add_to_cart_url' ), 10, 2 );
		add_action( 'wp_footer', array( $this, 'package_selection' ) );
    }

    /**
     * Registers widgets, and widget areas for WooCommerce
     *
     * @since 1.7.0
     * @return void
     */
    public function widgets_init() {
		if ( ! jobify()->get( 'woocommerce' ) ) {
			return;
		}

        require_once( $this->get_dir() . 'widgets/class-widget-price-table.php' );

        register_widget( 'Jobify_Widget_Price_Table_WC' );
    }
	
	/**
	 * Modify the Add to Cart URL for job and resume package to the submission page.
	 *
	 * @since 3.2.0
	 * @return $url The URL to the submission page, or the normal Add to Cart URL
	 */
	public function add_to_cart_url( $url, $product ) {
		if ( ! in_array( $product->product_type, array( 'resume_package', 'job_package', 'job_package_subscription', 'resume_package_subscription' ) ) ) {
			return $url;
		}

		$submit = false;

		if ( in_array( $product->product_type, array( 'job_package', 'job_package_subscription' ) ) ) {
			$submit = job_manager_get_permalink( 'submit_job_form' );
		} elseif ( in_array( $product->product_type, array( 'resume_package', 'resume_package_subscription' ) ) ) {
			$submit = resume_manager_get_permalink( 'submit_resume_form' );
		}

		if ( '' != $submit ) {
			$url = add_query_arg( 'selected_package', $product->id, $submit );
		}

		return esc_url( $url );
	}

	/**
	 * Add the selected package to the submission form so it is carried over when submitting
	 * a listing. JS picks up this value and checks the proper radio and submits the form.
	 *
	 *
	 * @since 3.2.0
	 * @return void;
	 */
	public function package_selection() {
		if ( ! isset( $_GET[ 'selected_package' ] ) ) {
			return;
		}

		$package = absint( $_GET[ 'selected_package' ] );

		echo '<input type="hidden" id="jobify_selected_package" value="' . $package . '" />';
	}

}
