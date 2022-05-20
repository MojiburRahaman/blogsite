@extends('frontend.master')

@section('content')
 <!-- 404 Section Start -->
 <section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <!-- 404 Content Start -->
                <div class="f0f--content text-center pb--60">
                    <h2 class="h1">404</h2>

                    <h2 class="h2">Opps...</h2>

                    <p>The page you're looking for is not found on this address.</p>
                    {{-- <p>Please, try a search.</p>

                    <form action="#">
                        <input type="text" name="search" placeholder="Enter Your Search Terms..." class="form-control">

                        <button type="submit" class="btn btn-default">Search</button>
                    </form> --}}
                </div>
                <!-- 404 Content End -->
            </div>
        </div>
    </div>
</section>
<!-- 404 Section End -->
@endsection