@extends('layouts.master')

@section('content')


 <div class="row mt-5">
     
    <div class="col-md-6">
  
        @if (session()->has('msg'))
            <div class="alert alert-success">
               {{  session()->get('msg') }}
            </div>
        @endif

        <div class="card">
           
           <div class="card-header">
               Edit Task
           </div>

            <div class="card-body">
           
                <form action="{{ route('task.update', $taskUnderEdit->id) }}" method="post">

                        @csrf
                        @method('put')
               
                    <div class="form-group">
                      <label for="task">Task</label>
                      <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid':''}}" id="task" value='{{ $taskUnderEdit->title }}'>
                      <div id="validationServer03Feedback" class="invalid-feedback">
                         The task field is required.
                      </div>
                    </div>

                    <div class="form-group">
                       <input type="submit" value="Save Changes" class="btn btn-primary">
                    </div>
                
                </form>

            </div>

        </div>
    </div>
 </div>    
@endsection