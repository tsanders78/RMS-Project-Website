<?php
session_start();

$flashcards = [
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find A ∪ B.", 
    "answer" => "A ∪ B = {x ∈ ℝ | −3 ≤ x < 2}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find A ∩ B.", 
    "answer" => "A ∩ B = {x ∈ ℝ | −1 ≤ x < 0}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find Ac.", 
    "answer" => "Ac = {x ∈ ℝ | x ≤ −3 or x > 0}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find A ∪ C.", 
    "answer" => "A ∪ C = {x ∈ ℝ | −3 ≤ x ≤ 0 or 6 < x ≤ 8}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find A ∩ C.", 
    "answer" => "A ∩ C = ∅"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find Bc.", 
    "answer" => "Bc = {x ∈ ℝ | x ≤ −1 or x ≥ 2}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find Ac ∩ Bc.", 
    "answer" => "Ac ∩ Bc = {x ∈ ℝ | x ≤ −3 or x ≥ 2}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find Ac ∪ Bc.", 
    "answer" => "Ac ∪ Bc = {x ∈ ℝ | x < −3 or x ≥ 2}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find (A ∩ B)c.", 
    "answer" => "(A ∩ B)c = {x ∈ ℝ | x ≤ −1 or x ≥ 0}"],
    ["question" => "Let the universal set be ℝ, the set of all real numbers, and let 
    A = {x ∈ ℝ | −3 ≤ x ≤ 0}, 
    B = {x ∈ ℝ | −1 < x < 2},
    C = {x ∈ ℝ | 6 < x ≤ 8}. 
    Find (A ∪ B)c.", 
    "answer" => "(A ∪ B)c = {x ∈ ℝ | x < −3 or x ≥ 2}"],
        ["question" => "In each of (a)–(f), answer the following questions: Is A ⊆ B? Is B ⊆ A? Is either A or B a proper subset of the other?\n(a) A = {6, {6}, (6)²}, B = {6, {6}, {{6}}}\nIs A ⊆ B?\nYes\nNo", "answer" => "No"],
        ["question" => "Is B ⊆ A?\nYes\nNo", "answer" => "No"],
        ["question" => "Is either A or B a proper subset of the other?\nYes, A is a proper subset of B.\nYes, B is a proper subset of A.\nNo, neither is a proper subset of the other.", "answer" => "No, neither is a proper subset of the other."],
        
        ["question" => "(b) A = {3, 5² − 4², 24 mod 7}, B = {8 mod 5}\nIs A ⊆ B?\nYes\nNo", "answer" => "No"],
        ["question" => "Is B ⊆ A?\nYes\nNo", "answer" => "No"],
        ["question" => "Is either A or B a proper subset of the other?\nYes, A is a proper subset of B.\nYes, B is a proper subset of A.\nNo, neither is a proper subset of the other.", "answer" => "No, neither is a proper subset of the other."],
    
        ["question" => "(c) A = {{1, 2}, {2, 3}}, B = {1, 2, 3}\nIs A ⊆ B?\nYes\nNo", "answer" => "No"],
        ["question" => "Is B ⊆ A?\nYes\nNo", "answer" => "No"],
        ["question" => "Is either A or B a proper subset of the other?\nYes, A is a proper subset of B.\nYes, B is a proper subset of A.\nNo, neither is a proper subset of the other.", "answer" => "No, neither is a proper subset of the other."],
    
        ["question" => "(d) A = {a, b, c}, B = {{a}, {b}, {c}}\nIs A ⊆ B?\nYes\nNo", "answer" => "No"],
        ["question" => "Is B ⊆ A?\nYes\nNo", "answer" => "No"],
        ["question" => "Is either A or B a proper subset of the other?\nYes, A is a proper subset of B.\nYes, B is a proper subset of A.\nNo, neither is a proper subset of the other.", "answer" => "No, neither is a proper subset of the other."],
    
        ["question" => "(e) A = {25, {5}}, B = {5}\nIs A ⊆ B?\nYes\nNo", "answer" => "No"],
        ["question" => "Is B ⊆ A?\nYes\nNo", "answer" => "No"],
        ["question" => "Is either A or B a proper subset of the other?\nYes, A is a proper subset of B.\nYes, B is a proper subset of A.\nNo, neither is a proper subset of the other.", "answer" => "No, neither is a proper subset of the other."],
    
        ["question" => "(f) A = {x ∈ ℝ | cos(x) ∈ ℤ}, B = {x ∈ ℝ | sin(x) ∈ ℤ}\nIs A ⊆ B?\nYes\nNo", "answer" => "No"],
        ["question" => "Is B ⊆ A?\nYes\nNo", "answer" => "No"],
        ["question" => "Is either A or B a proper subset of the other?\nYes, A is a proper subset of B.\nYes, B is a proper subset of A.\nNo, neither is a proper subset of the other.", "answer" => "No, neither is a proper subset of the other."],
    
        ["question" => "If X and Y are any sets, which of the following exactly expresses what it means for X ⊆ Y to be false?\nNo element in Y is in X.\nNo element in X is in Y.\nThere is an element in X that is not in Y.\nThere is an element in Y that is not in X.", "answer" => "There is an element in X that is not in Y."],
        
        ["question" => "Let A = {n ∈ Z | n = 5r for some integer r} and B = {m ∈ Z | m = 20s for some integer s}. Determine which of the following statements are true and which are false.\n(a) A ⊆ B", "answer" => "True"],
        ["question" => "(b) B ⊆ A", "answer" => "False"],
        
        ["question" => "Complete the following sentences without using the symbols ∪, ∩, or −.\n(a) x ∉ A ∪ B if, and only if, x ∉ A and x ∉ B.", "answer" => "Correct"],
        ["question" => "(b) x ∉ A ∩ B if, and only if, x ∉ A or x ∉ B.", "answer" => "Correct"],
        ["question" => "(c) x ∉ A − B if, and only if, x ∉ A or x ∈ B.", "answer" => "Correct"],
    


        ["question" => "Let B_i = {x ∈ ℝ | 0 ≤ x ≤ i} for each integer i = 1, 2, 3, 4. Find B1 ∪ B2 ∪ B3 ∪ B4. (Enter your answer using interval notation.)", 
        "answer" => "B1 ∪ B2 ∪ B3 ∪ B4 = [0, 4]"],
        ["question" => "Let B_i = {x ∈ ℝ | 0 ≤ x ≤ i} for each integer i = 1, 2, 3, 4. Find B1 ∩ B2 ∩ B3 ∩ B4. (Enter your answer using interval notation.)", 
        "answer" => "B1 ∩ B2 ∩ B3 ∩ B4 = [0, 1]"],
        ["question" => "Let B_i = {x ∈ ℝ | 0 ≤ x ≤ i} for each integer i = 1, 2, 3, 4. Are B1, B2, B3, and B4 mutually disjoint? Why or why not?", 
        "answer" => "No, because no two of the sets B1, B2, B3, B4 are disjoint."],    





        ["question" => "Let S be the set of all strings of 0's and 1's of length 4, and let 
        A = {0010, 0111, 0001, 1010}
        and  
        B = {0010, 1001, 0101, 0000}.
        Find A ∩ B.", 
        "answer" => "A ∩ B = {0010}"],
        ["question" => "Let S be the set of all strings of 0's and 1's of length 4, and let 
        A = {0010, 0111, 0001, 1010}
        and  
        B = {0010, 1001, 0101, 0000}.
        Find A ∪ B.", 
        "answer" => "A ∪ B = {0010, 0111, 0001, 1010, 1001, 0101, 0000}"],
        ["question" => "Let S be the set of all strings of 0's and 1's of length 4, and let 
        A = {0010, 0111, 0001, 1010}
        and  
        B = {0010, 1001, 0101, 0000}.
        Find A − B.", 
        "answer" => "A − B = {0111, 0001, 1010}"],
        ["question" => "Let S be the set of all strings of 0's and 1's of length 4, and let 
        A = {0010, 0111, 0001, 1010}
        and  
        B = {0010, 1001, 0101, 0000}.
        Find B − A.", 
        "answer" => "B − A = {1001, 0101, 0000}"],
    
























    ["question" => "What is a set?", "answer" => "A collection of distinct objects."],
    ["question" => "What is an element?", "answer" => "An individual object within a set."],
    ["question" => "What does 'a ∈ S' mean?", "answer" => "a is an element of S."],
    ["question" => "What does 'a ∉ S' mean?", "answer" => "a is not an element of S."],
    ["question" => "What is a subset?", "answer" => "A ⊆ B means every element in A is also in B."],
    ["question" => "What is a proper subset?", "answer" => "A ⊂ B means A is a subset of B and A ≠ B."],
    ["question" => "What is the union of sets A and B?", "answer" => "A ∪ B is the set containing all elements in A or B."],
    ["question" => "What is the intersection of sets A and B?", "answer" => "A ∩ B is the set containing elements common to both A and B."],
    ["question" => "What is the difference of sets A and B?", "answer" => "A - B is the set containing elements in A but not in B."],
    ["question" => "What is the complement of set A?", "answer" => "A^c is the set containing all elements not in A."],
    ["question" => "What is the empty set?", "answer" => "A set with no elements, denoted by ∅."],
    ["question" => "When are two sets A and B equal?", "answer" => "A = B means A ⊆ B and B ⊆ A."],
    ["question" => "What is a power set?", "answer" => "The set of all subsets of a given set S, including ∅ and S itself."],
    ["question" => "What is a function?", "answer" => "A function f : X → Y maps each element x ∈ X (domain) to a unique element y ∈ Y (co-domain)."],
    ["question" => "What is an identity function?", "answer" => "IX(x) = x for each x ∈ X."],
    ["question" => "What is the Hamming distance function?", "answer" => "Measures the number of positions where two strings of the same length differ."],
    ["question" => "What is a well-defined function?", "answer" => "A rule that assigns a unique output for each input."],
    ["question" => "When are two functions f and g equal?", "answer" => "f(x) = g(x) for all x in the domain."]
];

