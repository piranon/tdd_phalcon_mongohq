<?php
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->sendGet('say/hello/roofimon');