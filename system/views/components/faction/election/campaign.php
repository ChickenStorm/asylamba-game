<?php
# require
$S_ELM_ELC = ASM::$elm->getCurrentSession();
ASM::$elm->changeSession($ELM_CAMPAIGN_TOKEN);

echo '<div class="component profil">';
	echo '<div class="head skin-1">';
		echo '<h1>Campagne</h1>';
	echo '</div>';
	echo '<div class="fix-body">';
		echo '<div class="body">';
			echo '<div class="number-box">';
				echo '<span class="label">nombre de candidats</span>';
				echo '<span class="value">' . $nbCandidate . '</span>';
			echo '</div>';

			echo '<hr / style="margin-top: 25px;">';

			echo '<p class="info">' . ColorResource::getInfo(CTR::$data->get('playerInfo')->get('color'), 'campaignDesc') . '</p>';
		echo '</div>';
	echo '</div>';
echo '</div>';

ASM::$elm->changeSession($S_ELM_ELC);
?>