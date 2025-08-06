<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        //  route --> /ninjas/
        $ninjas = Ninja::orderBy('created_at', 'desc')->get(); 

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        //  route --> /ninja/{id}
        //  fetch all records & pass into the index view
    }

    public function create() {
        //  route --> /ninja/create
        //  render a create view (with web form) to users
    }

    public function store() {
        //  route --> /ninja/ (POST)
        //  hanlde POST request to store a new ninja record in table
    }

    public function destroy($id) {
        //  --> /ninja/{id} (DELETE)
        //  handle delete requests to delete a ninja record from table
    }

    //  edit() and update() for edit vieww and update requests
    //  we eon't be using these routes

}
