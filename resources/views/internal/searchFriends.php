<?php

use App\Http\Controllers\MemberController;

$query;

if (isset($_GET['searchField'])) {

    $query = MemberController::searchMyFriends($_GET['searchField']);
}

// JSON encode
echo json_encode($query);