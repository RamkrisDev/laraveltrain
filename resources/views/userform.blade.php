<h1>user login</h1>

@if($errors->any())
{{$errors}}
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="form" method='POST'>
    @csrf
    <input type="text" name="username" placeholder='enter username' id=""> <br>
    <span style='color:red'>
        @error('username'){{$message}}
        @enderror
    </span>
    <br>
    <input type="text" name="password" placeholder='enter passwrod'>
    <input type="submit">
</form>