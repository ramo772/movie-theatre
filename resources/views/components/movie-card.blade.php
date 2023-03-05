<div class="card">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <a href="javascript:;" class="d-flex justify-content-center">
            <img src="{{ $movie->image }}" class="img-fluid border-radius-lg">
        </a>
    </div>
    <div class="card-body pt-2">
        <a href="javascript:;" class="card-title h6 d-flex justify-content-center text-darker">
            {{ $movie->name }}
        </a>
        <button type="button" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal"
            data-bs-target="#create-modal-{{ $movie->id }}">Book Ticket</button>
    </div>
</div>
<x-modal formid="Scat" id="create-modal-{{ $movie->id }}" method="post"
    action="{{ route('attendee.store') }}">
    <x-slot name="header">Book Ticket {{ $movie->name }}</x-slot>
    <x-slot name="body">
        @include('admin.forms.create-booking')
    </x-slot>
</x-modal>
