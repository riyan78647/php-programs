<?php
function generateResume($data) {
    $resume = "Name: {$data['name']}\n";
    $resume .= "Email: {$data['email']}\n";
    $resume .= "Skills:\n";
    foreach ($data['skills'] as $skill) {
        $resume .= "- $skill";
    }
    return $resume;
}

$resumeData = [
    'name' => 'jadeja kuldeepsinh',
    'email' => 'kpj1304@gmail.com',
    'skills' => ['PHP', 'JavaScript', 'HTML', 'CSS']
];

echo nl2br(generateResume($resumeData));
?>
