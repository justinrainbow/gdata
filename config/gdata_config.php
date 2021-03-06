<?php
/**
 * Coniguration options for Gdata API
 */
class GDATA_CONFIG {

  var $analytics = array(
    'datasource' => 'gdata',
    'driver' => 'analytics',
    'email' => '',
    'passwd' => '',
    'profileId' => '',
    'source' => 'CakePHP',
  );

  var $youtube = array(
    'datasource' => 'gdata',
    'driver' => 'youtube',
    'email' => '',
    'passwd' => '',
    'source' => 'CakePHP',
  );
	
	var $picasa = array(
		'datasource' => 'gdata',
		'driver' => 'picasa',
		'email' => '',
		'passwd' => '',
		'source' => 'CakePHP',
		'cache' => true,
		'cacheDuration' => '+1 hours'
	);

}
?>
