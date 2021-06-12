@foreach ($posts as $post)
   <li> <strong>{{ $post-> id }}</strong> {{ $post-> title }} <br> {{ $post-> body }}  </li>
@endforeach
 