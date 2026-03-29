<?php

require_once 'AppController.php';

class SecurityController extends AppController {
    public function login() {
        // TODO
        // pobieranie danych z bazy
        // wstawianie danych na widok
        return $this->render("login");
    }
}