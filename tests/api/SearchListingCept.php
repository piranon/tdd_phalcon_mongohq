<?php
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->sendGet('say/welcome/roofimon');
$I->haveHttpHeader('Content-Type','application/json');
$I->seeResponseCodeIs(200);