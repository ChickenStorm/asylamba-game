<?php
# archive or unarchive action

# int id 			id de la notif

include_once HERMES;

$id = Utils::getHTTPData('id');


if ($id) {
	$S_NTM1 = ASM::$ntm->getCurrentSession();
	ASM::$ntm->newSession(ASM_UMODE);
	ASM::$ntm->load(array('id' => $id));
	ASM::$ntm->deleteById($id);	
	ASM::$ntm->changeSession($S_NTM1);
	CTR::$alert->add('Notification supprimée', ALERT_STD_SUCCESS);
} else {
	CTR::$alert->add('Cette notification n\'existe pas', ALERT_STD_ERROR);
}