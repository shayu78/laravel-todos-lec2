<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class TodoController extends Controller
{
    private array $titles = [
        'Купить продукты',
        'Оплатить страховку',
        'Посадить цветы',
        'Погулять с детьми',
        'Выпить кофе'
    ];

    private array $descriptions = [
        'Купить молоко, огурцы',
        'Автомобильная страховка (КАСКО)',
        'Архидеи в саду',
        'Поход в парк с аттракционами',
        'Кофейня с другом'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = DB::table('todos')->get();
        return view('todos.index', ['todos' => $todos]);
        // return $todos;
        // return Response::json($todos)
        //     ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_HEX_AMP);
        // $response = Response::json($todos);
        // return $response->setEncodingOptions(
        //     $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        // );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = Carbon::now()->format('Y-m-d H:i:s');
        $index = array_rand($this->titles);
        Todo::create([
            'title' => $this->titles[$index],
            'description' => $this->descriptions[$index],
            'created_at' => $date,
            'updated_at' => $date,
        ]);
        return redirect()->route('todos.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        if ($todo) return view('todos.show', ['todo' => $todo]);
        // return $todo;
        // $response = Response::json($todo);
        // return $response->setEncodingOptions(
        //     $response->getEncodingOptions() | JSON_UNESCAPED_UNICODE
        // );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
