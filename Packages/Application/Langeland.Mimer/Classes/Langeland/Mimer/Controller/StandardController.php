<?php
namespace Langeland\Mimer\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Langeland.Mimer".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class StandardController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @var \Langeland\Mimer\Domain\Repository\NodeRepository
	 * @Flow\Inject
	 */
	var $nodeRepository;

	/**
	 * @return void
	 */
	public function indexAction() {

		$nodes = $this->nodeRepository->findAll();
		$this->view->assign('nodes', $nodes);
	}

	/**
	 * @param \Langeland\Mimer\Domain\Model\Node $node
	 * @return void
	 */
	public function ShowAction(\Langeland\Mimer\Domain\Model\Node $node) {

//		$ls = $node->getLastSample();
//		\TYPO3\Flow\var_dump($ls);die();

		$this->view->assign('node', $node);
	}

}