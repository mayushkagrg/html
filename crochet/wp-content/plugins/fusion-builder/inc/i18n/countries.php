<?php
/**
 * Countries.
 *
 * @package fusion-builder
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * Adds Countries to predefined choices
 *
 * @param array $choices The predefined choices.
 */
function fusion_builder_predefined_countries( $choices = [] ) {
	$choices[] = [
		'name'   => __( 'Countries', 'fusion-builder' ),
		'values' => [
			__( 'Afghanistan', 'fusion-builder' ),
			__( 'Åland Islands', 'fusion-builder' ),
			__( 'Albania', 'fusion-builder' ),
			__( 'Algeria', 'fusion-builder' ),
			__( 'American Samoa', 'fusion-builder' ),
			__( 'Andorra', 'fusion-builder' ),
			__( 'Angola', 'fusion-builder' ),
			__( 'Anguilla', 'fusion-builder' ),
			__( 'Antarctica', 'fusion-builder' ),
			__( 'Antigua and Barbuda', 'fusion-builder' ),
			__( 'Argentina', 'fusion-builder' ),
			__( 'Armenia', 'fusion-builder' ),
			__( 'Aruba', 'fusion-builder' ),
			__( 'Australia', 'fusion-builder' ),
			__( 'Austria', 'fusion-builder' ),
			__( 'Azerbaijan', 'fusion-builder' ),
			__( 'Bahamas', 'fusion-builder' ),
			__( 'Bahrain', 'fusion-builder' ),
			__( 'Bangladesh', 'fusion-builder' ),
			__( 'Barbados', 'fusion-builder' ),
			__( 'Belarus', 'fusion-builder' ),
			__( 'Belgium', 'fusion-builder' ),
			__( 'Belize', 'fusion-builder' ),
			__( 'Benin', 'fusion-builder' ),
			__( 'Bermuda', 'fusion-builder' ),
			__( 'Bhutan', 'fusion-builder' ),
			__( 'Bolivia', 'fusion-builder' ),
			__( 'Bonaire, Sint Eustatius and Saba', 'fusion-builder' ),
			__( 'Bosnia and Herzegovina', 'fusion-builder' ),
			__( 'Botswana', 'fusion-builder' ),
			__( 'Bouvet Island', 'fusion-builder' ),
			__( 'Brazil', 'fusion-builder' ),
			__( 'British Indian Ocean Territory', 'fusion-builder' ),
			__( 'Brunei Darussalam', 'fusion-builder' ),
			__( 'Bulgaria', 'fusion-builder' ),
			__( 'Burkina Faso', 'fusion-builder' ),
			__( 'Burundi', 'fusion-builder' ),
			__( 'Cambodia', 'fusion-builder' ),
			__( 'Cameroon', 'fusion-builder' ),
			__( 'Canada', 'fusion-builder' ),
			__( 'Cape Verde', 'fusion-builder' ),
			__( 'Cayman Islands', 'fusion-builder' ),
			__( 'Central African Republic', 'fusion-builder' ),
			__( 'Chad', 'fusion-builder' ),
			__( 'Chile', 'fusion-builder' ),
			__( 'China', 'fusion-builder' ),
			__( 'Christmas Island', 'fusion-builder' ),
			__( 'Cocos Islands', 'fusion-builder' ),
			__( 'Colombia', 'fusion-builder' ),
			__( 'Comoros', 'fusion-builder' ),
			__( 'Congo, Democratic Republic of the', 'fusion-builder' ),
			__( 'Congo, Republic of the', 'fusion-builder' ),
			__( 'Cook Islands', 'fusion-builder' ),
			__( 'Costa Rica', 'fusion-builder' ),
			__( "Côte d'Ivoire", 'fusion-builder' ),
			__( 'Croatia', 'fusion-builder' ),
			__( 'Cuba', 'fusion-builder' ),
			__( 'Curaçao', 'fusion-builder' ),
			__( 'Cyprus', 'fusion-builder' ),
			__( 'Czech Republic', 'fusion-builder' ),
			__( 'Denmark', 'fusion-builder' ),
			__( 'Djibouti', 'fusion-builder' ),
			__( 'Dominica', 'fusion-builder' ),
			__( 'Dominican Republic', 'fusion-builder' ),
			__( 'Ecuador', 'fusion-builder' ),
			__( 'Egypt', 'fusion-builder' ),
			__( 'El Salvador', 'fusion-builder' ),
			__( 'Equatorial Guinea', 'fusion-builder' ),
			__( 'Eritrea', 'fusion-builder' ),
			__( 'Estonia', 'fusion-builder' ),
			__( 'Eswatini (Swaziland)', 'fusion-builder' ),
			__( 'Ethiopia', 'fusion-builder' ),
			__( 'Falkland Islands', 'fusion-builder' ),
			__( 'Faroe Islands', 'fusion-builder' ),
			__( 'Fiji', 'fusion-builder' ),
			__( 'Finland', 'fusion-builder' ),
			__( 'France', 'fusion-builder' ),
			__( 'French Guiana', 'fusion-builder' ),
			__( 'French Polynesia', 'fusion-builder' ),
			__( 'French Southern Territories', 'fusion-builder' ),
			__( 'Gabon', 'fusion-builder' ),
			__( 'Gambia', 'fusion-builder' ),
			_x( 'Georgia', 'Country', 'fusion-builder' ),
			__( 'Germany', 'fusion-builder' ),
			__( 'Ghana', 'fusion-builder' ),
			__( 'Gibraltar', 'fusion-builder' ),
			__( 'Greece', 'fusion-builder' ),
			__( 'Greenland', 'fusion-builder' ),
			__( 'Grenada', 'fusion-builder' ),
			__( 'Guadeloupe', 'fusion-builder' ),
			__( 'Guam', 'fusion-builder' ),
			__( 'Guatemala', 'fusion-builder' ),
			__( 'Guernsey', 'fusion-builder' ),
			__( 'Guinea', 'fusion-builder' ),
			__( 'Guinea-Bissau', 'fusion-builder' ),
			__( 'Guyana', 'fusion-builder' ),
			__( 'Haiti', 'fusion-builder' ),
			__( 'Heard and McDonald Islands', 'fusion-builder' ),
			__( 'Holy See', 'fusion-builder' ),
			__( 'Honduras', 'fusion-builder' ),
			__( 'Hong Kong', 'fusion-builder' ),
			__( 'Hungary', 'fusion-builder' ),
			__( 'Iceland', 'fusion-builder' ),
			__( 'India', 'fusion-builder' ),
			__( 'Indonesia', 'fusion-builder' ),
			__( 'Iran', 'fusion-builder' ),
			__( 'Iraq', 'fusion-builder' ),
			__( 'Ireland', 'fusion-builder' ),
			__( 'Isle of Man', 'fusion-builder' ),
			__( 'Israel', 'fusion-builder' ),
			__( 'Italy', 'fusion-builder' ),
			__( 'Jamaica', 'fusion-builder' ),
			__( 'Japan', 'fusion-builder' ),
			__( 'Jersey', 'fusion-builder' ),
			__( 'Jordan', 'fusion-builder' ),
			__( 'Kazakhstan', 'fusion-builder' ),
			__( 'Kenya', 'fusion-builder' ),
			__( 'Kiribati', 'fusion-builder' ),
			__( 'Kuwait', 'fusion-builder' ),
			__( 'Kyrgyzstan', 'fusion-builder' ),
			__( "Lao People's Democratic Republic", 'fusion-builder' ),
			__( 'Latvia', 'fusion-builder' ),
			__( 'Lebanon', 'fusion-builder' ),
			__( 'Lesotho', 'fusion-builder' ),
			__( 'Liberia', 'fusion-builder' ),
			__( 'Libya', 'fusion-builder' ),
			__( 'Liechtenstein', 'fusion-builder' ),
			__( 'Lithuania', 'fusion-builder' ),
			__( 'Luxembourg', 'fusion-builder' ),
			__( 'Macau', 'fusion-builder' ),
			__( 'Macedonia', 'fusion-builder' ),
			__( 'Madagascar', 'fusion-builder' ),
			__( 'Malawi', 'fusion-builder' ),
			__( 'Malaysia', 'fusion-builder' ),
			__( 'Maldives', 'fusion-builder' ),
			__( 'Mali', 'fusion-builder' ),
			__( 'Malta', 'fusion-builder' ),
			__( 'Marshall Islands', 'fusion-builder' ),
			__( 'Martinique', 'fusion-builder' ),
			__( 'Mauritania', 'fusion-builder' ),
			__( 'Mauritius', 'fusion-builder' ),
			__( 'Mayotte', 'fusion-builder' ),
			__( 'Mexico', 'fusion-builder' ),
			__( 'Micronesia', 'fusion-builder' ),
			__( 'Moldova', 'fusion-builder' ),
			__( 'Monaco', 'fusion-builder' ),
			__( 'Mongolia', 'fusion-builder' ),
			__( 'Montenegro', 'fusion-builder' ),
			__( 'Montserrat', 'fusion-builder' ),
			__( 'Morocco', 'fusion-builder' ),
			__( 'Mozambique', 'fusion-builder' ),
			__( 'Myanmar', 'fusion-builder' ),
			__( 'Namibia', 'fusion-builder' ),
			__( 'Nauru', 'fusion-builder' ),
			__( 'Nepal', 'fusion-builder' ),
			__( 'Netherlands', 'fusion-builder' ),
			__( 'New Caledonia', 'fusion-builder' ),
			__( 'New Zealand', 'fusion-builder' ),
			__( 'Nicaragua', 'fusion-builder' ),
			__( 'Niger', 'fusion-builder' ),
			__( 'Nigeria', 'fusion-builder' ),
			__( 'Niue', 'fusion-builder' ),
			__( 'Norfolk Island', 'fusion-builder' ),
			__( 'North Korea', 'fusion-builder' ),
			__( 'Northern Mariana Islands', 'fusion-builder' ),
			__( 'Norway', 'fusion-builder' ),
			__( 'Oman', 'fusion-builder' ),
			__( 'Pakistan', 'fusion-builder' ),
			__( 'Palau', 'fusion-builder' ),
			__( 'Palestine, State of', 'fusion-builder' ),
			__( 'Panama', 'fusion-builder' ),
			__( 'Papua New Guinea', 'fusion-builder' ),
			__( 'Paraguay', 'fusion-builder' ),
			__( 'Peru', 'fusion-builder' ),
			__( 'Philippines', 'fusion-builder' ),
			__( 'Pitcairn', 'fusion-builder' ),
			__( 'Poland', 'fusion-builder' ),
			__( 'Portugal', 'fusion-builder' ),
			__( 'Puerto Rico', 'fusion-builder' ),
			__( 'Qatar', 'fusion-builder' ),
			__( 'Réunion', 'fusion-builder' ),
			__( 'Romania', 'fusion-builder' ),
			__( 'Russia', 'fusion-builder' ),
			__( 'Rwanda', 'fusion-builder' ),
			__( 'Saint Barthélemy', 'fusion-builder' ),
			__( 'Saint Helena', 'fusion-builder' ),
			__( 'Saint Kitts and Nevis', 'fusion-builder' ),
			__( 'Saint Lucia', 'fusion-builder' ),
			__( 'Saint Martin', 'fusion-builder' ),
			__( 'Saint Pierre and Miquelon', 'fusion-builder' ),
			__( 'Saint Vincent and the Grenadines', 'fusion-builder' ),
			__( 'Samoa', 'fusion-builder' ),
			__( 'San Marino', 'fusion-builder' ),
			__( 'Sao Tome and Principe', 'fusion-builder' ),
			__( 'Saudi Arabia', 'fusion-builder' ),
			__( 'Senegal', 'fusion-builder' ),
			__( 'Serbia', 'fusion-builder' ),
			__( 'Seychelles', 'fusion-builder' ),
			__( 'Sierra Leone', 'fusion-builder' ),
			__( 'Singapore', 'fusion-builder' ),
			__( 'Sint Maarten', 'fusion-builder' ),
			__( 'Slovakia', 'fusion-builder' ),
			__( 'Slovenia', 'fusion-builder' ),
			__( 'Solomon Islands', 'fusion-builder' ),
			__( 'Somalia', 'fusion-builder' ),
			__( 'South Africa', 'fusion-builder' ),
			_x( 'South Georgia', 'Country', 'fusion-builder' ),
			__( 'South Korea', 'fusion-builder' ),
			__( 'South Sudan', 'fusion-builder' ),
			__( 'Spain', 'fusion-builder' ),
			__( 'Sri Lanka', 'fusion-builder' ),
			__( 'Sudan', 'fusion-builder' ),
			__( 'Suriname', 'fusion-builder' ),
			__( 'Svalbard and Jan Mayen Islands', 'fusion-builder' ),
			__( 'Sweden', 'fusion-builder' ),
			__( 'Switzerland', 'fusion-builder' ),
			__( 'Syria', 'fusion-builder' ),
			__( 'Taiwan', 'fusion-builder' ),
			__( 'Tajikistan', 'fusion-builder' ),
			__( 'Tanzania', 'fusion-builder' ),
			__( 'Thailand', 'fusion-builder' ),
			__( 'Timor-Leste', 'fusion-builder' ),
			__( 'Togo', 'fusion-builder' ),
			__( 'Tokelau', 'fusion-builder' ),
			__( 'Tonga', 'fusion-builder' ),
			__( 'Trinidad and Tobago', 'fusion-builder' ),
			__( 'Tunisia', 'fusion-builder' ),
			__( 'Turkey', 'fusion-builder' ),
			__( 'Turkmenistan', 'fusion-builder' ),
			__( 'Turks and Caicos Islands', 'fusion-builder' ),
			__( 'Tuvalu', 'fusion-builder' ),
			__( 'Uganda', 'fusion-builder' ),
			__( 'Ukraine', 'fusion-builder' ),
			__( 'United Arab Emirates', 'fusion-builder' ),
			__( 'United Kingdom', 'fusion-builder' ),
			__( 'United States', 'fusion-builder' ),
			__( 'Uruguay', 'fusion-builder' ),
			__( 'US Minor Outlying Islands', 'fusion-builder' ),
			__( 'Uzbekistan', 'fusion-builder' ),
			__( 'Vanuatu', 'fusion-builder' ),
			__( 'Venezuela', 'fusion-builder' ),
			__( 'Vietnam', 'fusion-builder' ),
			__( 'Virgin Islands, British', 'fusion-builder' ),
			__( 'Virgin Islands, U.S.', 'fusion-builder' ),
			__( 'Wallis and Futuna', 'fusion-builder' ),
			__( 'Western Sahara', 'fusion-builder' ),
			__( 'Yemen', 'fusion-builder' ),
			__( 'Zambia', 'fusion-builder' ),
			__( 'Zimbabwe', 'fusion-builder' ),
		],
	];
	return $choices;
}
add_filter( 'fusion_predefined_choices', 'fusion_builder_predefined_countries' );
