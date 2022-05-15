<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ListController extends Controller
{
    public function new() {
        $title = 'New list';
        return view('users.list_new', compact('title'));
    }

    public function show() {
        $title = 'Home';
        $lists = Lists::where('user_id', Auth::id())->orderBY('name', 'ASC')->get();

        return view('users.dashboard', compact('title', 'lists'));
    }

    public function create(Request $r) {
        $r->validate([
            'nameOfChild' => 'required|max:255',
            'genderOfChild' => 'required|in:boy,girl,neutral',
            'description' => 'required',
            'photoChild' => 'image|required|max:2000|mimes:png,jpg,gif,jpeg',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password',
        ]);

        $listEntity = new Lists();
        $listEntity->name = $r->nameOfChild;
        $listEntity->gender = $r->genderOfChild;
        $listEntity->description = $r->description;
        $listEntity->password = Hash::make($r->password);
        $listEntity->slug = Str::random(6);
        $listEntity->image = $this->storeImage($r->photoChild);
        $listEntity->user_id = Auth::id();
        $listEntity->save();

        return redirect()->route('dashboard');
    }

    private function storeImage($image) {
        // get extension
        $ext = $image->getClientOriginalExtension();

        // make random file name, with day-prefix
        $randomName = date('d') . '-' . Str::random(10) . '.' . $ext;

        // path magic
        $filePath = 'uploads/' . date('Y/m/');
        $fullPath = $filePath . $randomName;

        // upload files in symbolic public folder (make accessable)
        /** @var Illuminate\Filesystem\FilesystemAdapter */
        $fileSystem = Storage::disk('public');
        $fileSystem->putFileAs($filePath, $image, $randomName);

        return $fullPath;
    }
}
