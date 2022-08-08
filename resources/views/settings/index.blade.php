@extends('layouts.layout')
@section('content')
    <div class="setting-box">
        <img src="/img/settings/user.png">
        <input type="file" name="" id="file" accept="image/*">
        <label for="file">Edit Pic</label>
        <input type="text" name="" placeholder="User Name">
        <input type="email" name="" placeholder="Email ID">
        <input type="text" name="" placeholder="Phone Numer">
        <!-- <input type="text" name="" placeholder="Date of Birth"> -->
        <input type="date" name="" placeholder="Date of Birth">
        <input type="text" name="" placeholder="Gender">
        <button style="float: left; margin: 10px 30px 10px 0">CANCEL</button>
        <button style="float: left; margin: 10px 0 10px 130px">DONE</button>
    </div>
    <div id="theme-open" class="fa-solid fa-angle-left"></div>
    <div class="themes-container">
        <div id="theme-close" class="fas fa-times"></div>
        <div class="theme-toggler">
        </div>
        <h3>pick a color</h3>
        <div class="theme-colors">
            <div class="color" style="background:#0d00a4;"></div>
            <div class="color" style="background:#2980b9"></div>
            <div class="color" style="background:#00b8ff;"></div>
            <div class="color" style="background:hsl(195, 79%, 74%);"></div>

            <div class="color" style="background:#9cf945;"></div>
            <div class="color" style="background:#80c423;"></div>
            <div class="color" style="background:#35e95f;"></div>
            <div class="color" style="background:#1f6924;"></div>

            <div class="color" style="background:#dcace8;"></div>
            <div class="color" style="background:#a24ccd;"></div>
            <div class="color" style="background:#7400b8;"></div>
            <div class="color" style="background:#40288f;"></div>

            <div class="color" style="background:#d4a373;"></div>
            <div class="color" style="background:#99582a;"></div>
            <div class="color" style="background:#ff6c0a;"></div>
            <div class="color" style="background:#ef410c;"></div>

            <div class="color" style="background:#ff5e5e;"></div>
            <div class="color" style="background:#e70e02;"></div>
            <div class="color" style="background:#a20106;"></div>
            <div class="color" style="background:#ffd32a;"></div>

            <div class="color" style="background:#595959;"></div>
            <div class="color" style="background:#e84393;"></div>
            <div class="color" style="background:#f191ac;"></div>
            <div class="color" style="background:#aa4465;"></div>
        </div>
    </div>
@endsection