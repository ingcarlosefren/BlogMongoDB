<?php
// This script is included in the showXYZ.php scripts.
// In those scripts $document has been initialized with the current post

echo '<h2>Comentarios</h2>';

// Show the comments of the current post
echo '<ul>';

/**********
** YOUR CODE HERE:
Iterate through the post (use the variable $document) and get the comments
For each comment print only the first 100 characters (use the PHP substr() function)
**********/
foreach ($document['comments'] as $comments) {
    echo '<li>';
    echo $comments['author']. ': ';
    echo substr($comments['body'],0,100). '</br>';
    echo '</li>';
}
echo '</ul>';
?>
