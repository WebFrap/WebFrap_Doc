<?php


/**
 * start code
 */
function start_highlight()
{

  ob_start();

}//end function start_highlight */

/**
 * start code
 */
function display_highlight( $lang = 'php', $code = null )
{

  if( is_null( $code ) )
  {
    $code = ob_get_contents();
    ob_end_clean();
  }
  
  if( class_exists('GeSHi') )
  {
    $geshi = new GeSHi($code, $lang);
    $geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS, 10);
    $geshi->set_line_style( 'background: #fcfcfc;', 'background: #f0f0f0;' );
    
    echo '<div style="width:750px;margin-bottom:10px;" >'.$geshi->parse_code().'</div>';
  }
  else 
  {
    echo '<pre style="width:750px;margin-bottom:10px;" >'.htmlentities($code,ENT_QUOTES,'utf-8').'</pre>';
  }

  
  
  
}//end function display_highlight */