if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: index.html");
    exit();
}

if (!isset($_SESSION['flashcards'])) {
    shuffle($flashcards);
    $_SESSION['flashcards'] = $flashcards;
    $_SESSION['incorrect'] = [];
}

$index = isset($_POST['index']) ? (int)$_POST['index'] : 0;
$score = isset($_POST['score']) ? (int)$_POST['score'] : 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['answer'])) {
    $userAnswer = strtolower(trim($_POST['answer']));
    $correctAnswer = strtolower(trim($_SESSION['flashcards'][$index - 1]['answer']));

    if ($userAnswer == $correctAnswer) {
        echo "<p>Correct!</p>";
        $score++;
    } else {
        echo "<p>Wrong. The correct answer is: " . $_SESSION['flashcards'][$index - 1]['answer'] . "</p>";
        $_SESSION['incorrect'][] = $_SESSION['flashcards'][$index - 1];
    }
    echo "<p>-------------------------</p>";
}

if ($index < count($_SESSION['flashcards'])) {
    $question = $_SESSION['flashcards'][$index]['question'];
    echo "<h2>Question: $question</h2>";
    echo '<form action="flashcard_quiz.php" method="post">';
    echo '<input type="hidden" name="index" value="' . ($index + 1) . '">';
    echo '<input type="hidden" name="score" value="' . $score . '">';
    echo '<input type="text" name="answer" required>';
    echo '<button type="submit">Submit Answer</button>';
    echo '</form>';
} else {
    if (empty($_SESSION['incorrect'])) {
        echo "<h2>Quiz Complete!</h2>";
        echo "<p>Your final score is: $score/" . count($_SESSION['flashcards']) . "</p>";
        session_destroy();
    } else {
        $_SESSION['flashcards'] = $_SESSION['incorrect'];
        $_SESSION['incorrect'] = [];
        echo "<h2>Retry Incorrect Answers</h2>";
        echo '<form action="flashcard_quiz.php" method="post">';
        echo '<input type="hidden" name="index" value="0">';
        echo '<input type="hidden" name="score" value="' . $score . '">';
        echo '<button type="submit">Retry</button>';
        echo '</form>';
    }
}
?>