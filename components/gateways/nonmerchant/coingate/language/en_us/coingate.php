<?php

$lang['Coingate.name'] = 'Cryptocurrency Payments via CoinGate';
$lang['Coingate.app_id'] = 'APP ID';
$lang['Coingate.api_key'] = 'API Key';
$lang['Coingate.api_secret'] = 'API Secret';
$lang['Coingate.coingate_environment'] = 'CoinGate Environment';
$lang['Coingate.environment.sandbox'] = 'sandbox';
$lang['Coingate.environment.live'] = 'live';
$lang['Coingate.receive_currency'] = 'Payout Currency';
$lang['Coingate.receive_currency_note'] = 'Choose the currency in which your payouts will be made (BTC, EUR or USD). For real-time EUR or USD settlements, you must verify as a merchant on CoinGate. Do not forget to add your Bitcoin address or bank details for payouts on <a href="https://coingate.com" target="_blank">your CoinGate account</a>.';
$lang['Coingate.environment_note'] = 'To test on <a href="https://sandbox.coingate.com" target="_blank">CoinGate Sandbox</a>, turn Test Mode "On". Please note, for Test Mode you must create a separate account on <a href="https://sandbox.coingate.com" target="_blank">sandbox.coingate.com</a> and generate API credentials there. API credentials generated on <a href="https://coingate.com" target="_blank">coingate.com</a> are "Live" credentials and will not work for "Test" mode.';
$lang['Coingate.buildprocess.submit'] = 'Pay with Cryptocurrencies via CoinGate';
$lang['Coingate.receive_currency.usd'] = 'U.S. Dollars $';
$lang['Coingate.receive_currency.btc'] = 'Bitcoin ฿';
$lang['Coingate.receive_currency.eur'] = 'Euros €';
// Error
$lang['Coingate.!error.app.id.valid'] = 'APP ID cannot be blank';
$lang['Coingate.!error.api.key.valid'] = 'API Key cannot be blank';
$lang['Coingate.!error.api.secret.valid'] = 'API Secret cannot be blank';
$lang['Coingate.!error.payment.invalid'] = 'The transaction is invalid and could not be processed';
$lang['Coingate.!error.payment.canceled'] = 'The transaction is canceled and could not be processed';
$lang['Coingate.!error.payment.expired'] = 'The transaction has expired and could not be processed';
$lang['Coingate.!error.failed.response'] = 'The transaction could not be processed';
