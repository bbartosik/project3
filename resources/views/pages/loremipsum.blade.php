@extends('master.index')
@section('content')
<br>
<br>
<h1>LOREM IPSUM GENERATOR</h1>
<br>
<h1>Create random filler text for your applications.</h1>

<div class="row">
<div id="lorem-set">
{!! Form::open(array('url' => 'lorem' , 'method' => 'post')) !!}
<br>
{!! Form::label('loremlable', 'Chose number of paragraphs you need!') !!}

{!! Form::select('numberofp',
array(
'1' => '1 paragraph',
'2' => '2 paragraphs',
'3' => '3 paragraphs',
'4' => '4 paragraphs',
'5' => '5 paragraphs',
'6' => '6 paragraphs'), '1'); !!}
<br>
{!! Form::submit('Create LoremIpsum Text ', ['class' => 'btn btn-default btn-block']) !!}
</div>
</div>
{!! Form::close() !!}
<div class="row">
  <div id='lorem'>
    @if (isset($result))
    @foreach ($result as $results)
        <p>{{ $results }}</p>
      @endforeach
    @endif
  </div>
</div>
<br>
@stop