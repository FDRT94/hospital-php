<?php

function error_404()
{
	echo "404 - De gevraagde route is niet beschikbaar. Controleer je controller en action naam";
}

function error_db()
{
	echo "Er iets verkeerd gegaan met je query, probeer een gewenste oplossing te zoeken!";
}

function error_delete()
{
	echo "deze gegevens kunnen niet worden verwijderd";
}