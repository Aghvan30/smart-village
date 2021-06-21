<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partnior;
use App\Http\Requests\PartniorRequest;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;

class PartniorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $partniors = Partnior::get();
       return view('backend/partnior/index',['partniors'=>$partniors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('backend/partnior/add-partnior');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartniorRequest $request)
    {
        try {
            $validated = $request->validated();

            $partnior = new Partnior();
            $partnior->name = $request['name'];
            $partnior->link = $request['link'];
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('upload', $fileName);
                $partnior->image = $fileName;
            }

            $partnior->save();
            return redirect('backend/partnior')->with('success',__('messages.success'));

            }catch (\Throwable $e) {
            (report($e)) . 'errr';

            return false;
}


        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partnior = Partnior::findOrFail($id);
        return view('backend/partnior/edit-partnior',['partnior'=>$partnior]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PartniorRequest $request, $id)
    {
        try {
            $validated = $request->validated();

        $part = Partnior::find($id);
        $part->name = $request['name'];
        $part->link = $request['link'];

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('upload', $fileName);
            $part->image = $fileName;


            $part->image = $fileName;
        }
            $part->save();



           }catch (\Throwable $e) {
            (report($e)) . 'errr';

            return false;


        }

            return redirect('backend/partnior')->with('success',__('messages.edits'));

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partnior= Partnior::find($id);
        $partnior->delete();
        return redirect('backend/partnior')->with('danger',__('messages.danger'));;
    }
}
