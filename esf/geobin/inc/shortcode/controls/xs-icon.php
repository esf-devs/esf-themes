<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * A Font Icon select box.
 *
 * @property array $icons   A list of font-icon classes. [ 'class-name' => 'nicename', ... ]
 *                          Default Font Awesome icons. @see Control_Icon::get_icons().
 * @property array $include list of classes to include form the $icons property
 * @property array $exclude list of classes to exclude form the $icons property
 *
 * @since 1.0.0
 */
class Xs_Icon_Controler extends Elementor\Base_Data_Control {

	public function get_type() {
		return 'icon';
	}

	/**
	 * Get icons list
	 *
	 * @return array
	 */

	public static function get_icons() {

		$icons = array(
		    'fa fa-adjust' =>  'fa fa-adjust',
		    'fa fa-anchor' =>  'fa fa-anchor',
		    'fa fa-archive' =>  'fa fa-archive',
		    'fa fa-area-chart' =>  'fa fa-area-chart',
		    'fa fa-arrows' =>  'fa fa-arrows',
		    'fa fa-arrows-h' =>  'fa fa-arrows-h',
		    'fa fa-arrows-h' =>  'fa fa-arrows-h',
		    'fa fa-check'	=>	'fa fa-check',
		    'fa fa-map-marker'	=>	'fa fa-map-marker',
		    'fa fa-envelope-o'	=>	'fa fa-envelope-o',
		    'fa fa-phone'	=>	'fa fa-phone',
		    'fa fa-facebook'	=>	'fa fa-facebook',
			 'fa fa-bell-o'	=>	'fa fa-bell-o',
			 

			 'icon icon-chat' => 'icon icon-chat',
			'icon icon-light-bulb' => 'icon icon-light-bulb',
			'icon icon-like' => 'icon icon-like',
			'icon icon-line-chart' => 'icon icon-line-chart',
			'icon icon-loupe' => 'icon icon-loupe',
			'icon icon-strategy' => 'icon icon-strategy',
			'icon icon-trophy' => 'icon icon-trophy',
			'icon icon-mobile' => 'icon icon-mobile',
			'icon icon-laptop' => 'icon icon-laptop',
			'icon icon-desktop' => 'icon icon-desktop',
			'icon icon-tablet' => 'icon icon-tablet',
			'icon icon-phone' => 'icon icon-phone',
			'icon icon-document' => 'icon icon-document',
			'icon icon-documents' => 'icon icon-documents',
			'icon icon-search' => 'icon icon-search',
			'icon icon-clipboard' => 'icon icon-clipboard',
			'icon icon-newspaper' => 'icon icon-newspaper',
			'icon icon-notebook' => 'icon icon-notebook',
			'icon icon-book-open' => 'icon icon-book-open',
			'icon icon-browser' => 'icon icon-browser',
			'icon icon-calendar' => 'icon icon-calendar',
			'icon icon-presentation' => 'icon icon-presentation',
			'icon icon-picture' => 'icon icon-picture',
			'icon icon-pictures' => 'icon icon-pictures',
			'icon icon-video' => 'icon icon-video',
			'icon icon-camera' => 'icon icon-camera',
			'icon icon-printer' => 'icon icon-printer',
			'icon icon-toolbox' => 'icon icon-toolbox',
			'icon icon-briefcase' => 'icon icon-briefcase',
			'icon icon-wallet' => 'icon icon-wallet',
			'icon icon-gift' => 'icon icon-gift',
			'icon icon-bargraph' => 'icon icon-bargraph',
			'icon icon-grid' => 'icon icon-grid',
			'icon icon-expand' => 'icon icon-expand',
			'icon icon-focus' => 'icon icon-focus',
			'icon icon-edit' => 'icon icon-edit',
			'icon icon-adjustments' => 'icon icon-adjustments',
			'icon icon-ribbon' => 'icon icon-ribbon',
			'icon icon-hourglass' => 'icon icon-hourglass',
			'icon icon-lock' => 'icon icon-lock',
			'icon icon-megaphone' => 'icon icon-megaphone',
			'icon icon-shield' => 'icon icon-shield',
			'icon icon-trophy1' => 'icon icon-trophy1',
			'icon icon-flag' => 'icon icon-flag',
			'icon icon-map' => 'icon icon-map',
			'icon icon-puzzle' => 'icon icon-puzzle',
			'icon icon-basket' => 'icon icon-basket',
			'icon icon-envelope' => 'icon icon-envelope',
			'icon icon-streetsign' => 'icon icon-streetsign',
			'icon icon-telescope' => 'icon icon-telescope',
			'icon icon-gears' => 'icon icon-gears',
			'icon icon-key' => 'icon icon-key',
			'icon icon-paperclip' => 'icon icon-paperclip',
			'icon icon-attachment' => 'icon icon-attachment',
			'icon icon-pricetags' => 'icon icon-pricetags',
			'icon icon-lightbulb' => 'icon icon-lightbulb',
			'icon icon-layers' => 'icon icon-layers',
			'icon icon-pencil' => 'icon icon-pencil',
			'icon icon-tools' => 'icon icon-tools',
			'icon icon-tools-2' => 'icon icon-tools-2',
			'icon icon-scissors' => 'icon icon-scissors',
			'icon icon-paintbrush' => 'icon icon-paintbrush',
			'icon icon-magnifying-glass' => 'icon icon-magnifying-glass',
			'icon icon-circle-compass' => 'icon icon-circle-compass',
			'icon icon-linegraph' => 'icon icon-linegraph',
			'icon icon-mic' => 'icon icon-mic',
			'icon icon-strategy1' => 'icon icon-strategy1',
			'icon icon-beaker' => 'icon icon-beaker',
			'icon icon-caution' => 'icon icon-caution',
			'icon icon-recycle' => 'icon icon-recycle',
			'icon icon-anchor' => 'icon icon-anchor',
			'icon icon-profile-male' => 'icon icon-profile-male',
			'icon icon-profile-female' => 'icon icon-profile-female',
			'icon icon-bike' => 'icon icon-bike',
			'icon icon-wine' => 'icon icon-wine',
			'icon icon-hotairballoon' => 'icon icon-hotairballoon',
			'icon icon-globe' => 'icon icon-globe',
			'icon icon-genius' => 'icon icon-genius',
			'icon icon-map-pin' => 'icon icon-map-pin',
			'icon icon-dial' => 'icon icon-dial',
			'icon icon-chat1' => 'icon icon-chat1',
			'icon icon-heart' => 'icon icon-heart',
			'icon icon-cloud' => 'icon icon-cloud',
			'icon icon-upload' => 'icon icon-upload',
			'icon icon-download' => 'icon icon-download',
			'icon icon-target' => 'icon icon-target',
			'icon icon-hazardous' => 'icon icon-hazardous',
			'icon icon-piechart' => 'icon icon-piechart',
			'icon icon-speedometer' => 'icon icon-speedometer',
			'icon icon-global' => 'icon icon-global',
			'icon icon-compass' => 'icon icon-compass',
			'icon icon-lifesaver' => 'icon icon-lifesaver',
			'icon icon-clock' => 'icon icon-clock',
			'icon icon-aperture' => 'icon icon-aperture',
			'icon icon-quote' => 'icon icon-quote',
			'icon icon-scope' => 'icon icon-scope',
			'icon icon-alarmclock' => 'icon icon-alarmclock',
			'icon icon-refresh' => 'icon icon-refresh',
			'icon icon-happy' => 'icon icon-happy',
			'icon icon-sad' => 'icon icon-sad',
			'icon icon-facebook' => 'icon icon-facebook',
			'icon icon-twitter' => 'icon icon-twitter',
			'icon icon-googleplus' => 'icon icon-googleplus',
			'icon icon-rss' => 'icon icon-rss',
			'icon icon-tumblr' => 'icon icon-tumblr',
			'icon icon-linkedin' => 'icon icon-linkedin',
			'icon icon-dribbble' => 'icon icon-dribbble',
			'icon icon-home' => 'icon icon-home',
			'icon icon-apartment' => 'icon icon-apartment',
			'icon icon-pencil1' => 'icon icon-pencil1',
			'icon icon-magic-wand' => 'icon icon-magic-wand',
			'icon icon-drop' => 'icon icon-drop',
			'icon icon-lighter' => 'icon icon-lighter',
			'icon icon-poop' => 'icon icon-poop',
			'icon icon-sun' => 'icon icon-sun',
			'icon icon-moon' => 'icon icon-moon',
			'icon icon-cloud1' => 'icon icon-cloud1',
			'icon icon-cloud-upload' => 'icon icon-cloud-upload',
			'icon icon-cloud-download' => 'icon icon-cloud-download',
			'icon icon-cloud-sync' => 'icon icon-cloud-sync',
			'icon icon-cloud-check' => 'icon icon-cloud-check',
			'icon icon-database' => 'icon icon-database',
			'icon icon-lock1' => 'icon icon-lock1',
			'icon icon-cog' => 'icon icon-cog',
			'icon icon-trash' => 'icon icon-trash',
			'icon icon-dice' => 'icon icon-dice',
			'icon icon-heart1' => 'icon icon-heart1',
			'icon icon-star' => 'icon icon-star',
			'icon icon-star-half' => 'icon icon-star-half',
			'icon icon-star-empty' => 'icon icon-star-empty',
			'icon icon-flag1' => 'icon icon-flag1',
			'icon icon-envelope1' => 'icon icon-envelope1',
			'icon icon-paperclip1' => 'icon icon-paperclip1',
			'icon icon-inbox' => 'icon icon-inbox',
			'icon icon-eye' => 'icon icon-eye',
			'icon icon-printer1' => 'icon icon-printer1',
			'icon icon-file-empty' => 'icon icon-file-empty',
			'icon icon-file-add' => 'icon icon-file-add',
			'icon icon-enter' => 'icon icon-enter',
			'icon icon-exit' => 'icon icon-exit',
			'icon icon-graduation-hat' => 'icon icon-graduation-hat',
			'icon icon-license' => 'icon icon-license',
			'icon icon-music-note' => 'icon icon-music-note',
			'icon icon-film-play' => 'icon icon-film-play',
			'icon icon-camera-video' => 'icon icon-camera-video',
			'icon icon-camera1' => 'icon icon-camera1',
			'icon icon-picture1' => 'icon icon-picture1',
			'icon icon-book' => 'icon icon-book',
			'icon icon-bookmark' => 'icon icon-bookmark',
			'icon icon-user' => 'icon icon-user',
			'icon icon-users' => 'icon icon-users',
			'icon icon-shirt' => 'icon icon-shirt',
			'icon icon-store' => 'icon icon-store',
			'icon icon-cart' => 'icon icon-cart',
			'icon icon-tag' => 'icon icon-tag',
			'icon icon-phone-handset' => 'icon icon-phone-handset',
			'icon icon-phone1' => 'icon icon-phone1',
			'icon icon-pushpin' => 'icon icon-pushpin',
			'icon icon-map-marker' => 'icon icon-map-marker',
			'icon icon-map1' => 'icon icon-map1',
			'icon icon-location' => 'icon icon-location',
			'icon icon-calendar-full' => 'icon icon-calendar-full',
			'icon icon-keyboard' => 'icon icon-keyboard',
			'icon icon-spell-check' => 'icon icon-spell-check',
			'icon icon-screen' => 'icon icon-screen',
			'icon icon-smartphone' => 'icon icon-smartphone',
			'icon icon-tablet1' => 'icon icon-tablet1',
			'icon icon-laptop1' => 'icon icon-laptop1',
			'icon icon-laptop-phone' => 'icon icon-laptop-phone',
			'icon icon-power-switch' => 'icon icon-power-switch',
			'icon icon-bubble' => 'icon icon-bubble',
			'icon icon-heart-pulse' => 'icon icon-heart-pulse',
			'icon icon-construction' => 'icon icon-construction',
			'icon icon-pie-chart' => 'icon icon-pie-chart',
			'icon icon-chart-bars' => 'icon icon-chart-bars',
			'icon icon-gift1' => 'icon icon-gift1',
			'icon icon-diamond' => 'icon icon-diamond',
			'icon icon-dinner' => 'icon icon-dinner',
			'icon icon-coffee-cup' => 'icon icon-coffee-cup',
			'icon icon-leaf' => 'icon icon-leaf',
			'icon icon-paw' => 'icon icon-paw',
			'icon icon-rocket' => 'icon icon-rocket',
			'icon icon-briefcase1' => 'icon icon-briefcase1',
			'icon icon-bus' => 'icon icon-bus',
			'icon icon-car' => 'icon icon-car',
			'icon icon-train' => 'icon icon-train',
			'icon icon-bicycle' => 'icon icon-bicycle',
			'icon icon-wheelchair' => 'icon icon-wheelchair',
			'icon icon-select' => 'icon icon-select',
			'icon icon-earth' => 'icon icon-earth',
			'icon icon-smile' => 'icon icon-smile',
			'icon icon-sad1' => 'icon icon-sad1',
			'icon icon-neutral' => 'icon icon-neutral',
			'icon icon-mustache' => 'icon icon-mustache',
			'icon icon-alarm' => 'icon icon-alarm',
			'icon icon-bullhorn' => 'icon icon-bullhorn',
			'icon icon-volume-high' => 'icon icon-volume-high',
			'icon icon-volume-medium' => 'icon icon-volume-medium',
			'icon icon-volume-low' => 'icon icon-volume-low',
			'icon icon-volume' => 'icon icon-volume',
			'icon icon-mic1' => 'icon icon-mic1',
			'icon icon-hourglass1' => 'icon icon-hourglass1',
			'icon icon-undo' => 'icon icon-undo',
			'icon icon-redo' => 'icon icon-redo',
			'icon icon-sync' => 'icon icon-sync',
			'icon icon-history' => 'icon icon-history',
			'icon icon-clock1' => 'icon icon-clock1',
			'icon icon-download1' => 'icon icon-download1',
			'icon icon-upload1' => 'icon icon-upload1',
			'icon icon-enter-down' => 'icon icon-enter-down',
			'icon icon-exit-up' => 'icon icon-exit-up',
			'icon icon-bug' => 'icon icon-bug',
			'icon icon-code' => 'icon icon-code',
			'icon icon-link' => 'icon icon-link',
			'icon icon-unlink' => 'icon icon-unlink',
			'icon icon-thumbs-up' => 'icon icon-thumbs-up',
			'icon icon-thumbs-down' => 'icon icon-thumbs-down',
			'icon icon-magnifier' => 'icon icon-magnifier',
			'icon icon-cross' => 'icon icon-cross',
			'icon icon-menu' => 'icon icon-menu',
			'icon icon-list' => 'icon icon-list',
			'icon icon-chevron-up' => 'icon icon-chevron-up',
			'icon icon-chevron-down' => 'icon icon-chevron-down',
			'icon icon-chevron-left' => 'icon icon-chevron-left',
			'icon icon-chevron-right' => 'icon icon-chevron-right',
			'icon icon-arrow-up' => 'icon icon-arrow-up',
			'icon icon-arrow-down' => 'icon icon-arrow-down',
			'icon icon-arrow-left' => 'icon icon-arrow-left',
			'icon icon-arrow-right' => 'icon icon-arrow-right',
			'icon icon-move' => 'icon icon-move',
			'icon icon-warning' => 'icon icon-warning',
			'icon icon-question-circle' => 'icon icon-question-circle',
			'icon icon-menu-circle' => 'icon icon-menu-circle',
			'icon icon-checkmark-circle' => 'icon icon-checkmark-circle',
			'icon icon-cross-circle' => 'icon icon-cross-circle',
			'icon icon-plus-circle' => 'icon icon-plus-circle',
			'icon icon-circle-minus' => 'icon icon-circle-minus',
			'icon icon-arrow-up-circle' => 'icon icon-arrow-up-circle',
			'icon icon-arrow-down-circle' => 'icon icon-arrow-down-circle',
			'icon icon-arrow-left-circle' => 'icon icon-arrow-left-circle',
			'icon icon-arrow-right-circle' => 'icon icon-arrow-right-circle',
			'icon icon-chevron-up-circle' => 'icon icon-chevron-up-circle',
			'icon icon-chevron-down-circle' => 'icon icon-chevron-down-circle',
			'icon icon-chevron-left-circle' => 'icon icon-chevron-left-circle',
			'icon icon-chevron-right-circle' => 'icon icon-chevron-right-circle',
			'icon icon-crop' => 'icon icon-crop',
			'icon icon-frame-expand' => 'icon icon-frame-expand',
			'icon icon-frame-contract' => 'icon icon-frame-contract',
			'icon icon-layers1' => 'icon icon-layers1',
			'icon icon-funnel' => 'icon icon-funnel',
			'icon icon-text-format' => 'icon icon-text-format',
			'icon icon-text-size' => 'icon icon-text-size',
			'icon icon-bold' => 'icon icon-bold',
			'icon icon-italic' => 'icon icon-italic',
			'icon icon-underline' => 'icon icon-underline',
			'icon icon-strikethrough' => 'icon icon-strikethrough',
			'icon icon-highlight' => 'icon icon-highlight',
			'icon icon-text-align-left' => 'icon icon-text-align-left',
			'icon icon-text-align-center' => 'icon icon-text-align-center',
			'icon icon-text-align-right' => 'icon icon-text-align-right',
			'icon icon-text-align-justify' => 'icon icon-text-align-justify',
			'icon icon-line-spacing' => 'icon icon-line-spacing',
			'icon icon-indent-increase' => 'icon icon-indent-increase',
			'icon icon-indent-decrease' => 'icon icon-indent-decrease',
			'icon icon-page-break' => 'icon icon-page-break',
			'icon icon-hand' => 'icon icon-hand',
			'icon icon-pointer-up' => 'icon icon-pointer-up',
			'icon icon-pointer-right' => 'icon icon-pointer-right',
			'icon icon-pointer-down' => 'icon icon-pointer-down',
			'icon icon-pointer-left' => 'icon icon-pointer-left',
			'icon icon-vplay' => 'icon icon-vplay',
			'icon icon-newsletter' => 'icon icon-newsletter',
			'icon icon-coins-2' => 'icon icon-coins-2',
			'icon icon-commerce-2' => 'icon icon-commerce-2',
			'icon icon-monitor' => 'icon icon-monitor',
			'icon icon-graphic-3' => 'icon icon-graphic-3',
			'icon icon-business' => 'icon icon-business',
			'icon icon-graphic-2' => 'icon icon-graphic-2',
			'icon icon-commerce-1' => 'icon icon-commerce-1',
			'icon icon-hammer' => 'icon icon-hammer',
			'icon icon-graphic-1' => 'icon icon-graphic-1',
			'icon icon-graphic' => 'icon icon-graphic',
			'icon icon-justice-1' => 'icon icon-justice-1',
			'icon icon-line' => 'icon icon-line',
			'icon icon-money-3' => 'icon icon-money-3',
			'icon icon-chart' => 'icon icon-chart',
			'icon icon-commerce' => 'icon icon-commerce',
			'icon icon-agenda' => 'icon icon-agenda',
			'icon icon-money-2' => 'icon icon-money-2',
			'icon icon-justice' => 'icon icon-justice',
			'icon icon-money-1' => 'icon icon-money-1',
			'icon icon-money' => 'icon icon-money',
			'icon icon-technology' => 'icon icon-technology',
			'icon icon-coins-1' => 'icon icon-coins-1',
			'icon icon-coins' => 'icon icon-coins',
			'icon icon-left-arrow' => 'icon icon-left-arrow',
			'icon icon-bank' => 'icon icon-bank',
			'icon icon-calculator' => 'icon icon-calculator',
			'icon icon-chart1' => 'icon icon-chart1',
			'icon icon-chart2' => 'icon icon-chart2',
			'icon icon-checked' => 'icon icon-checked',
			'icon icon-clock2' => 'icon icon-clock2',
			'icon icon-comment' => 'icon icon-comment',
			'icon icon-comments' => 'icon icon-comments',
			'icon icon-consult' => 'icon icon-consult',
			'icon icon-consut2' => 'icon icon-consut2',
			'icon icon-deal' => 'icon icon-deal',
			'icon icon-download2' => 'icon icon-download2',
			'icon icon-envelope2' => 'icon icon-envelope2',
			'icon icon-euro' => 'icon icon-euro',
			'icon icon-folder' => 'icon icon-folder',
			'icon icon-invest' => 'icon icon-invest',
			'icon icon-loan' => 'icon icon-loan',
			'icon icon-map-marker1' => 'icon icon-map-marker1',
			'icon icon-mutual-fund' => 'icon icon-mutual-fund',
			'icon icon-percent' => 'icon icon-percent',
			'icon icon-phone2' => 'icon icon-phone2',
			'icon icon-pie-chart1' => 'icon icon-pie-chart1',
			'icon icon-play' => 'icon icon-play',
			'icon icon-left-arrow2' => 'icon icon-left-arrow2',
			'icon icon-savings' => 'icon icon-savings',
			'icon icon-search1' => 'icon icon-search1',
			'icon icon-tag1' => 'icon icon-tag1',
			'icon icon-tags' => 'icon icon-tags',
			'icon icon-tax' => 'icon icon-tax',
			'icon icon-quote1' => 'icon icon-quote1',
			'icon icon-right-arrow2' => 'icon icon-right-arrow2',


		   //  'xsicon icon-envelope5' => 'xsicon icon-envelope5',
			// 'xsicon icon-envelope4' => 'xsicon icon-envelope4',
			// 'xsicon icon-calendar22' => 'xsicon icon-calendar22',
			// 'xsicon icon-add-circular-outlined-button' => 'xsicon icon-add-circular-outlined-button',
			// 'xsicon icon-cancel' => 'xsicon icon-cancel',
			// 'xsicon icon-barbershop-2' => 'xsicon icon-barbershop-2',
			// 'xsicon icon-lipistic' => 'xsicon icon-lipistic',
			// 'xsicon icon-first-aid-kit' => 'xsicon icon-first-aid-kit',
			// 'xsicon icon-hair-cut-style' => 'xsicon icon-hair-cut-style',
			// 'xsicon icon-hair-cut-2' => 'xsicon icon-hair-cut-2',
			// 'xsicon icon-happiness' => 'xsicon icon-happiness',
			// 'xsicon icon-happiness-1' => 'xsicon icon-happiness-1',
			// 'xsicon icon-sad2' => 'xsicon icon-sad2',
			// 'xsicon icon-feelings' => 'xsicon icon-feelings',
			// 'xsicon icon-money-bag' => 'xsicon icon-money-bag',
			// 'xsicon icon-newspaper2' => 'xsicon icon-newspaper2',
			// 'xsicon icon-play-button' => 'xsicon icon-play-button',
			// 'xsicon icon-razor' => 'xsicon icon-razor',
			// 'xsicon icon-left-arrow' => 'xsicon icon-left-arrow',
			// 'xsicon icon-right-arrow' => 'xsicon icon-right-arrow',
			// 'xsicon icon-stone-massage' => 'xsicon icon-stone-massage',
			// 'xsicon icon-two-quotes-2' => 'xsicon icon-two-quotes-2',
			// 'xsicon icon-two-quotes' => 'xsicon icon-two-quotes',
			// 'xsicon icon-call' => 'xsicon icon-call',
			// 'xsicon icon-chat2' => 'xsicon icon-chat2',
			// 'xsicon icon-clock2' => 'xsicon icon-clock2',
			// 'xsicon icon-leaf' => 'xsicon icon-leaf',
			// 'xsicon icon-map-marker' => 'xsicon icon-map-marker',
			// 'xsicon icon-barber' => 'xsicon icon-barber',
			// 'xsicon icon-barbershop-1' => 'xsicon icon-barbershop-1',
			// 'xsicon icon-barbershop' => 'xsicon icon-barbershop',
			// 'xsicon icon-beauty-1' => 'xsicon icon-beauty-1',
			// 'xsicon icon-beauty' => 'xsicon icon-beauty',
			// 'xsicon icon-brush-1' => 'xsicon icon-brush-1',
			// 'xsicon icon-brush-2' => 'xsicon icon-brush-2',
			// 'xsicon icon-chair' => 'xsicon icon-chair',
			// 'xsicon icon-brush' => 'xsicon icon-brush',
			// 'xsicon icon-cosmetics-1' => 'xsicon icon-cosmetics-1',
			// 'xsicon icon-cosmetics' => 'xsicon icon-cosmetics',
			// 'xsicon icon-cream-1' => 'xsicon icon-cream-1',
			// 'xsicon icon-cream-2' => 'xsicon icon-cream-2',
			// 'xsicon icon-cream-3' => 'xsicon icon-cream-3',
			// 'xsicon icon-cream-4' => 'xsicon icon-cream-4',
			// 'xsicon icon-cream-5' => 'xsicon icon-cream-5',
			// 'xsicon icon-cream-6' => 'xsicon icon-cream-6',
			// 'xsicon icon-cream' => 'xsicon icon-cream',
			// 'xsicon icon-essential-oil-1' => 'xsicon icon-essential-oil-1',
			// 'xsicon icon-essential-oil-2' => 'xsicon icon-essential-oil-2',
			// 'xsicon icon-essential-oil' => 'xsicon icon-essential-oil',
			// 'xsicon icon-face-mask' => 'xsicon icon-face-mask',
			// 'xsicon icon-fashion-1' => 'xsicon icon-fashion-1',
			// 'xsicon icon-fashion-2' => 'xsicon icon-fashion-2',
			// 'xsicon icon-fashion-3' => 'xsicon icon-fashion-3',
			// 'xsicon icon-fashion-4' => 'xsicon icon-fashion-4',
			// 'xsicon icon-fashion-5' => 'xsicon icon-fashion-5',
			// 'xsicon icon-fashion-6' => 'xsicon icon-fashion-6',
			// 'xsicon icon-fashion-7' => 'xsicon icon-fashion-7',
			// 'xsicon icon-fashion' => 'xsicon icon-fashion',
			// 'xsicon icon-fruit' => 'xsicon icon-fruit',
			// 'xsicon icon-hair-cut' => 'xsicon icon-hair-cut',
			// 'xsicon icon-hair-dryer-1' => 'xsicon icon-hair-dryer-1',
			// 'xsicon icon-hair-dryer' => 'xsicon icon-hair-dryer',
			// 'xsicon icon-hair-removal' => 'xsicon icon-hair-removal',
			// 'xsicon icon-hand' => 'xsicon icon-hand',
			// 'xsicon icon-lipstick-with-cover' => 'xsicon icon-lipstick-with-cover',
			// 'xsicon icon-lipstick' => 'xsicon icon-lipstick',
			// 'xsicon icon-lotion' => 'xsicon icon-lotion',
			// 'xsicon icon-lotus' => 'xsicon icon-lotus',
			// 'xsicon icon-make-up-1' => 'xsicon icon-make-up-1',
			// 'xsicon icon-make-up' => 'xsicon icon-make-up',
			// 'xsicon icon-makeup-1' => 'xsicon icon-makeup-1',
			// 'xsicon icon-makeup' => 'xsicon icon-makeup',
			// 'xsicon icon-massage' => 'xsicon icon-massage',
			// 'xsicon icon-medical' => 'xsicon icon-medical',
			// 'xsicon icon-mortar' => 'xsicon icon-mortar',
			// 'xsicon icon-moustache' => 'xsicon icon-moustache',
			// 'xsicon icon-nail' => 'xsicon icon-nail',
			// 'xsicon icon-olive-oil' => 'xsicon icon-olive-oil',
			// 'xsicon icon-people' => 'xsicon icon-people',
			// 'xsicon icon-plant' => 'xsicon icon-plant',
			// 'xsicon icon-relax-1' => 'xsicon icon-relax-1',
			// 'xsicon icon-relax-2' => 'xsicon icon-relax-2',
			// 'xsicon icon-relax' => 'xsicon icon-relax',
			// 'xsicon icon-scissors-1' => 'xsicon icon-scissors-1',
			// 'xsicon icon-scissors-2' => 'xsicon icon-scissors-2',
			// 'xsicon icon-scissors-3' => 'xsicon icon-scissors-3',
			// 'xsicon icon-scissors' => 'xsicon icon-scissors',
			// 'xsicon icon-shampoo-1' => 'xsicon icon-shampoo-1',
			// 'xsicon icon-shampoo' => 'xsicon icon-shampoo',
			// 'xsicon icon-shave' => 'xsicon icon-shave',
			// 'xsicon icon-shaving' => 'xsicon icon-shaving',
			// 'xsicon icon-soap-1' => 'xsicon icon-soap-1',
			// 'xsicon icon-soap' => 'xsicon icon-soap',
			// 'xsicon icon-spa-1' => 'xsicon icon-spa-1',
			// 'xsicon icon-spa-3' => 'xsicon icon-spa-3',
			// 'xsicon icon-spa' => 'xsicon icon-spa',
			// 'xsicon icon-spa2' => 'xsicon icon-spa2',
			// 'xsicon icon-spray' => 'xsicon icon-spray',
			// 'xsicon icon-stones' => 'xsicon icon-stones',
			// 'xsicon icon-left-arrow22' => 'xsicon icon-left-arrow22',
			// 'xsicon icon-quote2' => 'xsicon icon-quote2',
			// 'xsicon icon-right-arrow2' => 'xsicon icon-right-arrow2',
			// 'xsicon icon-left-arrow2' => 'xsicon icon-left-arrow2',
			// 'xsicon icon-comment' => 'xsicon icon-comment',
			// 'xsicon icon-comments' => 'xsicon icon-comments',
			// 'xsicon icon-envelope' => 'xsicon icon-envelope',
			// 'xsicon icon-folder' => 'xsicon icon-folder',
			// 'xsicon icon-map-marker22' => 'xsicon icon-map-marker22',
			// 'xsicon icon-phone3' => 'xsicon icon-phone3',
			// 'xsicon icon-play' => 'xsicon icon-play',
			// 'xsicon icon-search' => 'xsicon icon-search',
			// 'xsicon icon-tag' => 'xsicon icon-tag',
			// 'xsicon icon-tags' => 'xsicon icon-tags',
			// 'xsicon icon-vplay' => 'xsicon icon-vplay',
			// 'xsicon icon-newsletter' => 'xsicon icon-newsletter',
			// 'xsicon icon-mobile2' => 'xsicon icon-mobile2',
			// 'xsicon icon-laptop2' => 'xsicon icon-laptop2',
			// 'xsicon icon-desktop2' => 'xsicon icon-desktop2',
			// 'xsicon icon-tablet2' => 'xsicon icon-tablet2',
			// 'xsicon icon-phone2' => 'xsicon icon-phone2',
			// 'xsicon icon-document' => 'xsicon icon-document',
			// 'xsicon icon-documents' => 'xsicon icon-documents',
			// 'xsicon icon-search2' => 'xsicon icon-search2',
			// 'xsicon icon-clipboard2' => 'xsicon icon-clipboard2',
			// 'xsicon icon-newspaper' => 'xsicon icon-newspaper',
			// 'xsicon icon-notebook' => 'xsicon icon-notebook',
			// 'xsicon icon-book-open' => 'xsicon icon-book-open',
			// 'xsicon icon-browser' => 'xsicon icon-browser',
			// 'xsicon icon-calendar2' => 'xsicon icon-calendar2',
			// 'xsicon icon-presentation' => 'xsicon icon-presentation',
			// 'xsicon icon-picture' => 'xsicon icon-picture',
			// 'xsicon icon-pictures' => 'xsicon icon-pictures',
			// 'xsicon icon-video' => 'xsicon icon-video',
			// 'xsicon icon-camera2' => 'xsicon icon-camera2',
			// 'xsicon icon-printer' => 'xsicon icon-printer',
			// 'xsicon icon-toolbox' => 'xsicon icon-toolbox',
			// 'xsicon icon-briefcase2' => 'xsicon icon-briefcase2',
			// 'xsicon icon-wallet' => 'xsicon icon-wallet',
			// 'xsicon icon-gift2' => 'xsicon icon-gift2',
			// 'xsicon icon-bargraph' => 'xsicon icon-bargraph',
			// 'xsicon icon-grid' => 'xsicon icon-grid',
			// 'xsicon icon-expand2' => 'xsicon icon-expand2',
			// 'xsicon icon-focus' => 'xsicon icon-focus',
			// 'xsicon icon-edit2' => 'xsicon icon-edit2',
			// 'xsicon icon-adjustments' => 'xsicon icon-adjustments',
			// 'xsicon icon-ribbon' => 'xsicon icon-ribbon',
			// 'xsicon icon-hourglass2' => 'xsicon icon-hourglass2',
			// 'xsicon icon-lock2' => 'xsicon icon-lock2',
			// 'xsicon icon-megaphone' => 'xsicon icon-megaphone',
			// 'xsicon icon-shield2' => 'xsicon icon-shield2',
			// 'xsicon icon-trophy2' => 'xsicon icon-trophy2',
			// 'xsicon icon-flag2' => 'xsicon icon-flag2',
			// 'xsicon icon-map2' => 'xsicon icon-map2',
			// 'xsicon icon-puzzle' => 'xsicon icon-puzzle',
			// 'xsicon icon-basket' => 'xsicon icon-basket',
			// 'xsicon icon-envelope2' => 'xsicon icon-envelope2',
			// 'xsicon icon-streetsign' => 'xsicon icon-streetsign',
			// 'xsicon icon-telescope' => 'xsicon icon-telescope',
			// 'xsicon icon-gears2' => 'xsicon icon-gears2',
			// 'xsicon icon-key2' => 'xsicon icon-key2',
			// 'xsicon icon-paperclip2' => 'xsicon icon-paperclip2',
			// 'xsicon icon-attachment' => 'xsicon icon-attachment',
			// 'xsicon icon-pricetags' => 'xsicon icon-pricetags',
			// 'xsicon icon-lightbulb' => 'xsicon icon-lightbulb',
			// 'xsicon icon-layers' => 'xsicon icon-layers',
			// 'xsicon icon-pencil2' => 'xsicon icon-pencil2',
			// 'xsicon icon-tools' => 'xsicon icon-tools',
			// 'xsicon icon-tools-2' => 'xsicon icon-tools-2',
			// 'xsicon icon-scissors2' => 'xsicon icon-scissors2',
			// 'xsicon icon-paintbrush' => 'xsicon icon-paintbrush',
			// 'xsicon icon-magnifying-glass' => 'xsicon icon-magnifying-glass',
			// 'xsicon icon-circle-compass' => 'xsicon icon-circle-compass',
			// 'xsicon icon-linegraph' => 'xsicon icon-linegraph',
			// 'xsicon icon-mic' => 'xsicon icon-mic',
			// 'xsicon icon-strategy' => 'xsicon icon-strategy',
			// 'xsicon icon-beaker' => 'xsicon icon-beaker',
			// 'xsicon icon-caution' => 'xsicon icon-caution',
			// 'xsicon icon-recycle2' => 'xsicon icon-recycle2',
			// 'xsicon icon-anchor2' => 'xsicon icon-anchor2',
			// 'xsicon icon-profile-male' => 'xsicon icon-profile-male',
			// 'xsicon icon-profile-female' => 'xsicon icon-profile-female',
			// 'xsicon icon-bike' => 'xsicon icon-bike',
			// 'xsicon icon-wine' => 'xsicon icon-wine',
			// 'xsicon icon-hotairballoon' => 'xsicon icon-hotairballoon',
			// 'xsicon icon-globe2' => 'xsicon icon-globe2',
			// 'xsicon icon-genius' => 'xsicon icon-genius',
			// 'xsicon icon-map-pin2' => 'xsicon icon-map-pin2',
			// 'xsicon icon-dial' => 'xsicon icon-dial',
			// 'xsicon icon-chat' => 'xsicon icon-chat',
			// 'xsicon icon-heart2' => 'xsicon icon-heart2',
			// 'xsicon icon-cloud2' => 'xsicon icon-cloud2',
			// 'xsicon icon-upload2' => 'xsicon icon-upload2',
			// 'xsicon icon-download2' => 'xsicon icon-download2',
			// 'xsicon icon-target' => 'xsicon icon-target',
			// 'xsicon icon-hazardous' => 'xsicon icon-hazardous',
			// 'xsicon icon-piechart' => 'xsicon icon-piechart',
			// 'xsicon icon-speedometer' => 'xsicon icon-speedometer',
			// 'xsicon icon-global' => 'xsicon icon-global',
			// 'xsicon icon-compass2' => 'xsicon icon-compass2',
			// 'xsicon icon-lifesaver' => 'xsicon icon-lifesaver',
			// 'xsicon icon-clock' => 'xsicon icon-clock',
			// 'xsicon icon-aperture' => 'xsicon icon-aperture',
			// 'xsicon icon-quote' => 'xsicon icon-quote',
			// 'xsicon icon-scope' => 'xsicon icon-scope',
			// 'xsicon icon-alarmclock' => 'xsicon icon-alarmclock',
			// 'xsicon icon-refresh2' => 'xsicon icon-refresh2',
			// 'xsicon icon-happy' => 'xsicon icon-happy',
			// 'xsicon icon-sad' => 'xsicon icon-sad',
			// 'xsicon icon-facebook2' => 'xsicon icon-facebook2',
			// 'xsicon icon-twitter2' => 'xsicon icon-twitter2',
			// 'xsicon icon-googleplus' => 'xsicon icon-googleplus',
			// 'xsicon icon-rss2' => 'xsicon icon-rss2',
			// 'xsicon icon-tumblr2' => 'xsicon icon-tumblr2',
			// 'xsicon icon-linkedin2' => 'xsicon icon-linkedin2',
			// 'xsicon icon-dribbble2' => 'xsicon icon-dribbble2',
			// 'xsicon icon-home' => 'xsicon icon-home',
			// 'xsicon icon-apartment' => 'xsicon icon-apartment',
			// 'xsicon icon-pencil' => 'xsicon icon-pencil',
			// 'xsicon icon-magic-wand' => 'xsicon icon-magic-wand',
			// 'xsicon icon-drop' => 'xsicon icon-drop',
			// 'xsicon icon-lighter' => 'xsicon icon-lighter',
			// 'xsicon icon-poop' => 'xsicon icon-poop',
			// 'xsicon icon-sun' => 'xsicon icon-sun',
			// 'xsicon icon-moon' => 'xsicon icon-moon',
			// 'xsicon icon-cloud' => 'xsicon icon-cloud',
			// 'xsicon icon-cloud-upload' => 'xsicon icon-cloud-upload',
			// 'xsicon icon-cloud-download' => 'xsicon icon-cloud-download',
			// 'xsicon icon-cloud-sync' => 'xsicon icon-cloud-sync',
			// 'xsicon icon-cloud-check' => 'xsicon icon-cloud-check',
			// 'xsicon icon-database' => 'xsicon icon-database',
			// 'xsicon icon-lock3' => 'xsicon icon-lock3',
			// 'xsicon icon-cog2' => 'xsicon icon-cog2',
			// 'xsicon icon-trash2' => 'xsicon icon-trash2',
			// 'xsicon icon-dice' => 'xsicon icon-dice',
			// 'xsicon icon-heart3' => 'xsicon icon-heart3',
			// 'xsicon icon-star2' => 'xsicon icon-star2',
			// 'xsicon icon-star-half2' => 'xsicon icon-star-half2',
			// 'xsicon icon-star-empty' => 'xsicon icon-star-empty',
			// 'xsicon icon-flag3' => 'xsicon icon-flag3',
			// 'xsicon icon-envelope3' => 'xsicon icon-envelope3',
			// 'xsicon icon-paperclip' => 'xsicon icon-paperclip',
			// 'xsicon icon-inbox' => 'xsicon icon-inbox',
			// 'xsicon icon-eye' => 'xsicon icon-eye',
			// 'xsicon icon-printer2' => 'xsicon icon-printer2',
			// 'xsicon icon-file-empty' => 'xsicon icon-file-empty',
			// 'xsicon icon-file-add' => 'xsicon icon-file-add',
			// 'xsicon icon-enter' => 'xsicon icon-enter',
			// 'xsicon icon-exit' => 'xsicon icon-exit',
			// 'xsicon icon-graduation-hat' => 'xsicon icon-graduation-hat',
			// 'xsicon icon-license' => 'xsicon icon-license',
			// 'xsicon icon-music-note' => 'xsicon icon-music-note',
			// 'xsicon icon-film-play' => 'xsicon icon-film-play',
			// 'xsicon icon-camera-video' => 'xsicon icon-camera-video',
			// 'xsicon icon-camera' => 'xsicon icon-camera',
			// 'xsicon icon-picture2' => 'xsicon icon-picture2',
			// 'xsicon icon-book' => 'xsicon icon-book',
			// 'xsicon icon-bookmark' => 'xsicon icon-bookmark',
			// 'xsicon icon-user2' => 'xsicon icon-user2',
			// 'xsicon icon-users' => 'xsicon icon-users',
			// 'xsicon icon-shirt' => 'xsicon icon-shirt',
			// 'xsicon icon-store' => 'xsicon icon-store',
			// 'xsicon icon-cart' => 'xsicon icon-cart',
			// 'xsicon icon-tag2' => 'xsicon icon-tag2',
			// 'xsicon icon-phone-handset' => 'xsicon icon-phone-handset',
			// 'xsicon icon-phone' => 'xsicon icon-phone',
			// 'xsicon icon-pushpin' => 'xsicon icon-pushpin',
			// 'xsicon icon-map-marker2' => 'xsicon icon-map-marker2',
			// 'xsicon icon-map' => 'xsicon icon-map',
			// 'xsicon icon-location' => 'xsicon icon-location',
			// 'xsicon icon-calendar-full' => 'xsicon icon-calendar-full',
			// 'xsicon icon-keyboard' => 'xsicon icon-keyboard',
			// 'xsicon icon-spell-check' => 'xsicon icon-spell-check',
			// 'xsicon icon-screen' => 'xsicon icon-screen',
			// 'xsicon icon-smartphone' => 'xsicon icon-smartphone',
			// 'xsicon icon-tablet' => 'xsicon icon-tablet',
			// 'xsicon icon-laptop' => 'xsicon icon-laptop',
			// 'xsicon icon-laptop-phone' => 'xsicon icon-laptop-phone',
			// 'xsicon icon-power-switch' => 'xsicon icon-power-switch',
			// 'xsicon icon-bubble' => 'xsicon icon-bubble',
			// 'xsicon icon-heart-pulse' => 'xsicon icon-heart-pulse',
			// 'xsicon icon-construction' => 'xsicon icon-construction',
			// 'xsicon icon-pie-chart' => 'xsicon icon-pie-chart',
			// 'xsicon icon-chart-bars' => 'xsicon icon-chart-bars',
			// 'xsicon icon-gift' => 'xsicon icon-gift',
			// 'xsicon icon-diamond2' => 'xsicon icon-diamond2',
			// 'xsicon icon-dinner' => 'xsicon icon-dinner',
			// 'xsicon icon-coffee-cup' => 'xsicon icon-coffee-cup',
			// 'xsicon icon-leaf2' => 'xsicon icon-leaf2',
			// 'xsicon icon-paw' => 'xsicon icon-paw',
			// 'xsicon icon-rocket' => 'xsicon icon-rocket',
			// 'xsicon icon-briefcase' => 'xsicon icon-briefcase',
			// 'xsicon icon-bus2' => 'xsicon icon-bus2',
			// 'xsicon icon-car2' => 'xsicon icon-car2',
			// 'xsicon icon-train' => 'xsicon icon-train',
			// 'xsicon icon-bicycle2' => 'xsicon icon-bicycle2',
			// 'xsicon icon-wheelchair' => 'xsicon icon-wheelchair',
			// 'xsicon icon-select' => 'xsicon icon-select',
			// 'xsicon icon-earth' => 'xsicon icon-earth',
			// 'xsicon icon-smile' => 'xsicon icon-smile',
			// 'xsicon icon-sad22' => 'xsicon icon-sad22',
			// 'xsicon icon-neutral' => 'xsicon icon-neutral',
			// 'xsicon icon-mustache' => 'xsicon icon-mustache',
			// 'xsicon icon-alarm' => 'xsicon icon-alarm',
			// 'xsicon icon-bullhorn' => 'xsicon icon-bullhorn',
			// 'xsicon icon-volume-high' => 'xsicon icon-volume-high',
			// 'xsicon icon-volume-medium' => 'xsicon icon-volume-medium',
			// 'xsicon icon-volume-low' => 'xsicon icon-volume-low',
			// 'xsicon icon-volume' => 'xsicon icon-volume',
			// 'xsicon icon-mic2' => 'xsicon icon-mic2',
			// 'xsicon icon-hourglass' => 'xsicon icon-hourglass',
			// 'xsicon icon-undo' => 'xsicon icon-undo',
			// 'xsicon icon-redo' => 'xsicon icon-redo',
			// 'xsicon icon-sync' => 'xsicon icon-sync',
			// 'xsicon icon-history' => 'xsicon icon-history',
			// 'xsicon icon-clock22' => 'xsicon icon-clock22',
			// 'xsicon icon-download3' => 'xsicon icon-download3',
			// 'xsicon icon-upload' => 'xsicon icon-upload',
			// 'xsicon icon-enter-down' => 'xsicon icon-enter-down',
			// 'xsicon icon-exit-up' => 'xsicon icon-exit-up',
			// 'xsicon icon-bug' => 'xsicon icon-bug',
			// 'xsicon icon-code2' => 'xsicon icon-code2',
			// 'xsicon icon-link' => 'xsicon icon-link',
			// 'xsicon icon-unlink' => 'xsicon icon-unlink',
			// 'xsicon icon-thumbs-up' => 'xsicon icon-thumbs-up',
			// 'xsicon icon-thumbs-down' => 'xsicon icon-thumbs-down',
			// 'xsicon icon-magnifier' => 'xsicon icon-magnifier',
			// 'xsicon icon-cross' => 'xsicon icon-cross',
			// 'xsicon icon-menu' => 'xsicon icon-menu',
			// 'xsicon icon-list' => 'xsicon icon-list',
			// 'xsicon icon-chevron-up' => 'xsicon icon-chevron-up',
			// 'xsicon icon-chevron-down' => 'xsicon icon-chevron-down',
			// 'xsicon icon-chevron-left' => 'xsicon icon-chevron-left',
			// 'xsicon icon-chevron-right' => 'xsicon icon-chevron-right',
			// 'xsicon icon-arrow-up' => 'xsicon icon-arrow-up',
			// 'xsicon icon-arrow-down' => 'xsicon icon-arrow-down',
			// 'xsicon icon-arrow-left' => 'xsicon icon-arrow-left',
			// 'xsicon icon-arrow-right' => 'xsicon icon-arrow-right',
			// 'xsicon icon-move' => 'xsicon icon-move',
			// 'xsicon icon-warning' => 'xsicon icon-warning',
			// 'xsicon icon-question-circle' => 'xsicon icon-question-circle',
			// 'xsicon icon-menu-circle' => 'xsicon icon-menu-circle',
			// 'xsicon icon-checkmark-circle' => 'xsicon icon-checkmark-circle',
			// 'xsicon icon-cross-circle' => 'xsicon icon-cross-circle',
			// 'xsicon icon-plus-circle' => 'xsicon icon-plus-circle',
			// 'xsicon icon-circle-minus' => 'xsicon icon-circle-minus',
			// 'xsicon icon-arrow-up-circle' => 'xsicon icon-arrow-up-circle',
			// 'xsicon icon-arrow-down-circle' => 'xsicon icon-arrow-down-circle',
			// 'xsicon icon-arrow-left-circle' => 'xsicon icon-arrow-left-circle',
			// 'xsicon icon-arrow-right-circle' => 'xsicon icon-arrow-right-circle',
			// 'xsicon icon-chevron-up-circle' => 'xsicon icon-chevron-up-circle',
			// 'xsicon icon-chevron-down-circle' => 'xsicon icon-chevron-down-circle',
			// 'xsicon icon-chevron-left-circle' => 'xsicon icon-chevron-left-circle',
			// 'xsicon icon-chevron-right-circle' => 'xsicon icon-chevron-right-circle',
			// 'xsicon icon-crop' => 'xsicon icon-crop',
			// 'xsicon icon-frame-expand' => 'xsicon icon-frame-expand',
			// 'xsicon icon-frame-contract' => 'xsicon icon-frame-contract',
			// 'xsicon icon-layers2' => 'xsicon icon-layers2',
			// 'xsicon icon-funnel' => 'xsicon icon-funnel',
			// 'xsicon icon-text-format' => 'xsicon icon-text-format',
			// 'xsicon icon-text-size' => 'xsicon icon-text-size',
			// 'xsicon icon-bold' => 'xsicon icon-bold',
			// 'xsicon icon-italic' => 'xsicon icon-italic',
			// 'xsicon icon-underline' => 'xsicon icon-underline',
			// 'xsicon icon-strikethrough' => 'xsicon icon-strikethrough',
			// 'xsicon icon-highlight' => 'xsicon icon-highlight',
			// 'xsicon icon-text-align-left' => 'xsicon icon-text-align-left',
			// 'xsicon icon-text-align-center' => 'xsicon icon-text-align-center',
			// 'xsicon icon-text-align-right' => 'xsicon icon-text-align-right',
			// 'xsicon icon-text-align-justify' => 'xsicon icon-text-align-justify',
			// 'xsicon icon-line-spacing' => 'xsicon icon-line-spacing',
			// 'xsicon icon-indent-increase' => 'xsicon icon-indent-increase',
			// 'xsicon icon-indent-decrease' => 'xsicon icon-indent-decrease',
			// 'xsicon icon-page-break' => 'xsicon icon-page-break',
			// 'xsicon icon-hand2' => 'xsicon icon-hand2',
			// 'xsicon icon-pointer-up' => 'xsicon icon-pointer-up',
			// 'xsicon icon-pointer-right' => 'xsicon icon-pointer-right',
			// 'xsicon icon-pointer-down' => 'xsicon icon-pointer-down',
			// 'xsicon icon-pointer-left' => 'xsicon icon-pointer-left',
		);

		return $icons;
	}

