<?php
namespace We\Upload\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "We.Upload".             *
 *                                                                        *
 *                                                                        */
use TYPO3\Flow\I18n\Utility_Original;
use TYPO3\Flow\Annotations as Flow;

use TYPO3\Flow\Mvc\Controller\ActionController;
use \We\Upload\Domain\Model\Upload;

/**
 * Upload controller for the We.Upload package
 *
 * @Flow\Scope("singleton")
 */
class UploadController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \We\Upload\Domain\Repository\UploadRepository
	 */
	protected $uploadRepository;

	/**
	 * Show list of upload files
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('uploads', $this->uploadRepository->findAll());
	}

	/**
	 * Show a single upload object
	 *
	 * @param \We\Upload\Domain\Model\Upload $upload The upload to show
	 * @return void
	 */
	public function showAction(Upload $upload) {
		$this->view->assign('upload', $upload);
	}

	/**
	 * Shows a form for editing an existing upload object
	 *
	 * @param \We\Upload\Domain\Model\Upload $upload The upload to edit
	 *
	 * @return void
	 */
	public function editAction(Upload $upload) {
		$this->view->assign('upload', $upload);
	}

	/**
	 * Updates the given file upload object
	 *
	 * @param \We\Upload\Domain\Model\Upload $upload The upload to update
	 * @return void
	 */
	public function updateAction(Upload $upload) {
		$this->uploadRepository->update($upload);
		$this->addFlashMessage('Updated the file upload.');
		$this->redirect('upload', 'Index');
	}

	/**
	 * Removes the given upload object from the upload repository
	 *
	 * @param \We\Upload\Domain\Model\Upload $upload The upload to delete
	 * @return void
	 */
	public function deleteAction(Upload $upload) {
		$this->uploadRepository->remove($upload);
		$this->addFlashMessage('Deleted a file upload.');
		$this->redirect('upload', 'Index');
	}

}

?>