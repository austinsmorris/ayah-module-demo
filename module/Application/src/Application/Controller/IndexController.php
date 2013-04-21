<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 * @package Application\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        if ($this->request->isPost()) {
            if ($this->ayah()) {
                $human = true;
            } else {
                $human = false;
            }

            $view = new ViewModel(array('human' => $human));
            $view->setTemplate('/application/index/human');
            return $view;
        }

        return new ViewModel();
    }
}
