@extends('layouts.master')
@section('main-content')
<div class="container">
    <h1>Add Item Form</h1>
    <form action="" id="itemForm">
        <div class="show-msg"></div>
        @csrf
        <div class="mb-3">
            <label for="item_name" class="form-label fw-bold">Item Name</label>
            <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Enter Item Name" />
        </div>

        <div class="mb-3">
            <label for="" class="form-label fw-bold">Quantity</label>
            <input type="number" class="form-control" name="quantity" id="quantity" placeholder="Enter Quantity" />
        </div>

        <button type="submit" id="submitBtn" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="{{route('item.list')}}">Cancel</a>
    </form>
</div>
@endsection
@push('js')
<script>
    $("#itemForm").on('submit', function(e) {
        e.preventDefault();

        // clear the existing messages
        var errElement = document.getElementsByClassName('err-msg');
        if (errElement.length > 0) {
            for (var i = errElement.length - 1; i >= 0; i--) {
                errElement[i].remove();
            }
        }

        $.ajax({
            url: "{{route('item.store')}}",
            type: "post",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.error) {
                    //validation fails
                    // console.log(response.error); 
                    $.each(response.error, function(key, value) {
                        var inputElement = $(document).find('[name="' + key + '"]');
                        inputElement.after('<span class="err-msg">' + value[0] + '</span>');

                    });

                } else {
                    // data inserted, display success message
                    $("#itemForm")[0].reset();
                    $(".show-msg").html('<div class="alert alert-success">'+response.success+'</div>');

                }
            }

        });
    });
</script>

@endpush