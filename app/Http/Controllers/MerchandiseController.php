<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index() {
        $merchandises = Merchandise::orderBy('name')->get();

        return view('merchandises.index',[
            'merchandises' => $merchandises
        ]);
    }

    public function store(Request $request) {
        Merchandise::create([
            'name' => $request->name,
            'discription' => $request->discription,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect('/merchandises');
    }

    public function edit(Merchandise $merchandises) {

        return view('merchandises.edit', [
            'merchandises' => $merchandises
        ]);
    }

    public function update(Request $request, $merchandises){
        $input = $request->all();
        $merchandises = Merchandise::find($merchandises);
        $merchandises->name=$input['name'];
        $merchandises->discription=$input['discription'];
        $merchandises->quantity=$input['quantity'];
        $merchandises->price=$input['price'];



        $merchandises->save();
        return redirect('/merchandises');
    }

    public function delete(Merchandise $merchandises) {

        return view('merchandises.delete', [
            'merchandises' => $merchandises
        ]);
    }

    public function destroy($merchandises){
        Merchandise::find($merchandises)->delete();
        return redirect('/merchandises');
    }

}
