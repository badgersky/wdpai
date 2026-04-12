<?php

require_once 'AppController.php';
require_once __DIR__.'/../repositories/UsersRepository.php';

class DashboardController extends AppController {
    public function index() {
        // TODO
        // pobieranie danych z bazy
        // wstawianie danych na widok
        $usersRepository = new UsersRepository();
        $users = $usersRepository->getUsers();

        $title = 'HGW';
        return $this->render("dashboard", ["title" => $title, "users" => $users]);
    }
}