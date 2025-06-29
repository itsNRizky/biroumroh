<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Paket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    function index(Request $req)
    {

        $title = 'Dashboard';
        $memberCount = User::count();
        $paketCount = Paket::count();
        $pakets = Paket::where('expired_date', '>=', Carbon::now())->where('status', 'accept')->latest()->paginate('2');
        $carousels = Carousel::all();

        return view('admin.index', compact('title', 'memberCount', 'paketCount', 'pakets', 'carousels'));
    }

    function createCarousel(Request $req)
    {
        if ($req->hasFile('media')) {
            $carousel = Carousel::create([
                'media' => '',
                'name' => ''
            ]);
            $foto =  $req->file('media')->store('carousel', 'public');
            $media = $req->media;
            $name = 'gambar' . $carousel->id . '.' . $media->extension();
            $carousel->update([
                'media' => $foto,
                'name' => $name
            ]);
            return redirect('/dashboard');
        }
    }

    function destroyCarousel(Carousel $carousel_id)
    {
        Storage::delete($carousel_id->media);
        $carousel_id->delete();
        return redirect('/dashboard');
    }

    function memberBiro(Request $req)
    {
        $title = 'Members';
        $biros = User::With('pakets')->where('role', 'biro')->get();
        return view('admin.member', compact('title', 'biros'));
    }

    function getPackage()
    {
        $title = 'Paket';
        $pakets = Paket::where('status', 'pending')->get();
        return view('admin.validasiPaket', compact('title', 'pakets'));
    }

    function postPackage(Request $request, $id)
    {

        $paket = Paket::where('id', $id)->first();

        $paket->status = $request->status;
        if ($request->hasFile('media')) {
            Storage::delete($paket->media);
            $foto =  $request->file('media')->store('paket');
            $media = $request->media;
            $name = 'gambarpaket' . $paket->id . '.' . $media->extension();
            $paket->update([
                'media' => $foto,
            ]);
        } else {
            $paket->update([
                'status' => $request->status,
            ]);
        }
        return redirect('/dashboard/paket');
    }
}
