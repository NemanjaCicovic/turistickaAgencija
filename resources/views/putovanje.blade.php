@extends('master')

@section('title','Putovanje')

<style>
    body {
  height: 100%;
  position: relative;
  background: url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/QwIr88a/aerial-drone-footage-illuminated-skyscrapers-manhattan-new-york-city-modern-night-famous-buildings-travel-crowded-tourism-usa-hd_vdufwi7sx__F0000.png');
  opacity: 0.93;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 14px;
  font-family: Arial, san-serif; }

.container {
    background: #f4f4f4;
    padding: 10px;
    margin: 20px auto;
    -webkit-box-shadow: 0 0 500px rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 500px rgba(0, 0, 0, 0.05); }

.container .list {
    margin: 0;
    padding: 0;
    list-style: none;
    display: block; }

.container .list li {
    display: block;
    padding: 20px;
    background: #fff;
    margin-bottom: 15px;
    position: relative; }

.title{
  font-size: 1.5em;
  color: #666;
  text-align: center;
  margin: 5px;}


.container .list li:before, .container .list li:after {
    content: "";
    display: table; }

.container .list li:after {
    clear: both; }

.container .list li .hotel-name a {
    padding-top: 6px;
    padding-bottom: 2px;
    display: block;
    font-size: 16px;
    font-weight: bold;
    text-decoration: none;
    color: #c20018;
    -webkit-transition: color ease .2s;
    -o-transition: color ease .2s;
    transition: color ease .2s; }
.container .list li .hotel-name:hover a {
    color: #0074d5; }

.container .list li .info {
    margin-top: 1px;
    font-size: 16px;
    color: #666; }

.container .list li .info span {
    font-weight: bold; }

.container .list li .btn {
    position: absolute;
    right: 20px;
    top: 50%;
    margin-top: -13px; }

.container .list li .btn a {
    display: inline-block;
    zoom: 1.3;
    padding: 4px 9px;
    font-size: 16px;
    color: #fff;
    border-radius: 10px;

    background: orange;
    text-decoration: none; }

.container .list li .btn a:hover {

    background: green;

    transition: background-color 0.3s ease-in-out;}

/*background: -webkit-linear-gradient(top, #ff3019 0%, #cf0404 100%);
    background: -o-linear-gradient(top, #ff3019 0%, #cf0404 100%);
    background: linear-gradient(top, #ff3019 0%, #cf0404 100%);*/

.container .list li img {
    max-width: 80px;
    float: left;
    margin-right: 10px;
    border-radius: 4px;
    border: 1px solid #fff; }

.title {
    font-weight: bold;
    color: #666;
    margin-top: 5px; }

footer {
  color: white;
  text-align: center;
  font-weight: bold;
}
</style>

@section('content')


<div class="container">
        <div class="title">
          <h1><Strong>{{$putovanje->destinacija}}</strong></h1>
        </div>

        <ul class="list">
        @foreach($putovanje->paktei as $paket)
          <li>
            <img src="{{$paket->slika}}" alt="" />
            <div class="hotel-name"><a href="{{$putovanje->id}}/{{$paket->id}}">{{$paket->hotel}}</a></div>
            <div class="info">${{$paket->cena}}</div>
            <div class="info">{{$paket->tip}}</div>
            <div class="btn" name="select" type="select" id="select-hotel" data-submit="...Sending"><a href="{{$putovanje->id}}/{{$paket->id}}">See More</a></div>
          </li>
          @endforeach
        </ul>
      </div>

