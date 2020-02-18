@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel-body"> 

                        
     
                      </ul> 
    
    

 
</ul>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard



</div></div>

    <div>   <h4>Bienvenidod . {{ auth()->user()->name }} {{ auth()->user()->id }}  </h4>



  @if($roles->count())  
              @foreach($roles as $roles)  
              <tr>
                 <h4> nivel  {{ $roles->role_id }} </h4>
              
                
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
       
             



  <div> 
 
   </div>

              </div>
            </div>
        </div>
    </div>
 
</div>
@endsection
