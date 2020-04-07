<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\SlidersRequest;
use App\Slider;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->description = $request->description;

        $path = $request->file('feature_image')->store('sliders');
        $slider->feature_image = $path;
        $slider->save();

        $request->session()->flash('message', 'Service was successfully created!');
        return redirect('admin/sliders');
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
    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlidersRequest $request, $id)
    {
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $path = $request->file('feature_image')->store('sliders');
        $slider->feature_image = $path;

        $image_path = "/storage/$slider->feature_image";
        Storage::disk('public')->delete('folder_path/file_name.jpg');

        Slider::where('id', $id)->save();
        return redirect('admin/sliders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
       $slider = Slider::destroy($id);
       
    }
}
