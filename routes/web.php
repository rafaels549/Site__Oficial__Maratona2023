<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'maratonaprogramacao');
Volt::route('/sobrenos', 'sobrenos')->name('sobrenos');
Volt::route('/programacao', 'programacao')->name('programacao');
Volt::route('contato_local', 'contato_e_local')->name('contato.local');
Volt::route('inscricao', 'inscricao')->name('inscricao');
Volt::route('linguagens_programacao', 'linguagens')->name('linguagens.programacao');
Volt::route('colaboradores', 'colaboradores')->name('colaboradores');
