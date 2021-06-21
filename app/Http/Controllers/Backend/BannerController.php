<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use App\Models\Partnior;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banners::get();
        return view('backend/banner/index',['banners'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend/banner/add_banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        try {
            //$validated = $request->validated();

            $banner = new Banners();

            $banner->title = $request['title'];
            $banner->video_path = $request['video_path'];
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('upload/banner', $fileName);
                $banner->image = $fileName;
            }

            $banner->save();
            return redirect('backend/banner')->with('success',__('messages.success'));


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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
         $edit = Banners::findOrFail($id);
        return view('backend/banner/edit_banner',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        try {
//            $validated = $request->validated();

            $banner = Banners::find($id);
            $banner->title = $request['title'];
            $banner->video_path = $request['video_path'];

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('upload/banner', $fileName);
                $banner->image = $fileName;


                $banner->image = $fileName;
            }
            $banner->save();



        }catch (\Throwable $e) {
            (report($e)) . 'errr';

            return false;


        }

        return redirect('backend/banner')->with('success',__('messages.edits'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete = Banners::find($id);
       $delete->delete();
       return redirect()->back()->with('danger',__('messages.danger'));;
    }



    public function updateStatus(Request $request,$id=null){
       // dd($request);
        $data = $request->all();
        Banners::where('id',$data['id'])->update(['status'=>$data['status']]);

    }
}
