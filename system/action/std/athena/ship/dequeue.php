<?php
include_once ATHENA;
# dequeue ship action

# int baseId 		id (rPlace) de la base orbitale
# int queue 		id de la file de construction
# int dock 			numéro du dock (1, 2, ou 3)

for ($i=0; $i < CTR::$data->get('playerBase')->get('ob')->size(); $i++) { 
	$verif[] = CTR::$data->get('playerBase')->get('ob')->get($i)->get('id');
}

if (CTR::$get->exist('baseid')) {
	$baseId = CTR::$get->get('baseid');
} elseif (CTR::$post->exist('baseid')) {
	$baseId = CTR::$post->get('baseid');
} else {
	$baseId = FALSE;
}
if (CTR::$get->exist('queue')) {
	$queue = CTR::$get->get('queue');
} elseif (CTR::$post->exist('queue')) {
	$queue = CTR::$post->get('queue');
} else {
	$queue = FALSE;
}
if (CTR::$get->exist('dock')) {
	$dock = CTR::$get->get('dock');
} elseif (CTR::$post->exist('dock')) {
	$dock = CTR::$post->get('dock');
} else {
	$dock = FALSE;
}

if ($baseId !== FALSE AND $queue !== FALSE AND $dock !== FALSE AND in_array($baseId, $verif)) {
	if (intval($dock) > 0 AND intval($dock) < 4) {
		$S_OBM1 = ASM::$obm->getCurrentSession();
		ASM::$obm->newSession(ASM_UMODE);
		ASM::$obm->load(array('rPlace' => $baseId));
		$ob = ASM::$obm->get();

		$S_SQM1 = ASM::$sqm->getCurrentSession();
		ASM::$sqm->newSession();
		ASM::$sqm->load(array('rOrbitalBase' => $baseId, 'dockType' => $dock), array('dEnd'));

		$index = NULL;
		for ($i = 0; $i < ASM::$sqm->size(); $i++) {
			$shipQueue = ASM::$sqm->get($i); 
			# get the index of the queue
			if ($shipQueue->id == $queue) {
				$index = $i;
				$dStart = $shipQueue->dStart;
				$dEnd = $shipQueue->dEnd;
				break;
			}
		}

		if ($index !== NULL) {
			# shift
			for ($i = $index + 1; $i < ASM::$sqm->size(); $i++) {
				$shipQueue = ASM::$sqm->get($i);
				$nextStart = $shipQueue->dStart;
				$nextEnd = $shipQueue->dEnd;

				$shipQueue->dStart = $dStart;
				$shipQueue->dEnd = $dEnd;

				$dStart = $nextStart;
				$dEnd = $nextEnd;
			}

			ASM::$sqm->deleteById($queue);

			// give a part of the resources back
			$resourcePrice = ShipResource::getInfo($shipQueue->shipNumber, 'resourcePrice');
			if ($shipQueue->dockType == 1) {
				$resourcePrice *= $shipQueue->quantity;
			}
			$resourcePrice *= SQM_RESOURCERETURN;
			$ob->increaseResources($resourcePrice);
			CTR::$alert->add('Commande annulée, vous récupérez le ' . SQM_RESOURCERETURN * 100 . '% du montant investi pour la construction', ALERT_STD_SUCCESS);
		} else {
			CTR::$alert->add('suppression de vaisseau impossible', ALERT_STD_ERROR);
		}
		ASM::$sqm->changeSession($S_SQM1);
		ASM::$obm->changeSession($S_OBM1);
	} else {
		CTR::$alert->add('suppression de vaisseau impossible - chantier invalide', ALERT_STD_ERROR);
	}
} else {
	CTR::$alert->add('pas assez d\'informations pour enlever un vaisseau de la file d\'attente', ALERT_STD_FILLFORM);
}
?>