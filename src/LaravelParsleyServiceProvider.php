<?php

namespace MaDnh\LaravelParsley;

use Collective\Html\HtmlServiceProvider;

class LaravelParsleyServiceProvider extends HtmlServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register()
    {
        parent::register();
    }

    /**
     * {@inheritdoc}
     */
    protected function registerFormBuilder()
    {
        $this->app->singleton('form', function ($app) {
            $form = new FormBuilder($app['html'], $app['url'], $app['view'], $app['session.store']->token());

            return $form->setSessionStore($app['session.store']);
        });
    }
}
