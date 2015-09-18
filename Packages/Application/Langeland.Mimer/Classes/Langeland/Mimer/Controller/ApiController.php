<?php
namespace Langeland\Mimer\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Langeland.Mimer".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

class ApiController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * @var string
	 */
	protected $defaultViewObjectName = 'TYPO3\Flow\Mvc\View\JsonView';

	/**
	 * @var \Langeland\Mimer\Domain\Repository\NodeRepository
	 * @Flow\Inject
	 */
	var $nodeRepository;

	/**
	 * @var \Langeland\Mimer\Domain\Repository\SampleRepository
	 * @Flow\Inject
	 */
	var $sampleRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

	/**
	 * @param string $data
	 * @return void
	 * @throws \Exception
	 */
	public function submitAction($data) {
		$dataArray = json_decode($data, TRUE);
		if (json_last_error()) {
			throw new \Exception('JSON error: ' . json_last_error_msg(), 1442426196);
		}

		if (!array_key_exists('node', $dataArray)) {
			throw new \Exception('Node missing');
		}

		if (!array_key_exists('identifier', $dataArray['node'])) {
			throw new \Exception('Node identifier missing');
		}

		if (!array_key_exists('data', $dataArray['node'])) {
			throw new \Exception('Data missing');
		}

		if (!is_array($dataArray['node']['data'])) {
			throw new \Exception('Data must be an array');
		}

		if (!$node = $this->nodeRepository->findByIdentifier($dataArray['node']['identifier'])) {
			$node = new \Langeland\Mimer\Domain\Model\Node();
			$node->setIdentifier($dataArray['node']['identifier']);
			$node->setCreated(new \DateTime());

			$this->nodeRepository->add($node);
		}

		$sample = new \Langeland\Mimer\Domain\Model\Sample();
		$sample->setNode($node);
		$sample->setTime(new \DateTime());
		$sample->setData($dataArray['node']['data']);

		$this->sampleRepository->add($sample);

		$this->persistenceManager->persistAll();

		$this->view->assign('value', array('status' => 200));
	}

}