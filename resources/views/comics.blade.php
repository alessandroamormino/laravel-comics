{{-- estendo il main layout --}}
@extends('layout/main')

{{-- content --}}
@section('content')
  <main class="comics">
    <div class="separator"></div>
    <div class="container">
      <div class="thumb">
        <img src="{{'https://www.coverbrowser.com/image/action-comics/1-1.jpg'}}" alt="Comic">
      </div>
    </div>
    <div class="container">
      <div class="left">
        <h1>Action Comics #1000: The Deluxe Edition</h1>
        <div class="price">
          <div class="left">
            <span>US Price: $19.99</span>
          </div>
          <div class="right">
            <span>Available</span>
          </div>
        </div>
        <div class="paragraph">          
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex quisquam et itaque possimus aperiam praesentium ullam sit consectetur deleniti blanditiis quidem voluptate, tenetur ipsa? Impedit voluptatum eos magni iure eaque?</p>
          
        </div>
      </div>
      <div class="right">
        <span>IMAGE</span>
        <img src="{{'https://www.coverbrowser.com/image/action-comics/1-1.jpg'}}" alt="asd">
      </div>
    </div>
  </main>
@endsection