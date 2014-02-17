<?php
# obSituation component
# in athena.bases package

# affichage de la vue de situation

# require
	# {orbitalBase}		ob_obSituation
	# [{commander}]		commanders_obSituation

echo '<div class="component">';
	echo '<div class="head skin-1">';
		echo '<img src="' . MEDIA . 'orbitalbase/situation.png" alt="" />';
	echo '</div>';
	echo '<div class="fix-body">';
		echo '<div class="body">';
			echo 'test';
		echo '</div>';
	echo '</div>';
echo '</div>';


echo '<div class="component size3">';
	echo '<div class="head">';
		echo '<h1>Vue de situation</h1>';
	echo '</div>';
	echo '<div class="fix-body">';
		echo '<div class="body">';
			echo '<div class="situation-content place1">';
				echo '<div class="toolbar">';
					echo '<a href="#" class="hb lb" title="pas encore implémenté">Abandonner la planète</a>';
					echo '<a href="' . APP_ROOT . '/map/base-' . $ob_obSituation->getId() . '">Centrer sur la carte</a>';
					echo '<form action="' . APP_ROOT . 'action/a-renamebase/baseid-' . $ob_obSituation->getId() . '" method="POST">';
						echo '<input type="text" name="name" value="' . $ob_obSituation->getName() . '" />';
						echo '<input type="submit" class="button" value=" " />';
					echo '</form>';
				echo '</div>';

				echo '<div class="coordbar">' . Game::formatCoord($ob_obSituation->getXSystem(), $ob_obSituation->getYSystem(), $ob_obSituation->getPosition(), $ob_obSituation->getSector()) . '</div>';
				
				for ($i = 0; $i < 3; $i++) { 
					if (isset($commanders_obSituation[$i])) {
						$commander = $commanders_obSituation[$i];
						echo '<a href="' . APP_ROOT . 'fleet/view-movement/commander-' . $commander->getId() . '/sftr-3" class="commander full position-' . ($i + 1) . '">';
							echo '<img src="' . MEDIA . 'map/fleet/' . (($commander->getStatement() == COM_AFFECTED) ? 'full' : 'away') . '.jpg" alt="plein" />';
							echo '<span class="info">';
								echo 'Commandant <strong>' . $commander->getName() . '</strong><br />';
								echo 'Grade ' . $commander->getLevel() . ', ' . $commander->getPev() . ' Pev';
								if ($commander->getStatement() == COM_MOVING) {
									echo '<br />&#8594;	';
									switch ($commander->getTypeOfMove()) {
										case COM_MOVE: echo 'déplacement'; break;
										case COM_LOOT: echo 'pillage'; break;
										case COM_COLO: echo 'colonisation'; break;
										case COM_BACK: echo 'retour'; break;
										default: break;
									}
								}
							echo '</span>';
						echo '</a>';
					} else {
						echo '<a href="' . APP_ROOT . 'bases/base-' . $ob_obSituation->getId() . '/view-school" class="commander empty position-' . ($i + 1) . '">';
							echo '<img src="' . MEDIA . 'map/fleet/empty.jpg" alt="vide" />';
							echo '<span class="info">';
								echo 'Emplacement de flotte vide<br />';
								echo 'Affecter un commandant';
							echo '</span>';
						echo '</a>';
					}
				}

				echo '<div class="base">';
					echo '<img src="' . MEDIA . 'orbitalbase/orbitalbase.png" alt="base orbitale" />';
					echo '<div class="info">';
						echo 'Base orbitale<br />';
						echo '<strong>' . $ob_obSituation->getName() . '</strong><br />';
						echo $ob_obSituation->getPoints() . ' points';
					echo '</div>';
				echo '</div>';

				echo '<div class="stellar">';
					echo '<img src="' . MEDIA . 'map/place/place1-' . Game::getSizeOfPlanet($ob_obSituation->getPlanetPopulation()) . '.png" alt="planète" />';
					echo '<div class="info">';
						echo '<strong>' . Format::numberFormat($ob_obSituation->getPlanetPopulation() * 1000000) . '</strong> habitants<br />';
						echo $ob_obSituation->getPlanetResources() . ' % coeff. ressource<br />';
						echo $ob_obSituation->getPlanetHistory() . ' % coeff. historique';
					echo '</div>';
				echo '</div>';

			echo '</div>';
			echo '<div class="situation-info">';
				echo '<div class="item">';
					echo '<span class="label">ressources en stock</span>';
					echo '<span class="value">' . Format::numberFormat($ob_obSituation->getResourcesStorage()) . '</span>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
echo '</div>';
?> 