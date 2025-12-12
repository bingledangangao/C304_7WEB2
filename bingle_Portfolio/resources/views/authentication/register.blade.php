@include('components.header')

<<<<<<< HEAD
<form action="{{route('register')}}"method="POST">
    @csrf
=======
<form action="{{ route('register') }}" method="POST">
>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
    <label>Name</label>
    <input type="text" name="name" placeholder="Full name">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email">
    <label>Password</label>
<<<<<<< HEAD
    <input type="password" name="password" placeholder="Password">
    <label>Retype password</label>
    <input type="password" name="password_confirmation" placeholder="Retype password">
    <input type="submit">
</form>

@include('components.footer')
=======
    <input type="password" name="passowrd" placeholder="Password">
    <label>Retype password</label>
    <input type="password" name="password_confimation" placeholder="Retype password">

</form>

@include('components.footer')
>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
