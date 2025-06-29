<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Paket;
use Carbon\Carbon;
use Log;

class PaketController extends Controller
{
    public function index()
    {
        $check = Auth::user();
        $carousels = Carousel::all();

        if ($check == null) {
            $biro = Paket::where('expired_date', '>=', Carbon::now())->where('status', 'accept')->with('Biro')->latest()->paginate(4);
        } else {
            if (auth()->user()->role == 'biro') {
                $biro = Paket::where('expired_date', '>=', Carbon::now())->where('status', 'accept')->where('user_id', auth()->user()->id)->with('Biro')->latest()->paginate(4);
                Log::info('Biro: ', ['data' => $biro->toArray()]);
                return view('index', compact('biro', 'carousels'));
            }
            $biro = Paket::where('expired_date', '>=', Carbon::now())->where('status', 'accept')->with('Biro')->latest()->paginate(4);

            return view('index', compact('biro', 'carousels'));
        }


        return view('index', compact('biro', 'carousels'));
    }
    public function search(Request $request)
    {
        $region = $request->input('region');
        $tanggal = $request->input('date');
        $biaya = $request->input('price');

        $query = Paket::query();

        if (!empty($region)) {
            $query->where('expired_date', '>=', Carbon::now())->where('status', 'accept')->where('kota', 'LIKE', '%' . $region . '%');
        }

        if (!empty($tanggal)) {
            $query->where('expired_date', '>=', Carbon::now())->where('status', 'accept')->whereDate('tanggal_keberangkatan', $tanggal);
        }

        if (!empty($biaya)) {
            $query->where('expired_date', '>=', Carbon::now())->where('status', 'accept')->where('harga', $biaya);
        }
        if (empty($region) && empty($tanggal) && empty($biaaya)) {
            return redirect('/');
        }

        $results = $query->paginate(2);

        return view('index', compact('results'));
    }
    public function create()
    {
        return view('paket.create');
    }
    public function store(Request $request)
    {
        Log::info('Request all data: ', $request->all());
        try {
            $kodeTerakhir = Paket::latest('id')->first();
            if ($kodeTerakhir) {
                $kodePart = explode('-', $kodeTerakhir->kode);
                $nextNumber = (int) end($kodePart) + 1;
            } else {
                $nextNumber = 1;
            }

            $kodeBaru = 'HSU-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

            $request->validate([
                'berangkat' => 'required|date|after:tomorrow',
                'pulang' => 'required|date|after:berangkat',
                'bandara' => 'required',
                'airline' => 'required',
                'kota' => 'required',
                'harga' => 'required',
                'flight' => 'required|in:direct,transit',
            ]);

            $tiket = $request->has('tiket') ? 'yes' : 'no';
            $visa = $request->has('visa') ? 'yes' : 'no';
            $akomodasi = $request->has('akomodasi') ? 'yes' : 'no';
            $makan = $request->has('makan') ? 'yes' : 'no';
            $umroh = $request->has('umroh') ? 'yes' : 'no';
            $airport = $request->has('airport') ? 'yes' : 'no';
            $bus = $request->has('bus') ? 'yes' : 'no';
            $zam = $request->has('zam') ? 'yes' : 'no';
            $passport = $request->has('passport') ? 'yes' : 'no';

            $paket = Paket::create([
                'name' => $request->name,
                'user_id' => auth()->user()->id,
                'status' => 'pending',
                'expired_date' => $request->tanggal_kadaluarsa,
                'kode' => $kodeBaru,
                'tanggal_keberangkatan' => $request->berangkat,
                'tanggal_kepulangan' => $request->pulang,
                'bandara' => $request->bandara,
                'airline' => $request->airline,
                'flight' => $request->flight,
                'kota' => $request->kota,
                'kota_transit' => $request->kota_transit,
                'harga' => $request->harga,
                'tour' => $request->tour,
                'tiket' => $tiket,
                'visa' => $visa,
                'akomodasi' => $akomodasi,
                'makan' => $makan,
                'umroh' => $umroh,
                'airpot_handling' => $airport,
                'bus' => $bus,
                'zam' => $zam,
                'passport' => $passport,
                'media' => ''
            ]);


            if ($request->hasFile('media')) {
                $foto = $request->file('media')->store('paket', 'public');
                $paket->update([
                    'media' => $foto,
                ]);
            }

            return redirect('/')->with('success', 'Paket berhasil disimpan!');
        } catch (\Exception $e) {
            Log::error('Failed to save paket: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to save paket: ' . $e->getMessage()])->withInput();
        }
    }
}
