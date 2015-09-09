<?php
//verif mot de passe
function verif_mdp($_POST['mdp'], $_POST'[mdp2'])
	{
		$Erreur = 0;
		if (!empty($_POST['mdp']) AND !empty($_POST['mdp2']))
			{
				if ($_POST['mdp'] ==$_POST['mdp2'])
					{
						if (preg_match("#^(^ ){3,120}#", $_POST['mdp']))
							{
								$mdp = $_POST['mdp'];
								return $mdp;
							}
						else
							{
								$Erreur++;
								return $Erreur;
							}
					}
				else
					{
						$Erreur++
						return $Erreur;
					}
			}
		else
			{
				$Erreur++;
				return $Erreur;
			}
