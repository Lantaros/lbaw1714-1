<?php
 

$query = \App\Http\Controllers\CommunityController::communityUpcoming($community->idcommunity);

if (empty($query))
    echo 'This community hasn\'t created any events';

$today = time();
$eventsLink = route('events');

foreach ($query as $event){

    $eventDate = strtotime($event->startday);
    $datediff = $eventDate - $today ;
    $days = round($datediff / (60 * 60 * 24));
    $link = $eventsLink . '/' . $event->idevent;

    echo '
       <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                 <h5 class="mb-1">'. $event->name .' </h5>
            
                <small>In '.$days.' day(s)</small>
            </div>
            <p class="mb-1">'.$event->description.'</p>';
        echo' <a href=" '.$link.'">';
        echo'
            <small> Click here to see the event</small>
        </a>
     </div>
';
}
?>