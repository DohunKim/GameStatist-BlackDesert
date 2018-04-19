<?php

function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $CI->session->userdata('userIdx');
    if ($user == null) { return false; } else { return true; }
}

function getUserIdx() {
    $CI =& get_instance();
    $idx = $CI->session->userdata('userIdx');
    if ($idx == null) { return 0; } else { return $idx; }
}

function getNickname(){
    $CI =& get_instance();
    $idx = $CI->session->userdata('nickname');
    if ($idx == null) { return 0; } else { return $idx; }
}
?>