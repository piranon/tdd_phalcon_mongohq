<?php
$I = new ApiGuy($scenario);
$I->wantTo('perform actions and see result');
$I->sendGet('api/v4/wine');
$I->seeHttpHeader('Content-Type','application/json');
$I->seeResponseCodeIs(200);
