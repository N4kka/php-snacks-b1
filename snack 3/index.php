<?php
// Create a nested array. Every son will have a data as key formatted in this way: DD-MM-YY and a linked post as value

$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2',
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3',
        ],
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4',
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5',
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6',
        ],
    ],  
];

$keys = array_keys($posts);

for($i = 0;$i < count($keys); $i++) {
    $current_key = $keys[$i];
    echo '<h2>' . $current_key . '</h2>';
    $current_key_post = $posts[$current_key];
    for($j = 0; $j < count($current_key_post);$i++) {
        $current_post = $current_key_post[$j];
        echo '<h2>' . $current_post['title'] . '</h2>';
        echo '<h2>' . $current_post['author'] . '</h2>';
        echo '<h2>' . $current_post['text'] . '</h2>';
    }
}
?>