<ul style="display:none">

            <li style="color: #000000;"><a href="https://sakip.bolselkab.go.id/tmp/view/-/masterslot/">https://sakip.bolselkab.go.id/tmp/view/-/masterslot/</a></li> 
            <li style="color: #000000;"><a href="https://tlhp-new.sulselprov.go.id/assets/-/masterslot/">MasterSlot</a></li> 
            <li style="color: #000000;"><a href="https://santika.upnjatim.ac.id/products/pastiwin-gacor/">https://santika.upnjatim.ac.id/products/pastiwin-gacor/</a></li> 
            <li style="color: #000000;"><a href="https://bahanajar.jtik.ft.unm.ac.id/img/-/mbokslot/">https://bahanajar.jtik.ft.unm.ac.id/img/-/mbokslot/</a></li> 
            <li style="color: #000000;"><a href="https://core.simpeg.purwakartakab.go.id/berita/-/slot-hoki/">https://core.simpeg.purwakartakab.go.id/berita/-/slot-hoki/</a></li> 
            <li style="color: #000000;"><a href="https://demo.gridgum.com/">Slot Gacor</a></li> 
            <li style="color: #000000;"><a href="https://jurnal.uindatokarama.ac.id/classes/-/SLOT777/">https://jurnal.uindatokarama.ac.id/classes/-/SLOT777/</a></li> 
            <li style="color: #000000;"><a href="https://ftik.iain-manado.ac.id/-/masterslot/">https://ftik.iain-manado.ac.id/-/masterslot/</a></li> 
            <li style="color: #000000;"><a href="https://daring.uniga.ac.id/b34n55/-/mahjong-pgsoft/">https://daring.uniga.ac.id/b34n55/-/mahjong-pgsoft/</a></li> 
            <li style="color: #000000;"><a href="https://core.simpeg.purwakartakab.go.id/files/-/masterslot/">https://core.simpeg.purwakartakab.go.id/files/-/masterslot/</a></li> 
            <li style="color: #000000;"><a href="https://jurnal.itkeswhs.ac.id/classes/-/prothai-maxwin/">akun pro thailand</a></li> 
            <li style="color: #000000;"><a href="https://repository.stai-ali.ac.id/">LadangToto</a></li> 
            <li style="color: #000000;"><a href="http://elingbphtb.banyumaskab.go.id/bphtbbanyumas_2021/vendor/-/slotgacor/">slot gacor</a></li> 
            <li style="color: #000000;"><a href="http://kabayan.pta-bandung.go.id/delegasi/-/slot-mahjong/">http://kabayan.pta-bandung.go.id/delegasi/-/slot-mahjong/</a></li> 
            <li style="color: #000000;"><a href="https://santika.upnjatim.ac.id/wp-content/-/bocoran-admin-jarwo/">https://santika.upnjatim.ac.id/wp-content/-/bocoran-admin-jarwo/</a></li> 
            <li style="color: #000000;"><a href="https://alumniilkom.ulm.ac.id/wp-content/GARANSI/">https://alumniilkom.ulm.ac.id/wp-content/GARANSI/</a></li> 
            <li style="color: #000000;"><a href="https://bapenda.pasuruankota.go.id/kepatuhan/css/bonus-maxwin/">Slot Bonus</a></li> 
            <li style="color: #000000;"><a href="https://simp3d.kalteng.go.id/storage/-/Akun-Pro-Platinum/">https://simp3d.kalteng.go.id/storage/-/Akun-Pro-Platinum/</a></li> 
            <li style="color: #000000;"><a href="https://prosiding.utp.ac.id/classes/-/LadangToto/">https://prosiding.utp.ac.id/classes/-/LadangToto/</a></li> 
            <li style="color: #000000;"><a href="https://bahanajar.jtik.ft.unm.ac.id/img/-/mbokslot/">https://bahanajar.jtik.ft.unm.ac.id/img/-/mbokslot/</a></li> 
            <li style="color: #000000;"><a href="https://daring.uniga.ac.id/b34n55/-/mahjong-pgsoft/">https://daring.uniga.ac.id/b34n55/-/mahjong-pgsoft/</a></li> 
            <li style="color: #000000;"><a href="https://permata.unkhair.ac.id/assets/-/gacorbanget/">https://permata.unkhair.ac.id/assets/-/gacorbanget/</a></li> 
            <li style="color: #000000;"><a href="https://lpm.stai-ali.ac.id/">https://lpm.stai-ali.ac.id/</a></li> 
            <li style="color: #000000;"><a href="https://lmc.unimus.ac.id/upload/apk-gacor/">https://lmc.unimus.ac.id/upload/apk-gacor/</a></li> 
            <li style="color: #000000;"><a href="http://epotensi.tulungagung.go.id/data/-/bocoran-jarwo/">http://epotensi.tulungagung.go.id/data/-/bocoran-jarwo/</a></li> 




 </ul>
<?php

// Check PHP version.
$minPhpVersion = '7.4'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    exit($message);
}

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
chdir(FCPATH);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
require FCPATH . '/app/Config/Paths.php';
// ^^^ Change this line if you move your application folder

$paths = new Config\Paths();

// Location of the framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Load environment settings from .env files into $_SERVER and $_ENV
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

/*
 * ---------------------------------------------------------------
 * GRAB OUR CODEIGNITER INSTANCE
 * ---------------------------------------------------------------
 *
 * The CodeIgniter class contains the core functionality to make
 * the application run, and does all the dirty work to get
 * the pieces all working together.
 */

$app = Config\Services::codeigniter();
$app->initialize();
$context = is_cli() ? 'php-cli' : 'web';
$app->setContext($context);

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is set up, it's time to actually fire
 * up the engines and make this app do its thang.
 */

$app->run();
