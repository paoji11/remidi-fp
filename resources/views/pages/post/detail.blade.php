@extends('layouts.app')

@section('title')
    Description
@endsection

@section('content')
<div class="container">
  <br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Post Description</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
            <br><br>
        	<div class="post-title">
                <strong>Nomor Kendaraan: </strong> {{ $post->nomorkendaraan }}
            </div>
            <br>
            <div class="post-description">
                <strong>Tipe Kendaraan: </strong> {{ $post->tipekendaraan }}
            </div>
            <br>
            <div class="post-description">
                <strong>Tahun Kendaraan: </strong> {{ $post->tahunkendaraan }}
            </div>
        </div>
    </div>
</div>
@endsection