<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign up for a Socializer account');

$I->amOnPage('/');
$I->click('Tilmeld dig');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Email:', 'christoffer@baadsgaard.net');
$I->fillField('Password:', '123456');
$I->fillField('Password (gentag):', '123456');
$I->click('Tilmeld');

$I->seeCurrentUrlEquals('');
$I->see('Velkommen til Socializer');
$I->seeRecord('users', [
	'email' => 'christoffer@baadsgaard.net'
]);