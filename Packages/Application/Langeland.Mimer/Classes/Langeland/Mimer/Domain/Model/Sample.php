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
class Sample {

	/**
	 * @var integer
	 * @Flow\Identity
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(options={"unsigned"=true})
	 */
	protected $identifier;

	/**
	 * @var \Langeland\Mimer\Domain\Model\Node
	 * @ORM\ManyToOne
	 */
	protected $node;

	/**
	 * @var \DateTime
	 */
	protected $time;

	/**
	 * @var array
	 */
	protected $data;

	/**
	 * @return \Langeland\Mimer\Domain\Model\Node
	 */
	public function getNode() {
		return $this->node;
	}

	/**
	 * @param \Langeland\Mimer\Domain\Model\Node $node
	 * @return void
	 */
	public function setNode($node) {
		$this->node = $node;
	}

	/**
	 * @return \DateTime
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * @param \DateTime $time
	 * @return void
	 */
	public function setTime(\DateTime $time) {
		$this->time = $time;
	}

	/**
	 * @return array
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * @param array $data
	 * @return void
	 */
	public function setData(array $data) {
		$this->data = $data;
	}

}