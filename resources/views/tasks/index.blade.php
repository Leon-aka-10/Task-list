@extends('layouts.master')

@section('content')

 <div class="row mt-5">
     
    <div class="col-md-6">

       <!--@if ($errors->any())
         
        @foreach ($errors->all() as $error)

            <div class="alert alert-danger">
                {{ $error }}
            </div>

        @endforeach

       @endif -->

       @if (session()->has('msg'))
            <div class="alert alert-success">
               {{  session()->get('msg') }}
            </div>
       @endif
    
        <div class="card">
           
           <div class="card-header">
               Add Task
           </div>

            <div class="card-body">
           
                <form action="{{ route('task.store') }}" method="post">

                        @csrf
               
                    <div class="form-group">
                      <label for="task">Task</label>
                      <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid':''}}" id="task" placeholder="Task">
                      <div id="validationServer03Feedback" class="invalid-feedback">
                         The task field is required.
                      </div>
                    </div>

                    <div class="form-group">
                       <input type="submit" class="btn btn-primary">
                    </div>
                
                </form>

            </div>

        </div>

    </div>

 </div>


 
 <div class="row mt-5">
     
    <div class="col-md-6">
    
        <div class="card">
           
           <div class="card-header">
               View Tasks
           </div>

            <div class="card-body">
             
               <table class="table table-bordered">
                  
                <tr>
                    
                    <th>Task</th>
                    <th style="width: 2em;">Action</th>
                  
                </tr>

                @foreach ($tasks as $task)

                <tr>
                    <td>{{ $task->title }}
                      <td>
                        
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-secondary btn-sm">Edit</a>
                
                      
                        <form action="{{ route('task.destroy', $task->id) }}" method="post">
                            @csrf
                            @method('delete') 
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form> 
                      </td>
                    </td>
                </tr>

                @endforeach  

               </table>

            </div>

        </div>

    </div>

 </div>

@endsection