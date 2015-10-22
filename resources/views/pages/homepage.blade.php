@extends('master.index')
@section('content')
<div class="container" id = content>
</br>
</br>
</br>
<h1>Lorem Ipsum Generator & Random User Generator</h1>
<h1> In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic
  elements of a document or visual presentation. By replacing the distraction of meaningful content with filler
  text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</h1>
</br>
<div id="arrow">
             <img src="images/arrow.png" alt="arrow">
</div>

<div class="col-md-4" id="Loremipsum">
           <button type="button" class="btn btn-default btn-block" href="p3.bbartosik.me/lorem">LoremIpsum Generaor</button>
</div>

<div class="col-md-4" id="GenerateUser">
           <button type="button" class="btn btn-default btn-block" href="p3.bbartosik.me/randomu">Random User Data Generator</button>
</div>

<div class="col-md-4" id="Loremipsum">
           <button type="button" class="btn btn-default btn-block" href="p3.bbartosik.me/password">Password Generator</button>
</div>
@stop
