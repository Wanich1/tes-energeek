@extends('layouts.main')

@section('container')

    <div class="img-left">
        <img src="assets/images/Allura - UI Windows.png" alt="">
    </div>

<div class="login-box">
  <div class="login-logo">
    <a href=""><img class="img-thumb mb-2" src="assets/images/energeek2.png" alt="" style="height: 70px"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="border-radius: 0.5rem !important">
    <div class="card-body ">
      <p class="text-center login-box-msg fw-bold my-4">Silahkan Masuk</p>

      <form >
        <div class="input-group mb-3">
          <input id="username" type="text" class="form-control"  placeholder="Username">
          <div class="input-group-append">
          </div>
        </div>
        <div class="input-group mb-4">
          <input id="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
          </div>
        </div>
        <div class="text-center mb-5">
            <button type="button" onclick="login()" class="btn btn-danger btn-block">Masuk</button>
        </div>
      </form>

</div>

<script>
    function login(){
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username == "energeek" && password == "En3rg33k")
        {
            window.location.href = "/inventory";
        }
        else{
            alert("tes");
        }

    }
</script>
@endsection
