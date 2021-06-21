<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Http\Requests\UserRequest;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        try {
            $menus = Menu::with(['parent'=>function($q){
                $q->select('id', 'parent_id','name');
            }])->get();

            return view('backend/menu/index', ['menus' => $menus]);

        } catch (\Throwable $e) {
            dd($e) ;
            return false;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        try {
            $parents = Menu::pluck('name', 'id');

            return view('backend/menu/add', ['parents' => $parents]);
        } catch (\Throwable $e) {
            report($e) . 'errr';
            return false;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
       // dd($request);
        try {


            $input = $request->all();

            $input['parent_id'] = empty($input['parent_id']) ? null : $input['parent_id'];
            if($request->hasFile('file')) {
                $file = $request->file('file');

                $extension = $file->getClientOriginalExtension();

                $fileName = time() . '.' . $extension;
                $input['image'] = $fileName;
                $file->move('upload/menu', $fileName);





//                dd($input);
              //  dd($input->image = $fileName);
            }

                Menu::create($input);
            return redirect()->route('menus.index')->with('success',__('messages.success'));

        } catch (\Throwable $e) {
            report($e) ;
            //dd($e);
            return false;
        }
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        try {
            $info = Menu::with('allchildren')
                ->where('id', $id)
                ->first();
            return view('backend/menu/show', ['menu' => $info]);
        } catch (\Throwable $e) {
            report($e);

            return redirect()->back()->with('danger', __('messages.old_pass_error'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $menus = Menu::pluck('name', 'id');

        return view('backend/menu/edit-menu', ['menu'=>$menu, 'menus'=>$menus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MenuRequest $request)
    {
        //dd($request);
        try {

            $menu = Menu::find($request->id);
            $input = $request->all();
            if($request->hasFile('file')) {
                $file = $request->file('file');

                $extension = $file->getClientOriginalExtension();

                $fileName = time() . '.' . $extension;
                $input['current_image'] = $fileName;
                $file->move('upload/menu',$fileName);

               $menu->image = $fileName;
                }
            $menu ->fill($input)->save();

            return redirect()->route('menus.index')->with('success',__('messages.edits'));

        } catch (\Throwable $e) {
            dd(report($e));
            return redirect()->back()->with('danger', __('messages.old_pass_error'));
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $m = Menu::find($id);
        $m->delete();
        return redirect('/backend/menus')->with('danger',__('messages.danger'));;
    }
}
//dd('ff');
//jnjel
// todo hetagayum jnjel contety
//        if ($menu->parents()) {
//
//            foreach ($menu->parents()->with('allchildren')->get() as $child) {
//                foreach ($child->parents() as $mm) {
//                    $mm->update(['parent_id' => NULL]);
//                }
//            }
//
//            $menu->parents()->delete();
//        }

// foreach ($menu->menus as $m) {
//      $m->update(['parent_id' => NULL]);
//   }

//    $menu->delete();




