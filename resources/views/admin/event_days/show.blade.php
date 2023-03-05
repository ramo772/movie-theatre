@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="event">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-event justify-content-between">
                            <div>
                                <h5 class="mb-0"> Event Day Details</h5>
                            </div>
                            @if ($count < 3)
                                <x-button-add button class=" btn-primary " type="button" data-bs-toggle="modal"
                                    data-bs-target="#create-modal">
                                    Add New Movie
                                </x-button-add>
                            @endif
                        </div>
                        <x-modal formid="Scat" id="create-modal" method="post" action="{{ route('event.store') }}">
                            <x-slot name="header">Add New Event Day</x-slot>
                            <x-slot name="body">
                                @include('admin.forms.create-event')
                            </x-slot>
                        </x-modal>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="mx-4">
                            @foreach ($events as $event)
                                <div class="card">
                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                        <a href="javascript:;" class="d-block">
                                            <img src="{{ $event->movie->image }}" width="200px" class="img-fluid border-radius-lg">
                                        </a>
                                    </div>
                                    <div class="card-body pt-2">
                                        <a href="javascript:;" class="card-title h5 d-block text-darker">
                                            {{ $event->movie->name }}
                                        </a>
                                        <p class="card-description mb-4">
                                            {{ $event->show_time->start_at }} - {{ $event->show_time->end_at }} </p>
                                            <a class="fas fa-pencil text-secondary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit-modal-{{ $event->id }}">
                                        </a>
                                        <a class="fas fa-trash text-secondary" type="button" data-bs-toggle="modal"
                                            data-bs-target="#delete-modal-{{ $event->id }}" data-url=""></a>
                                    </div>
                                </div>
                                <x-modal id="edit-modal-{{ $event->id }}" method="put"
                                    action="{{ route('event.update', $event->id) }}">
                                    <x-slot name="header">Edit {{ $event->name }} movie</x-slot>
                                    <x-slot name="body">
                                        @include('admin.forms.edit-event')
                                    </x-slot>
                                </x-modal>
                                <x-modal-delete id="delete-modal-{{ $event->id }}" method="delete"
                                    action="{{ route('event.destroy', ['event' => $event->id]) }}">
                                    <x-slot name="header">you will delete this Event , Are
                                        you
                                        sure ??</x-slot>
                                    <x-slot name="body">
                                    </x-slot>
                                </x-modal-delete>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
