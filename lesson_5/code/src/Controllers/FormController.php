<?php

namespace Geekbrains\Application1\Controllers;
use Geekbrains\Application1\Render;

class FormController
{
    public function actionIndex()
    {
        $render = new Render();
        return $render->renderPage('form.twig', [
            'title' => 'Добавить пользователя',
        ]);
    }
}