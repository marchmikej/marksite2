<?php
/**
 * Single Listing Yelp
 *
 * @package WP Pro Real Estate 7
 * @subpackage Include
 */

global $ct_options;

$ct_enable_yelp_nearby = isset( $ct_options['ct_enable_yelp_nearby'] ) ? esc_html( $ct_options['ct_enable_yelp_nearby'] ) : '';

$ct_yelp_app_key = isset($ct_options['ct_yelp_app_key'] ) ? esc_html( $ct_options['ct_yelp_app_key'] ) : '';
$ct_yelp_app_secret_key = isset($ct_options['ct_yelp_app_secret_key'] ) ? $ct_options['ct_yelp_app_secret_key'] : '';

$ct_yelp_consumer_key = isset( $ct_options['ct_yelp_consumer_key'] ) ? esc_html( $ct_options['ct_yelp_consumer_key'] ) : '';
$ct_yelp_consumer_secret_key = isset( $ct_options['ct_yelp_consumer_secret_key'] ) ? esc_html( $ct_options['ct_yelp_consumer_secret_key'] ) : '';
$ct_yelp_token_key = isset( $ct_options['ct_yelp_token_key'] ) ? esc_html( $ct_options['ct_yelp_token_key'] ) : '';
$ct_yelp_token_secret_key = isset( $ct_options['ct_yelp_token_secret_key'] ) ? esc_html( $ct_options['ct_yelp_token_secret_key'] ) : '';

do_action('before_single_listing_yelp');
            
echo '<!-- Nearby -->';
if($ct_yelp_app_key != '' && $ct_yelp_app_secret_key != '' && class_exists('OAuthToken')) {

    $ct_yelp_amenities = isset( $ct_options['ct_yelp_amenities']['enabled'] ) ? $ct_options['ct_yelp_amenities']['enabled'] : '';

    echo '<div class="listing-nearby" id="listing-nearby">';
        echo '<div class="right yelp-powered-by"><small class="muted left">' . __('powered by ', 'contempo') . '</small><img class="right yelp-logo" src="' . get_template_directory_uri() . '/images/yelp-logo-small.png" srcset="' . ct_theme_directory_uri() . '/images/yelp-logo-small@2x.png 2x" height="25" width="50" /></div>';
        echo '<h4 class="border-bottom marB20">' . __('What\'s Nearby?', 'contempo') . '</h4>';
        
        $ct_listing_street_address = get_the_title();
        $ct_listing_city = strip_tags( get_the_term_list( $wp_query->post->ID, 'city', '', ', ', '' ) );
        $ct_listing_state = strip_tags( get_the_term_list( $wp_query->post->ID, 'state', '', ', ', '' ) );
        $ct_listing_zip = strip_tags( get_the_term_list( $wp_query->post->ID, 'zipcode', '', ', ', '' ) );

        $ct_listing_address = $ct_listing_street_address . ', ' . $ct_listing_city . ', ' . $ct_listing_state . ', ' . $ct_listing_zip;

        if ($ct_yelp_amenities) :

        foreach ($ct_yelp_amenities as $field=>$value) {
        
            switch($field) {
                
                // Restaurant            
                case 'restaurant' :

                    echo '<h5><i class="fa fa-cutlery"></i> ' . __('Restaurants', 'contempo') . '</h5>';

                    ct_query_yelp_api('restaurant', $ct_listing_address);
                    
                break;

                // Coffee Shops            
                case 'coffee_shops' :

                    echo '<h5><i class="fa fa-coffee"></i> ' . __('Coffee Shops', 'contempo') . '</h5>';

                    ct_query_yelp_api('coffee shop', $ct_listing_address);
                    
                break;

                // Coffee Shops            
                case 'grocery' :

                    echo '<h5><i class="fa fa-shopping-basket"></i> ' . __('Grocery', 'contempo') . '</h5>';

                    ct_query_yelp_api('grocery', $ct_listing_address);
                    
                break;

                // Schools           
                case 'schools' :

                    echo '<h5><i class="fa fa-mortar-board"></i> ' . __('Education', 'contempo') . '</h5>';

                    ct_query_yelp_api('schools', $ct_listing_address);
                    
                break;

                // Banks           
                case 'banks' :

                    echo '<h5><i class="fa fa-bank"></i> ' . __('Bank', 'contempo') . '</h5>';

                    ct_query_yelp_api('banks', $ct_listing_address);
                    
                break;

                // Bars           
                case 'bars' :

                    echo '<h5><i class="fa fa-beer"></i> ' . __('Bars', 'contempo') . '</h5>';

                    ct_query_yelp_api('bars', $ct_listing_address);
                    
                break;

                // Bars           
                case 'hospitals' :

                    echo '<h5><i class="fa fa-hospital-o"></i> ' . __('Hospitals', 'contempo') . '</h5>';

                    ct_query_yelp_api('hospitals', $ct_listing_address);
                    
                break;

                // Bars           
                case 'gas_station' :

                    echo '<h5><i class="fa fa-car"></i> ' . __('Gas Stations', 'contempo') . '</h5>';

                    ct_query_yelp_api('gas stations', $ct_listing_address);
                    
                break;

            }

        } endif;

    echo '</div>';
} elseif(!class_exists('OAuthToken')) {
    echo '<div class="nomatches">';
        echo '<h5>' . __('Yelp API OAuth Error.', 'contempo') . '</h5>';
        echo '<p class="marB0">' . __('You need to activate the "Contempo Payment Gateways" plugin.', 'contempo') . '</p>';
    echo '</div>';
} else {
    echo '<div class="nomatches">';
        echo '<h5>' . __('You need to upgrade to the Yelp Fusion API.', 'contempo') . '</h5>';
        echo '<p class="marB0">' . __('Go into Admin > Real Estate 7 Options > Yelp > Create App', 'contempo') . '</p>';
    echo '</div>';
}
echo '<!-- // Nearby -->';

?>