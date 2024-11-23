@if(session('generated_password'))
    <p>Your password is: {{ session('generated_password') }}</p>
@endif
