<?php

// VC [message_box_wp]

vc_map(array(
   "name" 			=> "MGT Message Box",
   "category" 		=> 'TheBuilt Content',
   "description"	=> "Message box with text",
   "base" 			=> "mgt_message_box_wp",
   "class" 			=> "",
   "icon" 			=> "vc_mgt_messagebox",
   
   "params" 	=> array(

		array(
			"type"			=> "dropdown",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Message style",
			"param_name"	=> "message_type",
			"value"			=> array(
				"Success"	=> "mgt-message-box-message",
				"Info"	=> "mgt-message-box-info",
				"Warning"	=> "mgt-message-box-warning",
				"Error"		=> "mgt-message-box-error"
			),
			"description"	=> "",
			"std"			=> "mgt-message-box-message",
		),
		array(
			"type"			=> "textfield",
			"holder"		=> "div",
			"class" 		=> "hide_in_vc_editor",
			"admin_label" 	=> true,
			"heading"		=> "Message text",
			"description"	=> "",
			"param_name"	=> "message_text",
			"std"			=> "",
		),
		
   )
   
));