<?php
$uploaddir = "C:/xampplite/htdocs/";
if (move_uploaded_file($_FILES['userfile']['tmp_name'],
$uploaddir . $_FILES['userfile']['name'])) {
echo "File is valid, and was successfully uploaded.";
} else {
echo "Possible file upload attack!";
}
?>

/*
$_FILES['userfile']['name']
Το αρχικό όνομα του αρχείου στο μηχάνημα του client.

$_FILES['userfile']['type']
Το mime type του αρχείου, αν ο browser έχει δώσει αυτή τη πληροφορία. Ένα παράδειγμα θα ήταν "image/gif".

$_FILES['userfile']['size']
Το μέγεθος, σε byte, του αρχείου που έχει γίνει upload.

$_FILES['userfile']['tmp_name']
Το προσωρινό όνομα του αρχείου στο οποίο έχει αποθηκευτεί το αρχείο που έχει γίνει upload στον server.

$_FILES['userfile']['error']
Ο κωδικός σφάλματος που σχετίζεται με αυτό το upload αρχείου.

l is_uploaded_file()
Πριν μετακινήσουμε το αρχείο από την προσωρινή του θέση στην θέση που καθορίζεται ελέγχουμε ότι το αρχείο υπάρχει.
Η συνάρτηση is_uploaded_file() δέχεται σαν όρισμα τη διαδρομή ενός αρχείου και επιστρέφει true μόνο αν το εν λόγω αρχείο είναι έγκυρο

l move_uploaded_file()
Η συνάρτηση αυτή αντιγράφει ένα αρχείο από μια θέση σε μια άλλη. Απαιτεί σαν ορίσματα
τη διαδρομή προς το πηγαίο αρχείο και τη διαδρομή προορισμού. Επιστρέφει true αν η
μετακίνηση του αρχείου είναι επιτυχής και false αν το αρχείο δεν βρέθηκε ή δεν είναι έγκυρο.

*/