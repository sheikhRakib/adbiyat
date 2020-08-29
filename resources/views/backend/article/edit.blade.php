@extends('backend.layouts.app')
@section('header-css')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row col-sm">
              <h5><i class="fa fa-plus pr-2"></i>Add Article</h5>
            </div>
        </div>
        {!! Form::open(['route'=>array('backend.admin.article.update',\App\Libraries\Encryption::encodeId($article->id)), 'method'=>'patch','id'=>'dataForm']) !!}
        <div class="card-body">
            <div class="row">
              <div class="col-md-12 form-group">
                  {{ Form::label('title','Title : ',['class'=>'font-weight-bold required-star']) }}
                  {!! Form::text('title',$article->title,['class'=>$errors->has('title')?'form-control is-invalid':'form-control required','placeholder'=>'Title']) !!}
              </div>
              <div class="col-md-6 form-group">
                  {!! Form::label('author_id','Author Name : ',['class'=>'font-weight-bold required-star']) !!}
                  {!! Form::select('author_id',$authors,$article->author_id,['class'=>$errors->has('author_id')?'form-control is-invalid':'form-control required']) !!}
              </div>
              <div class="col-md-6 form-group">
                  {{ Form::label('slug','Slug : ',['class'=>'font-weight-bold required-star']) }}
                  {!! Form::text('slug',$article->slug,['class'=>$errors->has('slug')?'form-control is-invalid':'form-control required','placeholder'=>'Slug']) !!}
              </div>
                <div class="col-md-12 form-group">
                    {!! Form::label('body','Article Body : ',['class'=>'font-weight-bold required-star']) !!}
                    {!! Form::textarea('body',$article->body,['class'=>$errors->has('body')?'form-control is-invalid':'form-control required','rows'=>'5','placeholder'=>'Write article content...','id'=>'body']) !!}
                </div>
                <div class="col-md-4 form-group">
                    {!! Form::label('status','Status : ',['class'=>'font-weight-bold required-star']) !!}
                    {!! Form::select('status',[1=>'Active',0=>'Inactive'],$article->status,['class'=>$errors->has('status')?'form-control is-invalid':'form-control required']) !!}
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('backend.admin.article.index') }}" class="btn btn-primary"><i class="fa fa-backward pr-2"></i>Back</a>
            <button type="submit" class="btn float-right btn-primary"><i class="fa fa-save pr-2"></i>update</button>
        </div>
        {!! Form::close() !!}
    </div><!--card-->
@endsection

@section('footer-script')
    <script src="{{ asset('assets/backend/dist/js/tinymce/tinymce.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            /**********************
             VALIDATION START HERE
             **********************/
            $('#dataForm').validate({
                errorPlacement: function () {
                    return false;
                }
            });
        });

        /*********************
            RICH TEXT HERE
         *********************/
         tinymce.init({
             selector: '#body',
             height: 500,
             plugins: [
               'advlist autolink link image lists charmap print preview hr anchor pagebreak',
               'spellchecker searchreplace wordcount visualblocks visualchars code fullscreen',
               'insertdatetime media nonbreaking save table contextmenu directionality',
               'emoticons template textcolor colorpicker textpattern imagetools help autosave paste',
             ],

             toolbar: 'undo redo | styleselect | fontselect fontsizeselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor |  link  table | print preview fullscreen | emoticons | help',

             // menu: {
             //   favs: {title: 'My Favorites', items: 'code | spellchecker '}
             // },
             menubar: 'file edit view insert format tools',
             paste_retain_style_properties: "color font-size font-family",
             content_css: 'css/content.css'
           });
    </script>
@endsection
