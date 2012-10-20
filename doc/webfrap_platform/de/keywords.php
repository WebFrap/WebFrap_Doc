<?php 

function kw( $key )
{
  static $kw = array
  (
    'platform.name' => 'WebFrap Plattform'
  );
  
  echo isset( $kw[$key] )? $kw[$key] : '??'.$key.'??';
}

