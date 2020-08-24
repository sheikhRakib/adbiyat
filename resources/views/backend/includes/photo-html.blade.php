<div class="row">
    <div class="col-md-12 mb-3">
        {{ Form::label('photo', 'Multi Images :',['class'=>'']) }}
        <br/>
        <label class="btn btn-default btn-sm">
            {!! Form::file("photo[]",['multiple'=>'multiple','class'=>(isset($photos) && count($photos)>0)?'':'']) !!}
        </label>
        <br>
        <span>Max height : 360px max width : 360px</span>
        <br>
        <span>Only PNG or JPEG or JPG type images are taken</span>
        <br>
    </div>
    @if(isset($photos))
        @foreach($photos as $photo)
            <div class="col-md-1 pb-3" style="position: relative">
                <a href="{{ route('backend.admin.photos.delete',\App\Libraries\Encryption::encodeId($photo->id)) }}"
                   title="Delete Image"
                   class="btn btn-danger btn-xs float-right action-delete"
                   style="position: absolute; z-index: 100; right: 14px; top: 6px"><i class="fa fa-times"></i></a>
                <img class="col-md-12 img img-bordered"
                     src="{{ $photo->image ? asset('uploads/product-service/product/image/'.$photo->image) : asset('/uploads/img/photo.png') }}"
                     style="width:300px;height:100px;">
            </div>
        @endforeach
    @endif
</div>
