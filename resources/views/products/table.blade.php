<table class="table table-responsive" id="products-table">
    <thead>
    <th>Title</th>
    <th>Abstract</th>
    <th>Description</th>
    <th>Size</th>
    <th>Area</th>
    <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->title !!}</td>
            <td>{!! $product->abstract !!}</td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->size !!}</td>
            <td>{!! $product->area !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>