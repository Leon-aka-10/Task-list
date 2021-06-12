@extends('layouts.master') 

@section('content')
    
    <h3>Login</h3>
    <hr>

    @if (session()->has('msg'))
          <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif

    <div class="card">
       <div class="card-header">
            Login
       </div>
       <div class="card-body">
       
            <form action="{{ route('user.login') }}" method="post">
              
                @csrf

                <div class="col-md-6">
                 <label for="email" class="form-label">Email:</label>
                 <input type="text" name="email" class="form-control {{ $errors->has('email')? 'is-invalid' : ''}}" id="email" placeholder="email" value="{{ old('email') }}">
                 <div class="invalid-feedback">
                   {{ $errors->first('email')}}
                 </div>
                </div>

                <div class="col-md-6">
                 <label for="password" class="form-label">Password:</label>
                 <input type="password" name="password" class="form-control {{ $errors->has('password')? 'is-invalid' : ''}}" id="password" placeholder="password">
                 <div class="invalid-feedback">
                 {{ $errors->first('password')}}
                 </div>
                </div>


                <div class="col-md-6">
                    <input type="submit" class="btn btn-primary">
                </div>

            </form>
        
        </div>
    </div>

   

@endsection