	/**
	 * Retrieve icons control default settings.
	 *
	 * Get the default settings of the icons control. Used to return the default
	 * settings while initializing the icons control.
	 *
	 * @since 1.0.0
	 * @access protected
	 *
	 * @return array Control default settings.
	 */

	protected function get_default_settings() {
		return [
			'options' => self::get_icons(),
		];
	}

	/**
	 * Render icons control output in the editor.
	 *
	 * Used to generate the control HTML in the editor using Underscore JS
	 * template. The variables for the class are available using `data` JS
	 * object.
	 *
	 * @since 1.0.0
	 * @access public
	 */

	public function content_template() {
		?>
		<div class="elementor-control-field">
			<label class="elementor-control-title">{{{ data.label }}}</label>
			<div class="elementor-control-input-wrapper">
				<select class="elementor-control-icon" data-setting="{{ data.name }}" data-placeholder="<?php esc_attr_e( 'Select Icon', 'geobin' ); ?>">
					<option value=""><?php esc_attr_e( 'Select Icon', 'geobin' ); ?></option>
					<# _.each( data.options, function( option_title, option_value ) { #>
					<option value="{{ option_value }}">{{{ option_title }}}</option>
					<# } ); #>
				</select>
			</div>
		</div>
		<# if ( data.description ) { #>
		<div class="elementor-control-field-description">{{ data.description }}</div>
		<# } #>
		<?php
	}

}
