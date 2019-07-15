<?php

function is_logged_in()
{
    // untuk memanggil library CI
    $ini = get_instance();
    if (!$ini->session->userdata('nim')) {
        redirect('auth');
    }
}
