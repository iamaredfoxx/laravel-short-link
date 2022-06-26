<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function show() {
        return view("link", ["links" => Link::all()]);
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'url' => 'required|url',
        ]);

        $link = new Link;

        $link->key = md5(uniqid(rand(), true));
        $link->url = $validated["url"];

        $link->save();

        return redirect()->route('link');
    }

    public function redirect($id) {

        $link = Link::where("key", $id)->first();

        return redirect($link->url);
    }
}
