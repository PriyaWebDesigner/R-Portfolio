<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function create ()
    {
        return view ('backend.resume.create');
    }

        public function store (Request $request)
    {
        $resume = new Resume();

        $resume->title = $request->title;
        $resume->resume_name = $request->resume_name;
        $resume->sub_resume_name = $request->sub_resume_name;
        $resume->year = $request->year;
        $resume->institute_name = $request->institute_name;
        $resume->description = $request->description;

        $resume->save();
        return redirect()->back();
    }

    public function show ()
    {
        $resumes = Resume::get();
        // dd($education);
        return view ('backend.resume.list',compact('resumes'));
    }

    public function delete ($id)
    {
        $education = Resume::find($id);
        $education->delete();
        return redirect()->back();
    }

    public function edit ($id)
    {
        $resume = Resume::find($id);
        return view ('backend.resume.edit',compact('resume'));
    }

    public function update (Request $request, $id)
    {
        $resume = Resume::find($id);

        $resume->title = $request->title;
        $resume->resume_name = $request->resume_name;
        $resume->sub_resume_name = $request->sub_resume_name;
        $resume->year = $request->year;
        $resume->institute_name = $request->institute_name;
        $resume->description = $request->description;

        $resume->save();
        return redirect()->back();

    }
}
