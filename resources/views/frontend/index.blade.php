@extends('frontend.layouts.app')
@section('header-css')

@endsection
@section('content')
  <div class="col-md-8">
    <main class="mx-2">
      <!-- Selected Content -->
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
          <strong class="d-inline-block text-success">Today's Special</strong>

          <h1 class="display-4 font-italic">Bangladesh: Birth of a Nation</h1>

          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
              about what's most interesting in this post's contents.<a href="#"
                  class="ml-2 text-info font-weight-bold">Continue reading</a></p>
      </div>
      <!-- ./Selected Content -->


        <div class="mx-1 row">
          <!-- card -->
          <div>
              <div class="card flex-md-row mb-3 box-shadow">
                  <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-primary">গল্প</strong>
                      <h3 class="mb-0 font-italic">The Metamorphosis<span class=" ml-3 small text-muted">- Franz Kafka</span></h3>

                      <p class="card-text mb-auto text-justify">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro, obcaecati
                          laboriosam, inventore eum quidem consequatur veritatis recusandae sed non
                          dolores totam...
                          <a href="">Continue reading</a>
                      </p>
                  </div>
              </div>
          </div>
          <!-- ./card -->

        </div>

        <div class="mx-auto">
            <div>Pagination</div>
        </div>
    </main>
  </div>
  <div class="col-md-4">
      @include('frontend.includes.aside')
  </div>
@endsection
@section('footer-script')

@endsection
