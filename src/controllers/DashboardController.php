<?php

require_once 'AppController.php';

class DashboardController extends AppController {
    public function index() {
        // TODO
        // pobieranie danych z bazy
        // wstawianie danych na widok
        $title = 'HGW';
        return $this->render("dashboard", );
    }
}