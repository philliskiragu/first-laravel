<?php

namespace App\Http\Controllers;

use App\Journal;
use App\Http\Requests;
use Carbon\Carbon;
use Request;

class EntriesController extends Controller
{
    // check if user is authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }
    // index function to display all journal entries
    public function index()
    {
        // fetch all entries from the journal table
        $entries = Journal::all();

        return view('journals.index', compact('entries'));
    }
    // show function to display show 1 journal entry
    public function show($id)
    {
        // fetch a single entry with id
        $entry = Journal::findOrFail($id);

        return view('journals.show', compact('entry'));
    }
    // function to create an entry
    public function create()
    {
        return view('journals.create');
    }
    // stores a value
    public function store()
    {
        $input = \Request::all();
        $input['published_at'] = Carbon::now();

        $journal = Journal::create($input);

        return redirect()->route('journals');
    }
}
