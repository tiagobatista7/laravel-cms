@extends('site.layout')

@section('title', $page['title'])

@section('content')

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>{{$page['title']}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->
<br/><br/>

<h4 class="margin-left">{{$page['title']}}</h4><br/>
<div class="container">
    {!! $page['body'] !!}
</div>
<br/>

@endsection
