<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>LKPBU</title>
</head>
<meta charset="utf-8" />
<title>LKPBU</title>
<?php
session_start();
?>
<script src="mootools.js"></script>
<script src="Form.MultipleFileInput.js"></script>
<script src="Form.Upload.js"></script>
<script src="Request.File.js"></script>
<script src="iFrameFormRequest.js"></script>
<script src="jquery-1.11.2.min.js"></script>
<!--link href="stylemenuhoriz.css" rel="stylesheet" /-->
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<script src="../jqueryforms/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<script type="text/javascript" src="jquery-1.3.2.js"></script>

<body>



<?php

$now = time(); // Checking the time now when home page starts.
include "koneksi.php";
if (!isset($_GET["userid"])) {
	if (!isset($_POST["userid"])) 
		$userid=0;
	else
		$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//--------------------------------------------------------------------

	date_default_timezone_set("Asia/Jakarta");
	$waktuiki = date("dmY");
	//$source = "C:\\wamp\\www\\deviden\\DOC";
	$source = "../../../wamp/www/lkpbu/DOC";
	$destination = "../../../wamp/BACKUP/lkpbu" . $waktuiki;	
	copy_directory($source, $destination);
	//zipme($source, $waktuiki);
	////copyr($source, $destination);

	
    // db config
    $dbhost = "localhost";
    $dbuser = "myroot";
    $dbpass = "adminku";
    $dbname = "lkpbu";
    // db connect
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // file header stuff
    $output = "-- PHP MySQL Dump\n--\n";
    $output .= "-- Host: $dbhost\n";
    $output .= "-- Generated: " . date("r", time()) . "\n";
    $output .= "-- PHP Version: " . phpversion() . "\n\n";
    $output .= "SET SQL_MODE=\"NO_AUTO_VALUE_ON_ZERO\";\n\n";
    $output .= "--\n-- Database: `$dbname`\n--\n";

    // get all table names in db and stuff them into an array
    $tables = array();
    $stmt = $pdo->query("SHOW TABLES");
    while($row = $stmt->fetch(PDO::FETCH_NUM)){
        $tables[] = $row[0];
    }
    // process each table in the db
    foreach($tables as $table){
        $fields = "";
        $sep2 = "";
        $output .= "\n-- " . str_repeat("-", 60) . "\n\n";
        $output .= "--\n-- Table structure for table `$table`\n--\n\n";
        // get table create info
        $stmt = $pdo->query("SHOW CREATE TABLE $table");
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $output.= $row[1].";\n\n";
        // get table data
        $output .= "--\n-- Dumping data for table `$table`\n--\n\n";
        $stmt = $pdo->query("SELECT * FROM $table");
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            // runs once per table - create the INSERT INTO clause
            if($fields == ""){
                $fields = "INSERT INTO `$table` (";
                $sep = "";
                // grab each field name
                foreach($row as $col => $val){
                    $fields .= $sep . "`$col`";
                    $sep = ", ";
                }
                $fields .= ") VALUES";
                $output .= $fields . "\n";
            }
            // grab table data
            $sep = "";
            $output .= $sep2 . "(";
            foreach($row as $col => $val){
                // add slashes to field content
                $val = addslashes($val);
                // replace stuff that needs replacing
                $search = array("\'", "\n", "\r");
                $replace = array("''", "\\n", "\\r");
                $val = str_replace($search, $replace, $val);
                $output .= $sep . "'$val'";
                $sep = ", ";
            }
            // terminate row data
            $output .= ")";
            $sep2 = ",\n";
        }
        // terminate insert data
        $output .= ";\n";
    }  


?>
<script>
alert("OKE");
</script>

<meta http-equiv="refresh" content="0; url=backupdata.php?userid=<?php echo $userid;?>&statusfile=1" />

<?php
    // output file to browser

    header('Content-Description: File Transfer');
    header('Content-type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . $dbname . "_" . date('d-m-Y') . '.sql');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . strlen($output));
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Expires: 0');
    header('Pragma: public');
    //echo $output;


?>



<?php
//****************************************************************************************************
//****************************************************************************************************

    function copy_directory( $source, $destination ) {
        if ( is_dir( $source ) ) {
        @mkdir( $destination );
        $directory = dir( $source );
        while ( FALSE !== ( $readdirectory = $directory->read() ) ) {
            if ( $readdirectory == '.' || $readdirectory == '..' ) {
                continue;
            }
            $PathDir = $source . '/' . $readdirectory; 
            if ( is_dir( $PathDir ) ) {
                copy_directory( $PathDir, $destination . '/' . $readdirectory );
                continue;
            }
            copy( $PathDir, $destination . '/' . $readdirectory );
        }

        $directory->close();
        }else {
        copy( $source, $destination );
        }
    }
	
//***********************************************************************************************
	

	
//***********************************************************************************************
//**
function copyr($source, $dest)
{
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }
    
    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        copyr("$source/$entry", "$dest/$entry");
    }

    // Clean up
    $dir->close();
    return true;
}
//***************************************************************************************************
function zipme($source, $waktu)
{
// define some basics
$rootPath = $source;
$archiveName = '../../../wamp/www/lkpbu/backuplkpbu_' . $waktu . '.zip';


// initialize the ZIP archive
$zip = new ZipArchive;
$zip->open($archiveName, ZipArchive::CREATE);

// create recursive directory iterator
$files = new RecursiveIteratorIterator (new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY);

// let's iterate
foreach ($files as $name => $file) {
	$filePath = $file->getRealPath();
	$zip->addFile($filePath);
}

// close the zip file
if (!$zip->close()) {
	echo '<p>There was a problem writing the ZIP archive.</p>';
} else {
	echo '<p>Successfully created the ZIP Archive!</p>';
}
}
	
?>
</body>
</html>