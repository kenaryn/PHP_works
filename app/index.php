<?php
declare(strict_types=1);

// Controller
$dir = isset($_GET['dir']) ? $_GET['dir'] : '.';
$files = scandir($dir);
// <?=shell_exec('pwd');

$previous_dir = dirname($dir);

// Remove . and .. from visible hierarchy.
foreach ($files as $key => $val) {
  if ($val == '.' || $val == '..') {
    unset($files[$key]);
  }
}

// if ($previous_dir !='.')
//   $previous_link='index.php?dir='.$previous_dir;
// else
//   $previous_link = 'index.php';
// Properly format URI when navigating to top level.
$previous_link = $previous_dir != '.' ? 'index.php?dir='.$previous_dir : 'index.php';
// End of Controller
?>

<?php include_once './header.php'; ?>

<!-- View -->
<?php
  if ($dir != '.') {
    include_once './template_nav.php';
  }
?>

<ul>
<?php
foreach ($files as $key => $val) {
  if (is_dir($dir.'/'.$val)) {
    include './template_dir.php';
  } else {
    include './template_file.php';
  }
}
?>
</ul>
<!-- End of View -->

<?php include_once './footer.php'; ?>