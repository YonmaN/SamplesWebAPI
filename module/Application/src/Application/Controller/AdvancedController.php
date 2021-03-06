<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use WebAPI\SignatureGenerator;
use Zend\Uri\UriFactory;
use Zend\Uri\Http;

class AdvancedController extends AbstractActionController
{
	public function changeDirectiveAction() {
		return array();
	}
	
	public function deployApplicationAction() {
		return array();
	}
	
	public function tasksPollingAction() {
		return array();
	}
	
	public function indexAction()
    {
    	return $this->forward()->dispatch('Application\Controller\Advanced', array('action' => 'tasksPolling'));
    }
}
