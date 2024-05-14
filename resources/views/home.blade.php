<x-main-layout>
    <div class="bg-white p-3 rounded">
        <div class="py-3">
            <a href="{{route('products.create')}}" class="btn btn-primary">Create Product</a>
        </div>
        <table class="table table-hover" id="myTable">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Price</th>
                <th>Code</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($products as $index => $product)
                <tr>
                    <th>{{ ++$index }}</th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{!! DNS2D::getBarcodeHTML($product->product_code, 'QRCODE',3,3,'green') !!}
                    <td>
                        <a class="btn btn-primary" href="javascript:void(0)">Edit</a>
                        <button onclick="document.getElementById('deleteForm').submit()"  class="btn btn-danger">Delete</button>
                    </td>
                    <form id="deleteForm" action="{{route('products.destroy',$product)}}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                </tr>
                @empty
                    
                @endforelse
            </tbody>
          </table>
    </div>
</x-main-layout>