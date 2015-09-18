<?php
namespace Langeland\Mimer\Domain\Repository;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Langeland.Mimer".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Persistence\Repository;

/**
 * @Flow\Scope("singleton")
 */
class SampleRepository extends Repository {

	// add customized methods here

	/**
	 * @param \Langeland\Mimer\Domain\Model\Node $node
	 * @return \Langeland\Mimer\Domain\Model\Sample
	 */
	public function findLastByNode(\Langeland\Mimer\Domain\Model\Node $node) {
		$query = $this->createQuery();

		$query->setOrderings(
			array('time' => \TYPO3\Flow\Persistence\QueryInterface::ORDER_DESCENDING)
		)->setLimit(1);

		return $query->execute()->getFirst();
	}

}