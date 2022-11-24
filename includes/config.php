<?php
session_start();

function logout() {
    unset ($_SESSION['usuario']);
    unset($_SESSION['senha']);

}