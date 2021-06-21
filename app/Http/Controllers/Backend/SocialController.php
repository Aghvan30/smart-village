<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $socials = Social::get();
            return view('backend/social/index', ['socials' => $socials]);

        } catch (\Throwable $e) {
            (report($e)) . 'errr';

            return false;
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend/social/add-social');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {
        try {
            $request->validated();
            $social = new Social();
            $social->name = $request['name'];
            $social->link = $request['link'];
            $social->save();
            return redirect('backend/social')->with('success',__('messages.success'));


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
        $social = Social::findOrFail($id);
        return view('backend/social/edit-social', ['social' => $social]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialRequest $request, $id)
    {
        try {
            $request->validated();
            $social = Social::find($id);
            $social->name = $request['name'];
            $social->link = $request['link'];
            $social->save();
            return redirect('backend/social')->with('success',__('messages.edits'));

        }catch (\Throwable $e) {
            (report($e)) . 'errr';

            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soc = Social::find($id);
        $soc->delete();
        return redirect('backend/social')->with('danger',__('messages.danger'));
    }
}
