<?php

echo $_REQUEST['firstname'] . '<br>';
echo $_REQUEST['middlename'] . '<br>';
echo $_REQUEST['lastname'] . '<br>';
echo $_REQUEST['birthdate'] . '<br>';
echo $_REQUEST['ssn'] . '<br>';
echo $_REQUEST['driverlicense'] . '<br>';
echo $_REQUEST['phone'] . '<br>';
echo $_REQUEST['email'] . '<br>';

if(isset($_REQUEST['firstname2'])) {
    echo $_REQUEST['firstname2'] . '<br>';
    echo $_REQUEST['middlename2'] . '<br>';
    echo $_REQUEST['lastname2'] . '<br>';
    echo $_REQUEST['birthdate2'] . '<br>';
    echo $_REQUEST['ssn2'] . '<br>';
    echo $_REQUEST['driverlicense2'] . '<br>';
    echo $_REQUEST['phone2'] . '<br>';
    echo $_REQUEST['email2'] . '<br>';
} else {
    echo 'No Second Adult.';
}

if(isset($_REQUEST['firstname3'])) {
    echo $_REQUEST['firstname3'] . '<br>';
    echo $_REQUEST['middlename3'] . '<br>';
    echo $_REQUEST['lastname3'] . '<br>';
    echo $_REQUEST['birthdate3'] . '<br>';
    echo $_REQUEST['ssn3'] . '<br>';
    echo $_REQUEST['driverlicense3'] . '<br>';
    echo $_REQUEST['phone3'] . '<br>';
    echo $_REQUEST['email3'] . '<br>';
}