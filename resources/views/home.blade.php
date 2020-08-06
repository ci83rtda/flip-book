@extends('layouts.app')

@section('css')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <h5 class="card-title">Please place the book below this title.</h5>
                    <p>Use this file as example for pdf: https://www.thenose.swiss/uploads/CVrJfFE1/fragrance-brochure.pdf</p>
                    <p>Must be responsive.</p>
                    <hr>

                    <div class="sample-container flip-book-container" src="pdfFile.pdf">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>

</script>
@endsection
