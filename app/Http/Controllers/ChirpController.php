<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChirpController extends Controller
{
   
    public function index()
    {
        //
        $search = request('search'); 
        $chirps = Chirp::query()
            ->with('user')
            ->when($search, function ($query) use ($search) {
                $query->where('chirps.message', 'LIKE', "%{$search}%")
                    ->orWhere('chirps.created_at', 'LIKE', "%{$search}%")


                    ->orWhereHas('user', function ($query) use ($search) {
                        $query->where('users.name', 'LIKE', "%{$search}%");
                    });
            })
            ->orderBy('id', 'desc')
            // ->simplePaginate(10)
            ->Paginate(10)
            ; 



        return view('chirps.index', compact('chirps'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'required',
            'message' => 'required|min:3|max:255',
        ]);

        Chirp::create([
            'user_id' => Auth::user()->id,
            'message' => $request->get('message'),
        ]);

        /* Auth::user()->chirps()->create([
            'message' => $request->get('message'),
        ]); */

        return redirect()->route('chirps.index')->with('message', __('Chirp Created Successfully'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
        /*   if (auth()->user()->isNot($chirp->user)) {
            
            abort(403);
            # code...
        } */
        $this->authorize('update', $chirp);
        return view('chirps.edit', compact('chirp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        //
        /* if (auth()->user()->isNot($chirp->user)) {
            
            abort(403);
            # code...
        } */
        $this->authorize('update', $chirp);

        $validated = $request->validate([
            'user_id' => 'required',
            'message' => 'required|min:3|max:255',
        ]);

        $chirp->update($validated);

        /* Auth::user()->chirps()->create([
            'message' => $request->get('message'),
        ]); */

        return redirect()->route('chirps.index')->with('message', __('Chirp Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        //
        $this->authorize('delete', $chirp);

        $chirp->delete();

        return redirect()->route('chirps.index')->with('message', __('Chirp Deleted Successfully'));
    }
}
