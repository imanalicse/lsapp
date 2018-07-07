@extends("layouts.app")

@section('content')
    <h1><?php echo $title ?></h1>
    <p>This is the about page </p>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            
           jQuery.ajax({
               method: 'get',
               url: 'ajaxRequest',
               success: function (response) {
                   console.log(response);
               }
           });

           //CSRF token for ajax request
           jQuery.ajax({
            method: 'post',
            url: 'ajaxPostRequest',               
            data: {'id' : 4},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                console.log(response);
            }
        });
        });
    </script>
@endsection
