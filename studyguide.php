<?php
$flashcards = [
    [
        "question" => "What is a set?",
        "answer" => "A collection of distinct objects."
    ],
    [
        "question" => "What is an element?",
        "answer" => "An individual object within a set."
    ],
    [
        "question" => "What does 'a ∈ S' mean?",
        "answer" => "a is an element of S."
    ],
    [
        "question" => "What does 'a ∉ S' mean?",
        "answer" => "a is not an element of S."
    ],
    [
        "question" => "What is a subset?",
        "answer" => "A ⊆ B means every element in A is also in B."
    ],
    [
        "question" => "What is a proper subset?",
        "answer" => "A ⊂ B means A is a subset of B and A ≠ B."
    ],
    [
        "question" => "What is the union of sets A and B?",
        "answer" => "A ∪ B is the set containing all elements in A or B."
    ],
    [
        "question" => "What is the intersection of sets A and B?",
        "answer" => "A ∩ B is the set containing elements common to both A and B."
    ],
    [
        "question" => "What is the difference of sets A and B?",
        "answer" => "A - B is the set containing elements in A but not in B."
    ],
    [
        "question" => "What is the complement of set A?",
        "answer" => "A^c is the set containing all elements not in A."
    ],
    [
        "question" => "What is the empty set?",
        "answer" => "A set with no elements, denoted by ∅."
    ],
    [
        "question" => "When are two sets A and B equal?",
        "answer" => "A = B means A ⊆ B and B ⊆ A."
    ],
    [
        "question" => "What is a power set?",
        "answer" => "The set of all subsets of a given set S, including ∅ and S itself."
    ],
    [
        "question" => "What is a function?",
        "answer" => "A function f : X → Y maps each element x ∈ X (domain) to a unique element y ∈ Y (co-domain)."
    ],
    [
        "question" => "What is an identity function?",
        "answer" => "IX(x) = x for each x ∈ X."
    ],
    [
        "question" => "What is the Hamming distance function?",
        "answer" => "Measures the number of positions where two strings of the same length differ."
    ],
    [
        "question" => "What is a well-defined function?",
        "answer" => "A rule that assigns a unique output for each input."
    ],
    [
        "question" => "When are two functions f and g equal?",
        "answer" => "f(x) = g(x) for all x in the domain."
    ]
];

$html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Flashcard Study Guide</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .flashcard { border: 1px solid #ccc; padding: 20px; margin: 10px; }
        .question { font-weight: bold; }
    </style>
</head>
<body>
    <h1>Flashcard Study Guide</h1>";

foreach ($flashcards as $card) {
    $html .= "<div class='flashcard'>
                <div class='question'>{$card['question']}</div>
                <div class='answer'>{$card['answer']}</div>
              </div>";
}

$html .= "</body>
</html>";

file_put_contents('flashcards.html', $html);
echo "Flashcards have been generated in 'flashcards.html'.";
?>
