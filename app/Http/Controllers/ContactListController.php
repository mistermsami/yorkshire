<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactListController extends Controller
{
    public function index()
    {
        return view('dashboard.contact.index');
    }
    public function contactDetail($id)
    {
        $contactId = $id;
        return view('dashboard.contact.detail',['contactId' => $contactId]);
    }
}
