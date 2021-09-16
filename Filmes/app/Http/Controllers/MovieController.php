<?php
namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Country;
use Facade\Ignition\Http\Controllers\ScriptController;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use SebastianBergmann\LinesOfCode\Counter;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = request('search');
        
        if ($search){
            
            $movies = Movie::where([
                ['title','like','%'.$search.'%']])
                ->orwhere([['genre','like','%'.$search.'%']])
                ->orwhere([['release','like','%'.$search.'%']])
                ->orwhere([['rating','like','%'.$search.'%']])
                ->get();
            
            if(count($movies) == 0){
                $country = Country::where('name',$search)->first();
                if ($country == null){
                    $movies = [];
                }
                else{
                    $movies = Movie::where('country_id',$country->id)->get();
                } 
            }
        }
        else{
            $movies = Movie::all();
        }
        return view('movie' , compact('movies','search'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();

        $country = Country::create([
            'name' => $data['country']
        ]);

        $data['country_id'] = $country->id;

        $data['image'] = '/storage/'. $request->file('image')->store('movie','public');

        Movie::create($data);

        return redirect(route('movie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);

        return view('edit', compact('movie'));
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
        
        $movie = Movie::find($id);
        $data = $request->all();
        $country = Country::find($movie->country_id);
        
        if (isset($data['image'])){
            $path = substr($movie->image,9);
            Storage::delete('public/'. $path);
            $data['image'] = '/storage/'. $request->file('image')->store('movie','public');
        }

        if($country->name !== $data['country']){
            $new_country = Country::create([
                'name' => $data['country']
            ]);

            $data['country_id'] = $new_country->id;
            $movie->update($data);
            $country->delete();
        }
        else{
            $data['country_id'] = $country->id;
            $movie->update($data);
        }

        return redirect(route('movie.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::find($id)->delete(); 
        return redirect(route('movie.index'));
    }

}   
