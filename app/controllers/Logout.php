<?php 

/**
 * Logout Class 
 */

class Logout extends Controller
{
    public function index()
    {
        Auth::logout();
        
        redirect('login');
    }
}