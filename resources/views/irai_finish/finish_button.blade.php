@if (Auth::id() != $user->id)
    @if (Auth::user()->is_finishing($irai->id))
            {!! Form::submit('依頼完了済', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['irai.finish', $irai->id]]) !!}
            {!! Form::submit('依頼を完了する', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif