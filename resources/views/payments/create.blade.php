@extends('layout')
@section('content')

    <div class="card">
        <div class="card-header">Payment Page</div>
        <div class="card-body">

            <form action="{{ url('payments') }}" method="post">
                {!! csrf_field() !!}
                <label>Enrollment_id</label></br>
                <input type="text" name="enrollment_id" id="enrollment_id" class="form-control"></br>
                <label>Paid_date</label></br>
                <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
                <label>Amount</label></br>
                <input type="text" name="amount" id="amount" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
