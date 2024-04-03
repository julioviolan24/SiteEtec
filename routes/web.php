<?php
                     /*--eu não aguento mais professor (feito por julio kkkk)*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/page-adm', function () {
    return view('page-adm');
});

Route::get('/page-contabi', function () {
    return view('page-contabi');
});

Route::get('/page-ds', function () {
    return view('page-ds');
});

Route::get('/page-log', function () {
    return view('page-log');
});

Route::get('/page-rh', function () {
    return view('page-rh');
});

Route::get('/page-juri', function () {
    return view('page-juri');
});

Route::get('/nossa-historia', function () {
    return view('nossa-historia');
});

Route::get('/infraestrutura', function () {
    return view('infraestrutura');
});

Route::get('/plano-plurial-de-gestao', function () {
    return view('plano-plurial-de-gestao');
});

Route::get('/manual-do-aluno', function () {
    return view('manual-do-aluno');
});

Route::get('/regimento-comum', function () {
    return view('regimento-comum');
});

Route::get('/apm', function () {
    return view('apm');
});

Route::get('/coordenacao-curso', function () {
    return view('coordenacao-curso');
});

Route::get('/direcao', function () {
    return view('direcao');
});

Route::get('/oportunidades', function () {
    return view('oportunidades');
});

Route::get('/vestibulinho', function () {
    return view('vestibulinho');
});
              /*Feito por Julio Cesar*/
