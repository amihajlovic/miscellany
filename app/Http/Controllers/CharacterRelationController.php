<?php

namespace App\Http\Controllers;

use App\Character;
use App\CharacterRelation;
use App\Http\Requests\StoreCharacter;
use App\Http\Requests\StoreCharacterRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CharacterRelationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('campaign');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = CharacterRelation::paginate();
        return view('characters.relations.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $character = Character::findOrFail(request()->get('character'));
        return view('characters.relations.create', compact('character'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterRelation $request)
    {
        $relation = CharacterRelation::create($request->all());
        return redirect()->route('characters.show', [$relation->first_id, 'tab' => 'relation'])->with('success', 'Character relationship created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterRelation $characterRelation)
    {
        return view('characters.relations.show', compact('characterRelation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterRelation $characterRelation)
    {
        return view('characters.relations.edit', compact('characterRelation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCharacterRelation $request, CharacterRelation $characterRelation)
    {
        $characterRelation->update($request->all());
        return redirect()->route('characters.show', $characterRelation->first_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CharacterRelation  $characterRelation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterRelation $characterRelation)
    {
        $characterRelation->delete();
        return redirect()->route('characters.show', [$characterRelation->first_id, 'tab' => 'relation']);
    }
}