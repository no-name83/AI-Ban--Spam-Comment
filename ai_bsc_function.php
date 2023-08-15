<?php

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! class_exists( 'bsc_all_func' ) ) {

  class bsc_all_func{
function bsc_create_db()
{
   $absc_api_key=update_option('bsc_api_key','');
 $absc_temperature=update_option('bsc_temperature','0.6');
 $absc_max_tokens=update_option('bsc_max_tokens','150');

$absc_top_p=update_option('bsc_top_p','1');

$absc_frequency_penalty=update_option('bsc_frequency_penalty','1');
$absc_presence_penalty=update_option('bsc_presence_penalty','1');
$absc_accepted_comment=update_option('bsc_accepted_comment','Pending');
$absc_rejected_comment=update_option('bsc_rejected_comment','Trash');
}


         function   bsc_delete_records(){


         $absc_api_key=delete_option('bsc_api_key');
 $absc_temperature=delete_option('bsc_temperature');
 $absc_max_tokens=delete_option('bsc_max_tokens','150');

$absc_top_p=delete_option('bsc_top_p','1');

$absc_frequency_penalty=delete_option('bsc_frequency_penalty');
$absc_presence_penalty=delete_option('bsc_presence_penalty');
$absc_accepted_comment=delete_option('bsc_accepted_comment');
$absc_rejected_comment=delete_option('bsc_rejected_comment');

}

   


         }
}

  //}



?>