@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 115px"></div>
    <div>
        <div>
            <form action="">
                @csrf
                <label class="form-label d-flex justify-content-center">Es se que vous êtes la personne blesser ?</label>
                <div class="d-flex justify-content-center">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioButton" id="radioOui">
                        <label class="form-check-label">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radioButton" id="radioNon">
                        <label class="form-check-label">Non</label>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection