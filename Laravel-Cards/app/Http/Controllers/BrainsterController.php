<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AddProjectRequest;
use App\Models\Project;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;


class BrainsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('brainster.index', compact('projects'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProjectRequest $request)
    {
        $this->checkIfLoggedIn();

        $project = new Project();
        $project->name = $request->name;
        $project->subtitle = $request->subtitle;
        $project->image = $request->image;
        $project->url = $request->url;
        $project->description = $request->description;
        $project->save();

        $successMessage = "Продуктот е успешно додаден!";

        return redirect()->route('admin.create')->with('message', $successMessage);
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
    public function edit()
    {
        $this->checkIfLoggedIn();

        $projects = Project::all();
        return view('admin.edit', compact('projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddProjectRequest $request, $id)
    {
        $this->checkIfLoggedIn();

        $project = Project::find($id);
        $project->image = $request->image;
        $project->name = $request->name;
        $project->subtitle = $request->subtitle;
        $project->description = $request->description;
        $project->url = $request->url;
        $project->update();

        return redirect()->route('admin.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->checkIfLoggedIn();

        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('admin.edit');
    }


    public function checkIfLoggedIn()
    {
        if (!session()->has('admin')) {
            return redirect()->route('admin.login')->send();
        }
    }

    public function company(Request $request)
    {
        // dd ($request->except('_token'));
        // $company = $request->except('_token');

        $companyEmail = $request->email;
        $companyPhone = $request->phone;
        $companyName = $request->company;

        $company = [
            'email' => $companyEmail,
            'phone' => $companyPhone,
            'name' => $companyName
        ];

        Mail::to('marija.velichkovska88@gmail.com')->send(new MyTestMail($company));
       
        return view('brainster.companyInfo', compact('company'));
    }
   
}
