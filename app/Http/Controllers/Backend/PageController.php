<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Social;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::get();
        return view('backend/content/index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $parents = Menu::pluck('name', 'id');
        return view('backend/content/add-content', ['parents' => $parents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        $p = new Page();

        $p->menu_id = $request['menu_id'];
        $p->short_content = $request['short_content'];
        $p->contents = $request['content'];
        $p->description = $request['desc'];
        $p->save();
        return redirect('backend/pages')->with('success', __('messages.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Page::findOrFail($id);

        $edits = Menu::pluck('name', 'id');
        return view('backend/content/edit-page', compact(['edits', 'edit']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(PageRequest $request, $id)
    {

        try {
            $update = Page::find($id);
            $update->menu_id = $request['menu_id'];
            $update->short_content = $request['short_content'];
            $update->contents = $request['content'];
            $update->description = $request['desc'];
            if (!$update->save())
                return redirect()->back()->with('danger', __('messages.old_pass_error'));
            else
                return redirect('backend/pages')->with('success', __('messages.edits'));
        } catch (\Throwable $e) {
            dd($e);
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
        try {
            $delete = Page::find($id);
            $delete->delete();
            return redirect('backend/pages')->with('danger', __('messages.danger'));
        } catch (\Throwable $e) {
            dd($e);
            return redirect()->back()->with('danger', __('messages.old_pass_error'));
        }
    }
}
