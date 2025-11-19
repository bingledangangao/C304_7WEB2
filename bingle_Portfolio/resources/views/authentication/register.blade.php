@include('components.header')

<form action="{{ route('register') }}" method="POST">
    <label>Name</label>
    <input type="text" name="name" placeholder="Full name">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email">
    <label>Password</label>
    <input type="password" name="passowrd" placeholder="Password">
    <label>Retype password</label>
    <input type="password" name="password_confimation" placeholder="Retype password">

</form>

@include('components.footer')