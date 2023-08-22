<form method="post" action="{{url('login')}}">
    @csrf
    @method('post')

    <x-form.form-input name-of-input="login"></x-form.form-input>
    <x-form.form-input name-of-input="password"></x-form.form-input>
    <div>
        <input type="submit"/>
    </div>
</form>
