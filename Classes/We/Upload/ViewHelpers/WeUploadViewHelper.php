<?php
namespace We\Upload\ViewHelpers;

use TYPO3\Flow\Annotations as Flow;

/**
 * This class is a demo view helper for the Fluid templating engine.
 * @Flow\Scope("singleton")
 */


class WeUploadViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Renders some classic dummy content: Lorem Ipsum...
     *
     * @param int $length The number of characters of the dummy content
     * @return string dummy content, cropped after the given number of characters
     * @author Lorem Ipsum <lorem@example.com>
     */
    public function render($length) {
        $dummyContent = 'Lorem ipsum dolor sit amet.';
        return substr($dummyContent, 0, $length);
    }
}

?>
