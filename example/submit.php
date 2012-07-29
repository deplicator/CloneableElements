<h1>Cloneable Elements Example</h1>

<h2>Occupants</h2>

<h3>First Adult</h3>
<?php
echo 'Firts Name: ' . $_REQUEST['firstname'] . '<br>';
echo 'Middle Name: ' . $_REQUEST['middlename'] . '<br>';
echo 'Last Name: ' . $_REQUEST['lastname'] . '<br>';
echo 'Birthdate: ' . $_REQUEST['birthdate'] . '<br>';
echo 'Phone: ' . $_REQUEST['phone'] . '<br>';
echo 'Email: ' . $_REQUEST['email'] . '<br>';

if (isset($_REQUEST['firstname2'])) {
    echo '<h3>Second Adult</h3>';
    echo 'Firts Name: ' . $_REQUEST['firstname2'] . '<br>';
    echo 'Middle Name: ' . $_REQUEST['middlename2'] . '<br>';
    echo 'Last Name: ' . $_REQUEST['lastname2'] . '<br>';
    echo 'Birthdate: ' . $_REQUEST['birthdate2'] . '<br>';
    echo 'Phone: ' . $_REQUEST['phone2'] . '<br>';
    echo 'Email: ' . $_REQUEST['email2'] . '<br>';
} else {
    echo '<h3>No Second Adult</h3>';
}

if (isset($_REQUEST['firstname3'])) {
    echo '<h3>Third Adult</h3>';
    echo 'Firts Name: ' . $_REQUEST['firstname3'] . '<br>';
    echo 'Middle Name: ' . $_REQUEST['middlename3'] . '<br>';
    echo 'Last Name: ' . $_REQUEST['lastname3'] . '<br>';
    echo 'Birthdate: ' . $_REQUEST['birthdate3'] . '<br>';
    echo 'Phone: ' . $_REQUEST['phone3'] . '<br>';
    echo 'Email: ' . $_REQUEST['email3'] . '<br>';
} else {
    echo '<h3>No Third Adult</h3>';
}

if (isset($_REQUEST['firstname4'])) {
    echo '<h3>Fourth Adult</h3>';
    echo 'Firts Name: ' . $_REQUEST['firstname4'] . '<br>';
    echo 'Middle Name: ' . $_REQUEST['middlename4'] . '<br>';
    echo 'Last Name: ' . $_REQUEST['lastname4'] . '<br>';
    echo 'Birthdate: ' . $_REQUEST['birthdate4'] . '<br>';
    echo 'Phone: ' . $_REQUEST['phone4'] . '<br>';
    echo 'Email: ' . $_REQUEST['email4'] . '<br>';
} else {
    echo '<h3>No Fourth Adult</h3>';
}

if (isset($_REQUEST['firstname5'])) {
    echo '<h3>Fifth Adult</h3>';
    echo 'Firts Name: ' . $_REQUEST['firstname5'] . '<br>';
    echo 'Middle Name: ' . $_REQUEST['middlename5'] . '<br>';
    echo 'Last Name: ' . $_REQUEST['lastname5'] . '<br>';
    echo 'Birthdate: ' . $_REQUEST['birthdate5'] . '<br>';
    echo 'Phone: ' . $_REQUEST['phone5'] . '<br>';
    echo 'Email: ' . $_REQUEST['email5'] . '<br>';
} else {
    echo '<h3>No Fifth Adult</h3>';
}
?>

<h3>Children</h3>



<?php
echo '<ol>';
if (isset($_REQUEST['childname'])) {
    echo '<li>';
    echo $_REQUEST['childname'] .  ' || ';
    echo $_REQUEST['childbirthdate'] . '<br>';
    //echo $_REQUEST['sex'] . '<br>';
}

for ($i = 2; $i < 10; $i++) {
    if (isset($_REQUEST['childname' . $i])) {
        echo '<li>';
        echo $_REQUEST['childname' . $i] .  ' || ';
        echo $_REQUEST['childbirthdate' . $i] . '<br>';
        //echo $_REQUEST['sex' . $i] . '<br>';
    }
}
echo '</ol>'
?>

<h2>Cars</h2>
<?php

echo 'Plate Number: ' . $_REQUEST['platenum'] . '<br>';
echo 'Model: ' . $_REQUEST['car'] . '<br>';
echo '<br>';

for ($j = 2; $j < 5; $j++) {
    if (isset($_REQUEST['platenum' . $j])) {
        echo 'Plate Number: ' . $_REQUEST['platenum' . $j] . '<br>';
        echo 'Model: ' . $_REQUEST['car' . $j] . '<br>';
        echo '<br>';
    }
}