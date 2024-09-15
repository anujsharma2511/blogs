@include('common.header')
<h1>Welcome</h1>

<ul>
@foreach ($users as $user)
    <li>{{$user}}</li>    
@endforeach
</ul>