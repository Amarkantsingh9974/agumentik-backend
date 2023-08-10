<?php
// Simulating fetching dynamic content from the backend
$heroContent = array(
    'title' => 'Dynamic Hero Title',
    'subtitle' => 'This is a dynamic subtitle fetched from the backend.'
);

header('Content-Type: application/json');
echo json_encode($heroContent);
?>