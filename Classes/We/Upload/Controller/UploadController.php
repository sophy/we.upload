<?php
namespace We\Upload\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "We.Upload".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class UploadController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

}

?>