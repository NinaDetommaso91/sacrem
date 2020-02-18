<?php  

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveus;
use App\model_has_roles;
use App\Role;
use App\User;





class NiveusController extends Controller


{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Niveuss=Niveus::orderBy('id','DESC')->paginate(3);
        return view('Niveus.index',compact('Niveuss')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
   // 
 $users=User::pluck('email','id');
 $roless=Role::pluck('name','id');
        return view('Niveus.create',compact('roless','users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'nivel'=>'required','usuario'=>'required']);
        Niveus::create($request->all());
        return redirect()->route('niveus.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {
 $Niveuss=Niveus::find($id);
        return view('Niveus.show',compact('Niveuss'));   
         }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Niveus=Niveus::find($id);
        return view('niveus.edit',compact('Niveus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nivel'=>'required','usuario'=>'required']);

        Niveus::find($id)->update($request->all());
        return redirect()->route('niveus.index')->with('success','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Niveus::find($id)->delete();
        return redirect()->route('niveus.index')->with('success','Registro eliminado satisfactoriamente');
    }
}