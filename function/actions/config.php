<?php

const DB_HOST = "MySQL-5.7";
const DB_NAME = "webGame";
const DB_PORT = '3306';
const DB_USERNAME = "root";
const DB_PASSWORD = "";


$pdo = new PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
