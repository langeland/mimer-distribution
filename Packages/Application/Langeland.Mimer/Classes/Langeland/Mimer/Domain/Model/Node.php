<?php
namespace Langeland\Mimer\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Langeland.Mimer".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Flow\Entity
 */
class Node {

	/**
	 * @var string
	 * @ORM\Column(length=32, unique=true)
	 * @Flow\Identity
	 * @ORM\Id
	 */
	protected $identifier;

	/**
	 * @var \DateTime
	 */
	protected $created;

	/**
	 * @var string
	 * @ORM\Column(nullable=true)
	 */
	protected $name;

	/**
	 * @var string
	 * @ORM\Column(nullable=true)
	 */
	protected $description;

	/**
	 * @return string
	 */
	public function getIdentifier() {
		return $this->identifier;
	}

	/**
	 * @param string $identifier
	 * @return void
	 */
	public function setIdentifier($identifier) {
		$this->identifier = $identifier;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * @param \DateTime $created
	 * @return void
	 */
	public function setCreated(\DateTime $created) {
		$this->created = $created;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
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

}