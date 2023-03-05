@foreach ($row->event->unique('day') as $event)
    <div class="card card-frame">
        <div class="card-body">
            <h6>Day: {{ $event->day->day }}</h6>
            <h6>Show Times</h6>
            @foreach ($row->show_times($event->day->id) as $show_time)
                <p>{{ $show_time->start_at }} - {{ $show_time->end_at }} </p>
            @endforeach
        </div>
    </div>
@endforeach
