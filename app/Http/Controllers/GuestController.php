<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\Guest_list;
use App\Models\Lists;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    public function loginShow($slug) {
        if($this->checkIfAuthorized($slug)) return redirect()->route('guests.list', $slug);

        $list = Lists::where('slug', $slug)->first();

        return view('guests.list-login', compact('list'));
    }

    public function login(Request $r, $slug) {
        $list = Lists::where('slug', $slug)->first();

        if (Hash::check($r->password,$list->password)) {
            $this->makeGuestKey($list->id);
            return redirect()->route('guests.list', $list->slug);
        }

        return redirect()->back()->withErrors(__('The password is incorrect.'));
    }

    public function list($slug) {
        if(!$this->checkIfAuthorized($slug)) return redirect()->back();
        dd('list done');
    }

    public function product($slug) {
        if(!$this->checkIfAuthorized($slug)) return redirect()->back();
        dd('product done');
    }

    public function message($slug) {
        if(!$this->checkIfAuthorized($slug)) return redirect()->back();
        dd('message done');
    }

    private function makeGuestKey($listId) {
        $key = session()->get('_token');
        $guest = Guest::where('guest_key', $key)->first();

        if(!$guest) {
            $guest = $this->makeGuest();
        }

        $listGuest = Guest_list::where('guest_id', $guest->id)
            ->where('list_id', $listId)
            ->first();

        if($listGuest) {
            $listGuest->expires_at = date(Carbon::now()->addHours(2));
            $listGuest->save();
        } else {
            $listGuestEntity = new Guest_list();
            $listGuestEntity->guest_id = $guest->id;
            $listGuestEntity->list_id = $listId;
            $listGuestEntity->expires_at = date(Carbon::now()->addHours(2));
            $listGuestEntity->save();
        }
    }

    private function makeGuest() {
        $key = session()->get('_token');

        $guestEntity = new Guest();
        $guestEntity->guest_key = $key;
        $guestEntity->save();
        return $guestEntity;
    }

    private function checkIfAuthorized($slug) {
        $key = session()->get('_token');
        $guest = Guest::where('guest_key', $key)->first();
        $list = Lists::where('slug', $slug)->first();

        $listGuest = null;

        if ($guest) {
            $listGuest = Guest_list::where('guest_id', $guest->id)
                ->where('list_id', $list->id)
                ->where('expires_at', '>=', now())
                ->first();
        }


        if ($listGuest) return true;
        return false;
    }
}
