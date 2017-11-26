<?php
    extract($_POST);

    echo "<p>The user entered: </p>";
    echo "<p>Name: " . $name . "</p>";
    echo "<p>Email: " . $email . "</p>";
    echo "<p>Phone: " . $phone . "</p>";
    echo "<p>Bar Associate: " . $bar_associate . "</p>";
    echo "<p>Server: " . $server . "</p>";
    echo "<p>Cleaning & Maintenance: " . $cleaning_maintenance . "</p>";
    echo "<p>Manager: " . $manager . "</p>";
    echo "<p>Employment type: " . $employment_type . "</p>";
    echo "<p>Gender: " . $gender . "</p>";
    echo "<p>Years of experience: " . $years_of_experience . "</p>";
    echo "<p>Comments: " . $comments . "</p>";
?>