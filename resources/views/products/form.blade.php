{!!Form::open(['route' => [$product->url(),$product->id],'method' => $product->method(),'class' => 'app-form'])!!}
    <div>
        {!! Form::label('title','Product Title') !!}
        {!! Form::text('title',$product->title,['class' => 'form-control'])!!}
    </div>

    <div>
        {!! Form::label('description','Product Description') !!}
        {!! Form::textarea('description',$product->description,['class' => 'form-control'])!!}
    </div>

    <div>
        {!! Form::label('price','Product Price') !!}
        {!! Form::number('price',$product->price,['class' => 'form-control'])!!}
    </div>

    <div class="">
        <input type="submit" value="Save" class="btn btn-primary">
    </div>


{!!Form::close()!!}