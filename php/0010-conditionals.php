<?php

$score = 195;
if ($score > 90) {
    echo 'A';
    if ($score > 95) {
        echo '+';
    }
} elseif ($score > 80) {
    echo 'B';
} else {
    echo 'C';
}

// in html
?>

<?php if ($score >= 90): ?>
    <strong>A</strong>
<?php elseif ($score > 80): ?>
    <strong>B</strong>
<?php else: ?>
    <strong>C</strong>
<?php endif; ?>
