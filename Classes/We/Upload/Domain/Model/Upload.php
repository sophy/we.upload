<?php
namespace We\Upload\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "We.Upload".             *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Upload {

	/**
	 * @var string
	 * @Flow\Validate(type="NotEmpty")
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $title;

	/**
	 * @var string
	 * @Flow\Validate(type="NotEmpty")
	 * @ORM\Column(type="string", unique=true)
	 */
	protected $path;

	/**
	 * @var integer
	 * @ORM\Column(nullable=true)
	 */
	protected $size;

	/**
	 * @var string
	 * @ORM\Column(nullable=true)
	 */
	protected $extension;

	/**
	 * @var string
	 * @Flow\Validate(type="Text")
	 * @ORM\Column(type="text", nullable=true)
	 */
	protected $description;

	/**
	 * @var string
	 */
	protected $foreignKey;

	/**
	 * @var string
	 */
	protected $objectType;

	/**
	 * @var \DateTime
	 */
	protected $create;

	/**
	 * @var \DateTime
	 */
	protected $modified;


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setName($title) {
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * @param string $path
	 * @return void
	 */
	public function setPath($path) {
		$this->path = $path;
	}

	/**
	 * @return integer
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * @param integer $size
	 * @return void
	 */
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	 * @return string
	 */
	public function getExtension() {
		return $this->extension;
	}

	/**
	 * @param string $extension
	 * @return void
	 */
	public function setExtension($extension) {
		$this->extension = $extension;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getForeignKey() {
		return $this->foreignKey;
	}

	/**
	 * @param string $foreignKey
	 * @return void
	 */
	public function setForeignKey($foreignKey) {
		$this->foreignKey = $foreignKey;
	}

	/**
	 * @return string
	 */
	public function getObjectType() {
		return $this->objectType;
	}

	/**
	 * @param string $objectType
	 * @return void
	 */
	public function setObjectType($objectType) {
		$this->objectType = $objectType;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreate() {
		return $this->create;
	}

	/**
	 * @param \DateTime $create
	 * @return void
	 */
	public function setCreate($create) {
		$this->create = $create;
	}

	/**
	 * @return \DateTime
	 */
	public function getModified() {
		return $this->modified;
	}

	/**
	 * @param \DateTime $modified
	 * @return void
	 */
	public function setModified($modified) {
		$this->modified = $modified;
	}

}
?>