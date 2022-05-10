<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index()
    {
        $lists = TodoList::all();
        return response($lists);
    }

    public function show(TodoList $list)
    {
        return response($list);
    }

    public function store(Request $request)
    {
        $list = TodoList::create($request->all());
        // return response($list, Response::HTTP_CREATED);
        return $list; // automatically returns 201 status
    }
}
