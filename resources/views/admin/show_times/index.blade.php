@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">All Show Times</h5>
                            </div>
                            <x-button-add button class=" btn-primary " type="button" data-bs-toggle="modal"
                                data-bs-target="#create-modal">
                                Add New Show Time
                            </x-button-add>
                        </div>
                        <x-modal formid="Scat" id="create-modal" method="post" action="{{ route('show_times.store') }}">
                            <x-slot name="header">Add New Show Time</x-slot>
                            <x-slot name="body">
                                @include('admin.forms.create-show-time')
                            </x-slot>
                        </x-modal>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Start At </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            End At </th>

                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">{{ $row->id }}</p>
                                            </td>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ \Carbon\Carbon::parse($row->start_at)->format('g:i A') }}</p>
                                            </td>
                                            <td class="ps-4">
                                                <p class="text-xs font-weight-bold mb-0">
                                                    {{ \Carbon\Carbon::parse($row->end_at)->format('g:i A') }}</p>
                                            </td>
                                            <td class="text-center">
                                                <a class="fas fa-pencil text-secondary" type="button"
                                                    data-bs-toggle="modal" data-bs-target="#edit-modal-{{ $row->id }}">
                                                </a>
                                                <a class="fas fa-trash text-secondary" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#delete-modal-{{ $row->id }}" data-url=""></a>
                                            </td>
                                            <x-modal id="edit-modal-{{ $row->id }}" method="put"
                                                action="{{ route('show_times.update', $row->id) }}">
                                                <x-slot name="header">Edit {{ $row->name }} Shot Time</x-slot>
                                                <x-slot name="body">
                                                    @include('admin.forms.edit-show-time')
                                                </x-slot>
                                            </x-modal>

                                            <x-modal-delete id="delete-modal-{{ $row->id }}" method="delete"
                                                action="{{ route('show_times.destroy', ['show_time' => $row->id]) }}">
                                                <x-slot name="header">you will delete the show time
                                                    {{ \Carbon\Carbon::parse($row->start_at)->format('g:i A') }}-
                                                    {{ \Carbon\Carbon::parse($row->end_at)->format('g:i A') }}, Are you
                                                    sure ??</x-slot>
                                                <x-slot name="body">
                                                </x-slot>
                                            </x-modal-delete>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-2">
                                {{ $data->links('vendor.pagination.bootstrap-4') }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
