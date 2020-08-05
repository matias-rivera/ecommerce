@auth    
    {!! Form::open(['method' => 'DELETE','route' => ['products.destroy',$product->id],'onsubmit' =>
    'return confirm("¿Are you sure")'])!!}
        <input type="submit" value="Delete product" class="btn btn-danger">
    {!! Form::close()!!}
@endauth