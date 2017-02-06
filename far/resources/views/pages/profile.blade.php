@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <p>{{ $married }}</p>
                    <?php
                    	echo $married;
                    ?>
                    <p>{{ $test }}</p>
                    <p>Age is: {{ $age }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
