<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{

    public function index()
    {   
        $notices = Notice::all();
        return view("home")->with("notices", $notices);
    }

    public function create(Request $request)
    {
        $notice  = new Notice;
        $notice->head = $request->head;
        $notice->body = $request->body;
        $notice->from = $request->from;
        $notice->save();

        return redirect(route("notice.index"));
    }

    public function store(Request $request)
    {
        $notice  = Notice::find($request->id);
        $notice->head = $request->head;
        $notice->body = $request->body;
        $notice->from = $request->from;
        $notice->save();

        return redirect(route("notice.index"));

    }

    public function show($id)
    {
        $notice = Notice::find($id);
        return view("detailnotice")->with("notice", $notice);
    }

    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('editnotice')->with('notice', $notice);
    }

    public function update(Request $request, Notice $notice)
    {
        //
    }

    public function destroy($id)
    {
        $notice = Notice::find($id);
        $notice->delete();
        return redirect(route("notice.index"));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $notices = Notice::where ( 'body', 'LIKE', '%' . $search . '%' )->get();

        return view('home')->with('notices', $notices);

    }

}
