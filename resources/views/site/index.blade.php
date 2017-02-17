@extends('layouts.site')
@section('content')
    @include('layouts._top')
    @include('layouts._portfolio')
@endsection

@section('script')
    <script>
        var closeModal = function(){
            $('.modal').css('display', 'none');
            $('.modal-bg').css('display', 'none');
        }

        $('#sendMeseage').click(function(){
           $('.modal').css('display', 'block');
           $('.modal-bg').css('display', 'block');
        });

        $('.modal-bg').click(function () {
            closeModal();
        });

        $('.modal-close').click(function () {
            closeModal();
        })
    </script>
@endsection