<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use Auth;

class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $instanceClass)
    {
        $this->middleware('auth');
        $this->todo = $instanceClass;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = $this->todo->getByUserId(Auth::id());
        $user = Auth::user();
        //
        // return "Hello World!";
        // return view('layouts.app');
        // $todos = $this->todo->all();
        // dd($todos);
        // dd($this->todo);
        // dd(compact('todos'));
        return view('todo.index', compact('todos', 'user'));
        // return view('todo.index', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $input = $request->all();
        // dd($input);
        // dd($this->todo);
        // dd($this->todo->fill($input));
        // $this->todo->fill($input)->save();
        $input['user_id'] = Auth::id();
        $this->todo->fill($input)->save();
        // dd($this->todo);
        // dd(redirect()->to('todo'));
        return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $todo = $this->todo->find($id);
        // dd($todo);
        return view('todo.edit', compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($id);
        $input = $request->all();
        // dd($this->todo->find($id)->fill($input));
        $this->todo->find($id)->update($input); //update version
        // $this->todo->find($id)->fill($input)->save(); //save version
        // $update->fill($input);
        // $update->save(); //updateメソッドもある
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // dd($this->todo->find($id));
        $this->todo->find($id)->delete();
        // dd($this->todo->find($id));

        return redirect()->route('todo.index');
    }
}
