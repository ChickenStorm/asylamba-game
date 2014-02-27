<?php
# investFinancial component
# in athena package

# détail l'investissement par base

# require
	# [{orbitalBase}]			ob_investFinancial
	# {player}					player_investFinancial

$totalInvest  = 0;
$totalInvest += $player_investFinancial->iUniversity;

# view part
echo '<div class="component financial">';
	echo '<div class="head skin-1">';
		echo '<img src="' . MEDIA . 'financial/invest.png" alt="" />';
		echo '<h2>Investissements</h2>';
		echo '<em>Investissements par planète</em>';
	echo '</div>';
	echo '<div class="fix-body">';
		echo '<div class="body">';
			echo '<ul class="list-type-1">';
				echo '<li>';
					echo '<span class="label">Investissements université</span>';
					echo '<span class="value">';
						echo Format::numberFormat($player_investFinancial->iUniversity);
						echo '<img class="icon-color" src="' . MEDIA . 'resources/credit.png" alt="crédits" />';
						echo ' <a href="#" class="button sh" data-target="school-form-base-1">‹</a> ';
					echo '</span>';
				echo '</li>';
			echo '</ul>';

			echo '<hr />';

			echo '<ul class="list-type-1">';
				foreach ($ob_investFinancial as $base) {
					$baseInvest   = $base->getISchool() + $base->getIAntiSpy();
					$totalInvest += $baseInvest;

					echo '<li>';
						echo '<span class="buttons">';
							echo '<a href="#" class="sh" data-target="invest-base-' . $base->getId() . '">↓</a>';
						echo '</span>';

						echo '<span class="label">' . $base->getName() . '</span>';

						echo '<span class="value">';
							echo Format::numberFormat($baseInvest);
							echo '<img class="icon-color" src="' . MEDIA . 'resources/credit.png" alt="crédits" />';
						echo '</span>';

						echo '<ul class="sub-list-type-1" id="invest-base-' . $base->getId() . '">';
							echo '<li>';
								echo '<span class="label">école de cmd.</span>';

								echo '<span class="value">';
									echo Format::numberFormat($base->getISchool());
									echo ' <a href="#" class="button sh" data-target="school-form-base-' . $base->getId() . '">‹</a> ';
								echo '</span>';

								echo '<form action="' . APP_ROOT . 'action/a-updateinvest/baseid-' . $base->getId() . '/category-school" method="POST" id="school-form-base-' . $base->getId() . '">';
									echo '<p>';
										echo '<input type="text" name="credit" placeholder="' . $base->getISchool() . '" />';
										echo '<input type="submit" value="ok" />';
									echo '</p>';
								echo '</form>';
							echo '</li>';
							echo '<li>';
								echo '<span class="label">contre-espionnage</span>';

								echo '<span class="value">';
									echo Format::numberFormat($base->getIAntiSpy());
									echo ' <a href="#" class="button sh" data-target="spying-form-base-' . $base->getId() . '">‹</a>';
								echo '</span>';

								echo '<form action="' . APP_ROOT . 'action/a-updateinvest/baseid-' . $base->getId() . '/category-antispy" method="POST" id="spying-form-base-' . $base->getId() . '">';
									echo '<p>';
										echo '<input type="text" name="credit" placeholder="' . $base->getIAntiSpy() . '" />';
										echo '<input type="submit" value="ok" />';
									echo '</p>';
								echo '</form>';
							echo '</li>';
						echo '</ul>';
					echo '</li>';
				}

				echo '<li class="strong">';
					echo '<span class="label">total des investissements</span>';
					echo '<span class="value">';
						echo Format::numberFormat($totalInvest);
						echo '<img class="icon-color" src="' . MEDIA . 'resources/credit.png" alt="crédits" />';
					echo '</span>';
				echo '</li>';
			echo '</ul>';

			echo '<p class="info">Dans la rubrique « Investissements » sont répertoriés tous les investissements relatifs à l’université, à l’école 
			de commandement et au contre-espionnage. Chacun de ces investissements peuvent être gérés dans leur bâtiment respectif. Faites attention 
			à ne pas avoir plus d’investissements que de recettes.</p>';
		echo '</div>';
	echo '</div>';
echo '</div>';

/*
echo '<li>';
								echo '<span class="label">université</span>';

								echo '<span class="value">';
									echo Format::numberFormat($base->getIUniversity());
									echo ' <a href="#" class="button sh" data-target="univesity-form-base-' . $base->getId() . '">‹</a>';
								echo '</span>';

								echo '<form action="' . APP_ROOT . 'action/a-updateinvest/baseid-' . $base->getId() . '/category-university" method="POST" id="univesity-form-base-' . $base->getId() . '">';
									echo '<p>';
										echo '<input type="text" name="credit" placeholder="' . $base->getIUniversity() . '" />';
										echo '<input type="submit" value="ok" />';
									echo '</p>';
								echo '</form>';
							echo '</li>';
							*/
?>