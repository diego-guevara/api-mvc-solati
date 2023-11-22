<?php

const BASE_URL = "";

// Zona Horaria (https://www.php.net/manual/es/timezones.america.php)
date_default_timezone_set('America/Bogota');

// Datos de conexión a base de datos

// MySQL

const DB_ENGINE = "mysql";
const DB_HOST = "localhost";
const DB_PORT = "3306";
const DB_NAME = "devops_api_solati";
const DB_USER = "root"; 
const DB_PASSWORD = ""; 
const DB_CHARSET = "charset=utf8";

// PostgreSQL
/*
const DB_ENGINE = "pgsql";
const DB_HOST = "localhost";
const DB_PORT = "5432";
const DB_NAME = "devops_api_solati";
const DB_USER = "postgres"; 
const DB_PASSWORD = "1234"; 
*/

?>