﻿<?php

function connexionBDD()
{
    try
    {
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_SSL_CA => 'DigiCertGlobalRootCA.crt.pem' // Chemin vers le certificat RootCA de Azure
            );
    
            $bdd = new PDO(
            'mysql:host=mamegeststages.mysql.database.azure.com;port=3306;dbname=bdd_geststages;charset=utf8',
            'mame',
            'Simplon2024@',
            $options
        );
            //array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
            return $bdd;
    }
    catch(Exception $e)
    {
        $pdo_error = $e->getMessage();
                return false;
    }
    
}

?>
