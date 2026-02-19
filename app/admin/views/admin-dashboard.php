<?php
ob_start();
?>

<?php
require_once __DIR__. '/../../../includes/sidebar.php';
?>


<?php
$content = ob_get_clean();
include __DIR__ . '/../../../includes/structure.php';
?>