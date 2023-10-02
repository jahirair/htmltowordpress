<?php 
//multiple field in customizer. 
//Add these two lines in functions.php
//*require get_template_directory().'/incl/customizer_with_many_input.php';
//new triangle_customizer();uses:<?php echo get_theme_mod('header_top_bar_text_phone_setting'); *//


//Add Custom Section and setting to the admin Customizer

class triangle_customizer{

public function __construct(){
	add_action('customize_register', array($this, 'register_customize_section'));
}

public function register_customize_section($wp_customize){
	//initialize header top bar section
	$this->triangle_cta($wp_customize);
	$this->triangle_aboutus($wp_customize);
	$this->triangle_socialLinks($wp_customize);
	$this->copyright_section($wp_customize);
}

// CTA section, setting,control
private function triangle_cta($wp_customize){
	//Add panel
	$wp_customize->add_section('basic_triangle_cta',array(
		'title'=>'CTA',
		'priority'=>2,
		'description'=>__('This is for CTA only','triangle')
	));
	
	
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('cta_title',array(
		'default' =>'',
		'sanitize_callback' => array($this,'sanitize_cta_title') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'cta_title_control',array(
		'label' =>'Write your CTA title here',
		'section' =>'basic_triangle_cta',
		'settings' =>'cta_title',
		'type' => 'text'
		
	)));
	
	//.....Display another input. phone......
	
	//Add setting
	$wp_customize->add_setting('cta_title_description_setting',array(
		'default' =>'',
		'sanitize_callback' => array($this,'sanitize_cta_title_description') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'cta_title_description_control',array(
		'label' =>'Write your CTA description here.',
		'section' =>'basic_triangle_cta',
		'settings' =>'cta_title_description_setting',
		'type' => 'text'
	)));
	
	
	//.....Display another input. Opening......
	
	//Add setting
	$wp_customize->add_setting('cta_link_text_setting',array(
		'default' => '',
		'sanitize_callback' => array($this,'sanitize_cta_link_text') 
	));
	//Add Control. you can use WP_Customize_Cropped_Image_Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'cta_link_text_control',array(
		'label' =>'Write Your CTA Link Text',
		'section' =>'basic_triangle_cta',
		'settings' =>'cta_link_text_setting',
		'type' => 'text'		
	)));
	//.....Display another input. Email......
	
	//Add setting
	$wp_customize->add_setting('cta_link_setting',array(
		'default' => '',
		'sanitize_callback' => array($this,'sanitize_cta_link') 
	));
	//Add Control. you can use WP_Customize_Cropped_Image_Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'cta_link_control',array(
		'label' =>'Give Your CTA Link',
		'section' =>'basic_triangle_cta',
		'settings' =>'cta_link_setting',
		'type' => 'text'		
	)));
}
// About Us section, setting,control
private function triangle_aboutus($wp_customize){
	//Add panel
	$wp_customize->add_section('basic_triangle_aboutus',array(
		'title'=>'About Us',
		'priority'=>2,
		'description'=>__('This is for About Us only','triangle')
	));
	
	
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('aboutus_title',array(
		'default' =>'',
		'sanitize_callback' => array($this,'sanitize_aboutus_title') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'aboutus_title_control',array(
		'label' =>'Write your About Us title here',
		'section' =>'basic_triangle_aboutus',
		'settings' =>'aboutus_title',
		'type' => 'text'
		
	)));
	
	//.....Display another input. phone......
	
	//Add setting
	$wp_customize->add_setting('aboutus_title_description_setting',array(
		'default' =>'',
		'sanitize_callback' => array($this,'sanitize_aboutus_title_description') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'aboutus_title_description_control',array(
		'label' =>'Write your About Us description here.',
		'section' =>'basic_triangle_aboutus',
		'settings' =>'aboutus_title_description_setting',
		'type' => 'textarea'
	)));
	

	//.....Display another input. Email......
	
	//Add setting
	$wp_customize->add_setting('aboutus_link_setting',array(
		'default' => '',
		'sanitize_callback' => array($this,'sanitize_aboutus_link') 
	));
	//Add Control. you can use WP_Customize_Cropped_Image_Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'cta_link_control',array(
		'label' =>'Give Your About Us Image Link',
		'section' =>'basic_triangle_aboutus',
		'settings' =>'aboutus_link_setting',
		'type' => 'text'		
	)));
}
// Site Social Link section, setting,control
private function triangle_socialLinks($wp_customize){
	//Add panel
	$wp_customize->add_section('basic_triangle_socialLinks',array(
		'title'=>'Business Social Links',
		'priority'=>2,
		'description'=>__('This is for Social Links in top only','triangle')
	));
	
	
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('socialLinks_facebook',array(
		'default' =>'',
		'sanitize_callback' => array($this,'socialLinks_facebook') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'socialLinks_facebook_control',array(
		'label' =>'Give your Business Facebook Link Here',
		'section' =>'basic_triangle_socialLinks',
		'settings' =>'socialLinks_facebook',
		'type' => 'text'
		
	)));
	
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('socialLinks_twitter',array(
		'default' =>'',
		'sanitize_callback' => array($this,'socialLinks_twitter') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'socialLinks_twitter_control',array(
		'label' =>'Give your Business Twitter Link Here',
		'section' =>'basic_triangle_socialLinks',
		'settings' =>'socialLinks_twitter',
		'type' => 'text'
		
	)));
    
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('socialLinks_googlePlus',array(
		'default' =>'',
		'sanitize_callback' => array($this,'socialLinks_googlePlus') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'socialLinks_googlePlus_control',array(
		'label' =>'Give your Business Google Plus Link Here',
		'section' =>'basic_triangle_socialLinks',
		'settings' =>'socialLinks_googlePlus',
		'type' => 'text'
		
	)));
	


	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('socialLinks_dribble',array(
		'default' =>'',
		'sanitize_callback' => array($this,'socialLinks_dribble') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'socialLinks_dribble_control',array(
		'label' =>'Give your Business Dribble Link Here',
		'section' =>'basic_triangle_socialLinks',
		'settings' =>'socialLinks_dribble',
		'type' => 'text'
		
	)));
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('socialLinks_linkedIn',array(
		'default' =>'',
		'sanitize_callback' => array($this,'socialLinks_linkedIn') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'socialLinks_linkedIn_control',array(
		'label' =>'Give your Business LinkedIn Link Here',
		'section' =>'basic_triangle_socialLinks',
		'settings' =>'socialLinks_linkedIn',
		'type' => 'text'
		
	)));
	
}
private function copyright_section($wp_customize){
	//Add panel
	$wp_customize->add_section('copyright_text_section',array(
		'title'=>'Copy Right Text',
		'priority'=>3,
		'description'=>__('This is for copyright text','triangle')
	));
	
	
	//.....Display another input. text......
	//Add setting
	$wp_customize->add_setting('copyright_text_settings',array(
		'default' =>'',
		'sanitize_callback' => array($this,'sanitize_copyright_text') 
	));
	//Add Control
	$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'copyright_text_control',array(
		'label' =>'Write your copy right text here',
		'section' =>'copyright_text_section',
		'settings' =>'copyright_text_settings',
		'type' => 'text'
		
	)));
}
//SANITIZE FUNCTIONS
//CTA
public function sanitize_cta_title($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function sanitize_cta_title_description($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}

public function sanitize_cta_link_text($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function sanitize_cta_link($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
//CTA End
//About Us
public function sanitize_aboutus_title($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function sanitize_aboutus_title_description($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}

public function sanitize_aboutus_link($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function sanitize_copyright_text($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
//About Us End
// Business Social Links
public function socialLinks_facebook($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function socialLinks_twitter($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function socialLinks_googlePlus($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function socialLinks_dribble($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}
public function socialLinks_linkedIn($input){
	return filter_var($input, FILTER_SANITIZE_STRING);
}


}

?>
