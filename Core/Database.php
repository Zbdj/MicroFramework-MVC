<?php
namespace Core;

class Database
{
	public static function bdd()
	{
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
			return $bdd;
		}
		catch (Exception $e)
		{
        	die('Erreur : ' . $e->getMessage());
        }
	}
}
?>