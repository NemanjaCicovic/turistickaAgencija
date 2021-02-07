@extends('master')

@section('title','Paket')

<style>
    * {
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 0;
}

a {
  text-decoration: none;
}

body,
html {
  height: 100%;
}

body {
  background: #444f5a;
  font-family: "Roboto", sans-serif;
}

.container {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  margin: 0 auto;
  max-width: 1000px;
  width: 100%;
}

.card {
  background: #fff;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
  display: flex;
  height: 650px;
  overflow: hidden;
  width: 100%;
}

.slider {
  transition: width 0.4s ease-out;
  width: 65%;
}

.slider ul {
  height: 650px;
  width: 100%;
}

.slider li:first-of-type {
  background-size: cover;
  height: 650px;
  width: 100%;
}

.content {
  color: #444f5a;
  padding: 35px;
  transition: width 0.4s ease-out;
  width: 35%;
}

.content h1 {
  color: #3e4149;
  display: inline-block;
  font-weight: 400;
  margin-bottom: 30px;
}

.content p {
  font-weight: 300;
  line-height: 1.4em;
  margin-bottom: 15px;
  text-align: justify;
}

.content h3 {
  color: #3e4149;
  margin: 20px 0;
}

.content ul {
  margin-bottom: 30px;
}

.content li {
  margin: 10px 0;
}

.button {
  background: #ff9999;
  border: none;
  color: #fff;
  display: block;
  font-weight: 500;
  letter-spacing: 4px;
  padding: 20px 0;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
}

.button:hover {
  background: #ffc8c8;
  cursor: pointer;
}


.booking {
  display: flex;
  position: relative;
}

.booking i {
  color: rgba(0, 0, 0, 0.4);
  font-size: 1.5em;
  position: absolute;
  right: 0;
  top: -10px;
}

.booking i:hover {
  color: #3e4149;
  cursor: pointer;
}

.room-info,
.payment {
  width: 50%;
}

.room-info {
  border-right: 1px solid rgba(0, 0, 0, 0.1);
  padding-right: 30px;
}

.payment {
  padding-left: 30px;
}

.booking label {
  display: block;
  margin-bottom: 10px;
}

.booking input {
  border-radius: 0;
  border: none;
  border-bottom: 1px solid rgba(0, 0, 0, 0.3);
  font-size: 1.2em;
  padding: 15px 10px;
  transition: border 0.1s ease;
  width: 100%;
}

.booking input:focus {
  border-bottom: 2px solid #ff9999;
}

.inline-fields {
  display: flex;
  justify-content: space-between;
  margin: 40px 0;
}

.inline-fields div {
  width: 45%;
}

.terms {
  margin: 40px 0 20px;
  display: flex;
}

.terms input {
  border: 1px solid rgba(0, 0, 0, 0.3);
  display: inline-block;
  margin: 10px 20px 10px 0;
  width: auto;
}

.terms a {
  font-weight: 500;
  transition: color 0.1s ease;
}

.terms a:hover {
  color: #ff9999;
}

</style>

@section('content')


<div class="container">
    <div class="card">
      <div class="slider">
        <ul>
          <li style=" background: url({{$paket->slika}})
    center;"></li>
        </ul>
      </div>

      <div class="content">
        <div class="description">
          <h1>{{$paket->hotel}}</h1>
          <p>
          {{$paket->tip}}
          </p>
          <p>
          {{$paket->opis}}
          </p>

          <h3>${{$paket->cena}} / night</h3>
          <ul>

          </ul>

          <form action="/add-rezervacija" method="post">
            {{ csrf_field() }}
            <input style="padding: 5px 10px; margin: 8px 0px; display: block;" type="text" name="ime" placeholder="ime">
            <input style="padding: 5px 10px; margin: 8px 0px; display: block;" type="text" name="prezime" placeholder="prezime">
            <input style="padding: 5px 10px; margin: 8px 0px; display: block;" type="text" name="broj_osoba" placeholder="broj osoba">
            <input style="display:none;" type="text" name="paket_id" value="{{$paket->id}}">
            <button style="margin-top: 25px;" class="button" type="submit">Save</button>
        </form>

        </div>
      </div>

    </div>
  </div>

  @endsection
