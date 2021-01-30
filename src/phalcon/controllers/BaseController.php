<?php

use Illuminate\Support\Arr;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Controller;

class BaseController extends Controller {

    /**
     * @see views/base/index.twig
     */
    public function indexAction() {
        $this->view->setMainView('base/index');
        $this->view->setVars([
        	'config' => conf()->toArray(),
            'title' => 'frontend dev'
        ]);
    }

    /**
     */
    public function sampleApiAction() {
        $this->view->disable();
        $this->response->setJsonContent([
            'config' => conf()->toArray()
        ]);
    }

}

