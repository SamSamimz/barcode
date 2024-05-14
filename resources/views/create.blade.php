<x-main-layout>
    <div class="bg-white p-3 rounded">
        <div class="py-3">
            <a href="{{route('products.index')}}" class="btn btn-primary">All Product</a>
        </div>
        <div>
            <div class="col-6 mx-auto">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title :</label>
                        <input type="text" id="price" class="form-control" name="title">
                        @error('title')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price :</label>
                        <input type="text" id="price" class="form-control" name="price">
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Description :</label>
                        <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                        @error('description')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>