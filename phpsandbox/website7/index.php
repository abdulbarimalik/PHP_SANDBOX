<?php 
	$path = '/dir0/dir1/myfile.php';
	$file = 'file1.txt';

/*	//Return filename
	echo basename($path);

	//Return file name without ext
	echo basename($path, '.php');

	// Return the dir name from path
	//echo dirname($path);

	// Check if the file exists
	echo file_exists($file);

	// Get Absolute path
	echo realpath($file);

	// Check to see if file
	echo is_file($file), "<br>";

	echo file_exists('test');

	// Check if writeable
	echo is_writable($file);

	// Check if readable
	echo is_readable($file);

	// Get the File Size
	echo filesize($file);

	// Create a Directory or Folder
	mkdir('testing');

	// Remove Directory: rmdir(); --> Delete Directory as long as no file's in it, if empty
	rmdir('testing');	

	// Copy File
	echo copy('file1.txt', 'file2.txt');

	// Rename the File
	rename('file2.txt', 'myfile.txt');

	// Delete File
	unlink('myfile.txt');

	// Write from file to string
	echo file_get_contents($file);

	// Write String to the file
	echo file_put_contents($file, 'Babu The Great');

	$current = file_get_contents($file);

	$current .= ' Good Bye';

	file_put_contents($file, $current);

	// Open File For Reading
	$handle = fopen($file, 'r');
	$data = fread($handle, filesize($file));
	echo $data;
	fclose($handle);
*/
	// Open file for writing
	$handle = fopen('file2.txt', 'w');
	$txt = "Babu Danger\n";
	fwrite($handle, $txt);
	$txt = "Abdul Malik\n";
	fwrite($handle, $txt);
	fclose($handle);

?>