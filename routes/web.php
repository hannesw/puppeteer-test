<?php

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    Browsershot::html('<h1>Hello world from php!!</h1>')
        ->setNodeBinary('C:\Progra~1\nodejs\node.exe')
        ->setNpmBinary('C:\Progra~1\nodejs\npm.cmd')
        ->setBinPath('C:\Users\hwoer\Documents\Code\puppeteer-test\vendor\spatie\browsershot\bin\browser.js')
        ->setNodeModulePath('C:\Users\hwoer\Documents\Code\puppeteer-test\node_modules')
        ->setChromePath('C:\Users\hwoer\Documents\Code\puppeteer-test\node_modules\puppeteer\.local-chromium\win64-950341\chrome-win\chrome.exe')
        ->save(storage_path('pdf/php_test.pdf'))
    ;
});
