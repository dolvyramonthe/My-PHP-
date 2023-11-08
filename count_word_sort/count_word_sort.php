<?php
function count_word_sort($file_path) {

    if (!file_exists($file_path)) {
        echo "$file_path: FILE: No such file or directory\n";
        return;
    }

    if (is_dir($file_path)) {
        echo "$file_path: FILE: Is a directory\n";
        return;
    }

    if (!is_readable($file_path)) {
        echo "$file_path: FILE: Permission denied\n";
        return;
    }

    $content = file_get_contents($file_path);

    if ($content === false) {
        echo "$file_path: FILE: Cannot open file\n";
        return;
    }

    $cleaned_content = preg_replace('/[^\w\s]/', ' ', $content);

    $cleaned_content = strtolower($cleaned_content);

    $words = str_word_count($cleaned_content, 1);

    $word_counts = array_count_values($words);

    uksort($word_counts, function ($a, $b) {
        return strcmp($a, $b);
    });

    foreach ($word_counts as $word => $count) {
        echo "$word => $count\n";
    }
}

if (isset($argv[1])) {
    count_word_sort($argv[1]);
} else {
    echo "Veuillez spécifier un chemin d'accès au fichier en tant qu'argument.\n";
}
?>
