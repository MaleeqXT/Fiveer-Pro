@extends('admin.layouts.app')

@section('content')
<div style="margin-top: 72px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Form Title</div>
                <div class="card-body">
                    <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- Description Field -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description"></textarea>
                        </div>
                    
                        <!-- Price Field -->
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" placeholder="Enter price">
                        </div>
                    
                        <!-- Image Upload Field -->
                        <div class="form-group mt-5">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
