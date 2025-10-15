<?php
// Include the database configuration file
include 'Review-Config.php';

// Query to fetch all reviews
$query = "SELECT rname, review FROM reviews ORDER BY id DESC";
$result = mysqli_query($rew, $query);

// Check if any reviews exist
if(mysqli_num_rows($result) > 0){
    // Loop through all reviews and display them
    while($row = mysqli_fetch_assoc($result)){
        echo "<div class='review-item'>";
        echo "<h3>" . htmlspecialchars($row['rname']) . "</h3>";
        echo "<p>" . htmlspecialchars($row['review']) . "</p>";
        echo "</div>";
    }
} else {
    // If no reviews found
    echo "<div class='no-reviews'>No reviews yet. Be the first to review!</div>";
}

// Close the connection
mysqli_close($rew);
?>