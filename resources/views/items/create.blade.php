@extends('templates.page')

@section('content')
    <div class="trade-container">
        <h2 class="text-center">Start a Trade with {{ $trader->name }}</h2>
        <div class="trade-form-wrapper">
            <form action="{{ route('create') }}" method="POST" class="trade-form">
                @csrf
                <input type="hidden" name="sender_item_id" value="{{ $item->id }}">
                <input type="hidden" name="receiver_id" value="{{ $trader->id }}"> <!-- Hidden field for trader ID -->

                <div class="form-group">
                    <label for="sender_item_id">Your item:</label>
                    <select name="sender_item_id" id="sender_item_id" class="form-select">
                        <option value="">Select your item</option>
                        @foreach($userItems as $userItem)
                            <option value="{{ $userItem->id }}">{{ $userItem->item_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="receiver_item_id">Item to receive in exchange:</label>
                    <input type="text" id="receiver_item_id" name="receiver_item_id" class="form-control"
                           value="{{ $item->id }}" readonly hidden>
                    <span>{{ $item->item_name }}</span>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-custom">Start Trade</button>
                </div>
            </form>
        </div>
    </div>
@endsection
