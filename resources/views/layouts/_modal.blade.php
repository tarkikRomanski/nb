@section('modal')
    <div class="modal">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <p class="col-9 modal-header">Оставте заявку и наши менеджеры свяжутся с Вами в ближайшее время!</p>
                </div>
            </div>

                    {{ Form::open(['route'=>'send', 'method'=>'post']) }}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">Имя</div>
                    <div class="col-md-9">
                        {{ Form::text('name', old('name')) }}
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">Телефон</div>
                    <div class="col-md-9">
                        {{ Form::text('phone', old('phone')) }}
                    </div>
                </div>
            </div>

                    <div class="container-fluid">
                        <div class="row">
                    <div class="col-md-3">Ваш вопрос</div>
                    <div class="col-md-9">
                        {{ Form::textarea('question', old('question')) }}
                    </div>
                        </div>
                    </div>
                    {{ Form::submit('Оставить заявку', ['class'=>'btn-blck offset-md-3 col-sm-4']) }}
                    {{ Form::close() }}

        </div>
    </div>
    <div class="modal-bg"></div>
@show