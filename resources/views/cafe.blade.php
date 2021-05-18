@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')
<div class="container" style="padding-top: 100px;">
    <h4>Cafe Drinks</h4>
    <div class="row">
        @foreach ($beverages as $beverage)
        <div id="{{ $beverage['id'] }}" class="col btn-info beverage" style="margin: 5px;">
            {{ $beverage['name'] }}
            <br />
            {{ $beverage['caffeine_level'] }} g Caffeine
        </div>
        @endforeach
    </div>
</div>

<div class="container" style="padding-top: 100px;">
    <h4>Consumed Drinks</h4>
    @foreach ($consumedBeverages['beverages'] as $consumedBeverage)
    <div class="row">
        <div class="col"> {{ $consumedBeverage['name'] }} </div>
        <div class="col"> {{ $consumedBeverage['caffeine_level'] }} g Caffeine</div>
    </div>
    @endforeach
    <div class="row" style="padding-top: 20px;">
        <div class="col">
        Total Caffeine Consumed: <b style="@if ($consumedBeverages['caffeine_level'] >= 500) color: red; @endif">{{ $consumedBeverages['caffeine_level'] }} g</b>
        </div>
    </div>
</div>

@endsection

<script>
    $(document).ready(function() {
        $(".beverage").click(function() {
            $.get("{{ @url('/api/user/' . $user->id . '/drink') }}" + '/' + this.id);
            window.location.reload();
        });
    });
</script>
