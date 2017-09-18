<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\IntroFormRequest;
use App\Intro;

class IntroController extends Controller
{
        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $intro = Intro::whereId($id)->firstOrFail();
      return view('dashboard.intro.edit', compact('intro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntroFormRequest $request, $id)
    {

      $intro = Intro::whereId($id)->firstOrFail();

      if ($request->hasFile('image')){
        $imageName = $request->image->storeAs('public/image', "intro.jpg");
      }else{
        $imageName = $intro->image_intro;
      }

      $intro->image_background  = $imageName;

      $intro->save();
      
      $intro = Intro::whereId($id)->firstOrFail();
      return view('dashboard.intro.edit', compact('intro'));

    }
}
