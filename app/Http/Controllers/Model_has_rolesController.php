<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_has_roles;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;


class Model_has_rolesController extends Controller
{
      public function index()
    {
        $users=DB::table('model_has_roles')
            ->join('users', 'model_has_roles.model_id', '=', 'users.id')
            ->join('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->select('model_has_roles.*', 'users.email', 'model_has_roles.model_id', 'users.id', 'users.name As x', 'roles.name')
            ->orderBy('users.id','ASC')->paginate(10);


        return view('asignacion.index',compact('users')); 
    }//
 public function create()
    {
        //
 $users=DB::table('users')
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('model_has_roles')
                      ->whereRaw('model_has_roles.model_id = users.id')
                      ->select('users.email', 'users.name As x','users.id')
                      ;
            })
            ->get();

            $usernames = $users->pluck('name','id');

 $roless=Role::pluck('name','id');

        return view('Asignacion.create',compact('roless','usernames'));
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
        $this->validate($request,['role_id'=>'required','model_type'=>'required','model_id'=>'required']);
        Model_has_roles::create($request->all());
        return redirect()->route('Asignacion.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $model_id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model_has_roles=Model_has_roles::where('model_role',$id);
        return view('asignacion.show',compact('model_role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Model_has_roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users=users::find($id);

         $roless=Role::pluck('name','id');
        return view('Asignacion.edit',compact('roless','users'));
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
        $this->validate($request,[ 'role_id'=>'required']);

        Model_has_roles::find($id)->update($request->all());
        return redirect()->route('Asignacion.index')->with('success','Registro actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $model_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Model_has_roles::where('model_id',$id)->delete();
        return redirect()->route('Asignacion.index')->with('success','Registro eliminado satisfactoriamente');
  
    }
}//

