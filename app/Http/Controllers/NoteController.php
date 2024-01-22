<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    public function index(){
        return view('notes.index',['notes'=>Notes::latest()->user()->filter(request(['search']))->paginate(5)->withQueryString()]);
    }

    public function add(){

        return view('notes.form',[
            'legend'=>"Add a note",
            'action'=>"storeAddNotes",
            'method'=>"POST"
        ]);
    }

    public function store(){

        $attributes = request()->validate([
            'title'=>['required'],
            'body'=>['required']
        ]);

        $attributes['slug'] = str_replace(" ","-",$attributes['title']);

        $attributes['user_id'] = auth()->user()->id;

        $result = Notes::create($attributes);

        return redirect("/notes/{$result->slug}")->with('success',"Notes added successfully");
    }

    public function edit(string $slug){
        $notes = Notes::where(['slug' => $slug,'user_id'=>auth()->user()->id])->first();

        if(!$notes){
            abort(404);
        }

        return view('notes.form',[
            'legend'=>"Edit a note",
            'action'=>"storeEditNotes",
            'method'=>"PUT",
            'note'=>$notes
        ]);
    }

    public function storeEdit(){
        try {
            $attributes = request()->validate([
                'title' => ['required', 'max:255'],
                'body' => ['required', 'max:255'],
                'slug' => [],
            ]);
            $oldSlug = $attributes['slug'];

            $noteData = Notes::where(['slug' => $oldSlug, 'user_id' => auth()->user()->id])->first();
            $noteData->title = $attributes['title'];
            $noteData->body = $attributes['body'];
            $noteData->slug = str_replace(" ", "-", $attributes['title']);

            $noteData->save();

            return redirect('/notes')->with('success', 'Note updated successfully');
        }catch(Exception $e){
            return back()->withErrors(['title' => $e->getMessage(), 'body' =>$e->getMessage()]);
        }
    }

    public function show(string $slug){
        $notes = Notes::with("user")->where(['slug'=>$slug,'user_id'=>auth()->user()->id])->first();

        if(!$notes){
            abort(404);
        }

        return view('notes.show',["notes"=>$notes]);
    }

    public function remove(string $slug){
        try{
            Notes::where(['slug'=>$slug,'user_id'=>auth()->user()->id])->delete();
            return redirect('/notes')->with('success',"Successfully deleted");
        }catch (Exception $e){
            return redirect("/notes/{$slug}")->with('error',$e->getMessage());
        }
    }
}
