<?php

function logout()
{
    session_start();
    session_destroy();
    session_unset();
	session_write_close();
}