<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EditionFormRequest;
use App\Edition;

class EditionController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editions = Edition::all()->sortByDesc("edition");
        return view('dashboard.editions.index', compact('editions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/editions/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditionFormRequest $request)
    {
        if ($request->hasFile('image')){
          $imageName = $request->image->store('public/images');
        }else{
          $imageName = 'noimage.jpg';
        }

        // return $request->all();
        $edition = new Edition(array(
          'edition' => $request->get('edition'),
          'year' => $request->get('year'),
          'city' => $request->get('city'),
          'state'=> $request->get('state'),
          'description'=> $request->get('description'),
          'image_city'=> $imageName,
          'proceedings'=> $request->get('proceedings'),
          ));




        $edition->save();
        return redirect('/dashboard/editions')-> with('status', 'ADD OK: ');
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
      $edition = Edition::whereId($id)->firstOrFail();
      return view('dashboard.editions.edit', compact('edition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditionFormRequest $request, $id)
    {

      $edition = Edition::whereId($id)->firstOrFail();

      if ($request->hasFile('image')){
        $imageName = $request->image->store('public/images');
      }else{
        $imageName = $edition->image_city;
      }

      if ($request->hasFile('proceedings')){
        $proceedingsName = $request->proceedings->store('public/proceedings');
      }else{
        $proceedingsName = $edition->proceedings;
      }

      $edition->edition     = $request->get('edition');
      $edition->year        = $request->get('year');
      $edition->city        = $request->get('city');
      $edition->state       = $request->get('state');
      $edition->description = $request->get('description');
      $edition->image_city  = $imageName;
      $edition->proceedings = $proceedingsName;


      $edition->save();
      $editions = Edition::all()->sortByDesc("edition");
      return view('dashboard.editions.index', compact('editions'));

      //return redirect(action('EditionController@edit', $edition->id))->with('status', '¡El ticket '.$id.' ha sido actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Edition::where('id', $id)->delete();
      //  return redirect()->intended('system-management/department');

       $edition = Edition::whereId($id)->firstOrFail();
       $edition->delete();
       return redirect('dashboard/editions')->with('status', 'El ticket ha sido borrado');

    }
}
