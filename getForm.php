<?php
ini_set('display_errors', 1);

print_r($_FILES['modelfile']);

$file = isset($_FILES['modelfile']) ? $_FILES['modelfile'] : null;

if (is_null($file)) {
  print "There is no files.";
  exit;
}

// if ($file['error'] !== 0) {
//   print "Transfers failed.";
//   exit;
// }

// $modeldir = '/www/AR/20201002_WebXR/models/';
$modeldir = '/Users/masayukitanaka/Documents/GitHub/ModelViewer/models/';
// chmod($modeldir, 0777);
$tempfile = $_FILES['modelfile']['tmp_name'];
print "tempfile: " . $tempfile;

$filename = $modeldir . $_FILES['modelfile']['name'];

if(is_uploaded_file($tempfile)) {
  if(move_uploaded_file($tempfile, $filename)) {
    chmod($filename, 0644);
    print $filename . " Uploaded.";
  } else {
    print "Upload failed.";
  }
} else {
  print "tempfile is not exist.";
}

?>