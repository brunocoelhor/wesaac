<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Filesystem;
use File;
use App\Http\Requests\AboutFormRequest;
use App\About;

class AboutController extends Controller
{
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $about = About::whereId($id)->firstOrFail();
      return view('dashboard.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutFormRequest $request, $id)
    {

      $about = About::whereId($id)->firstOrFail();

      if ($request->hasFile('image')){
		// $imageName = $request->image->storeAs('public/images', "about.jpg");
        $imageName = $request->image->store('public/images');
      }else{
        $imageName = $about->image_city;
      }

      $about->description = $request->get('description');
      $about->image_about  = $imageName;

      $about->save();

      $about = About::whereId($id)->firstOrFail();
      return view('dashboard.about.edit', compact('about'));

    }
}
