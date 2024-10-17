<?php

namespace Geekbrains\Application1\Controllers;
use Geekbrains\Application1\Render;

class AddUser
{
    public function actionIndex(): string {
        $render = new Render();
        return $render->renderPage('add-user.twig', ['title' => 'Добавление юзера']);
    }

    public function actionAddUser() {
        
    }
}