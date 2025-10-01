<?php
function generate_resume($name, $age, $skills) {
    return sprintf(
        "Name: %s\nAge: %d\nSkills:\n- %s",
        $name,
        $age,
        implode("\n- ", $skills)
    );
}

$name = "riyan";
$age = 22;
$skills = ["Python", "PHP", "SQL"];

echo generate_resume($name, $age, $skills);
?>
