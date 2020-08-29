@extends('backend.layouts.app')
@section('content')
    <ol class="breadcrumb alert alert-primary p-2">
        <li class="breadcrumb-item"><strong>Creator Name :  </strong><span>{{ $article->first_name." ".$article->last_name }}</span></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <div class="row col-sm">
                <h5><i class="fa fa-list-alt pr-2"></i>Article Details</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="row">
                        <div class="col-lg-4">
                            Status
                        </div>
                        <div class="col-lg-8">
                            @if($article->status == 1)
                                <label class='badge badge-success'>Active</label>
                            @else
                                <label class='badge badge-danger'>Inactive</label>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="row">
                        <div class="col-lg-4">
                            Author Name
                        </div>
                        <div class="col-lg-8">
                            {{$article->author_id}}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="row">
                        <div class="col-lg-4">
                            Title
                        </div>
                        <div class="col-lg-8">
                            {{$article->title}}
                        </div>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <div class="row">
                        <div class="col-lg-4">
                            Article Slug
                        </div>
                        <div class="col-lg-8">
                              {{$article->slug}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group font-weight-bold">
                  <u>Article Body : </u>
                </div>
                <div class="col-md-12 form-group">
                      {!! $article->body !!}
                </div>
            </div>
            <div class="card-footer px-1">
                <a href="{{ route('backend.admin.article.index') }}" class="btn btn-primary"><i class="fa fa-backward pr-2"></i>
                    Back</a>
            </div>
        </div><!--card-->
@endsection
